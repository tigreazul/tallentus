<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Admin/Controller/login.php
Propósito       : Página de Administrador Dashboard
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 06/05/2016 - 15:12 hrs.
*************************************************************
*/
class Empresa extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('empresa_model', 'empresa', TRUE);
        $this->load->model('inicio_model', 'inicio', TRUE);
    }

    public function index()
    {
        $web_css  = array(
            array('href'=>'assets/css/tallentus.min.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );

        $empresa = $this->empresa->_get_lista('tbl_empresa');

        ## Inicio de Sesión
        $page_title = 'Tallentus - Empresa';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/landing';

        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'module'     => $module,
            'empresa'    => $empresa,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function crear_empresa()
    {
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'script/materialize/css/materialize.css'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            array('src'=>'script/materialize/js/materialize.js')
        );

        ## Inicio de Sesión
        $page_title = 'Tallentus - Empresa';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/index';

        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function registrar(){
        if($this->input->post()){
            $nombre         = $this->input->post('nombre');
            $razon          = $this->input->post('razon');
            $email          = $this->input->post('email');
            $ruc            = $this->input->post('ruc');
            $direccion      = $this->input->post('direccion');
            $fijo           = $this->input->post('fijo');
            $descripcion    = $this->input->post('descripcion');
            $password       = $this->input->post('password');

            $arrDatos = array(
                'emp_nombre'            => $nombre,
                'emp_razon_social'      => $razon,
                'emp_email'             => $email,
                'emp_ruc'               => $ruc,
                'emp_direccion'         => $direccion,
                'emp_telefono'          => $fijo,
                'emp_descripcion'       => $descripcion,
                'emp_estado'            => 1,
                'emp_logo'              => 'user_new.svg',
                'emp_clave'             => sha1($password),
                'emp_fecha_creacion'    => date('Y-m-d H:m:s'),
                'id_rol'                => 0,
                'emp_seo'               => slugify($razon)
            );
            
            $id = $this->inicio->_insertar('tbl_empresa',$arrDatos);
            if($id){
                ## Mensaje de activacion para email
                $dMsg = array(
                    'nombre' => $razon,
                    'correo' => $email
                    );
                $html_msg = $this->mensaje->html_mensaje($dMsg);
                $subject    = "Bienvenido(a) a Tallentus";
                $correo = new PHPMailer();
                $correo->SetFrom('no-reply@tallentus.com','Tallentus - Empresa');
                $correo->AddAddress($email, $razon);
                $correo->Subject = $subject;
                $correo->MsgHTML($html_msg);
                if(!$correo->Send()) {
                    redirect('empresa','refresh');
                }else{
                    redirect('empresa','refresh');
                }
            }
        }else{
            redirect('empresa','refresh');
        }
    }

    public function entrar(){
        $this->form_validation->set_rules('email', 'Email', 'required|trim|min_length[2]|max_length[150]|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|max_length[150]|xss_clean');
        //lanzamos mensajes de error si es que los hay
        $this->form_validation->set_message('required', 'El %s es requerido');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
        $arrayResultado = array();
        if($this->form_validation->run() == FALSE)
        {
            $arrayResultado = array(
                "resultado"=>0,
                "mensaje"=> validation_errors()
            );
        }else{
            $username   = $this->input->post('email');
            $password   = sha1($this->input->post('password'));
            $check_user = $this->empresa->login_user($username,$password);
            if($check_user == TRUE)
            {
                $data = array(
                    'is_logued_in'  =>  TRUE,
                    'id_usuarioemp' =>  $check_user->emp_id,
                    'username_emp'  =>  $check_user->emp_nombre,
                    'email_emp'     =>  $check_user->emp_email,
                    'imagen'        =>  $check_user->emp_logo
                );
                
                $this->session->set_userdata($data);
                $arrayResultado = array(
                    "resultado" => 1,
                    "mensaje"   => 'Entraste campeón!!',
                    "envio"     => base_url().'empresa/mi-empresa'
                );
            }else{
                $arrayResultado = array(
                    "resultado"=>0,
                    "mensaje"=>'Usuario y/o Contraseña incorrecta'
                );
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($arrayResultado));
    }

    public function perfil(){
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'assets/materialize/css/materialize.css'),
            array('href'=>'https://fonts.googleapis.com/icon?family=Material+Icons'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );    
        ## Inicio de Sesión
        $page_title = 'Tallentus - Mi Perfil';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/perfil';

        #Logica
        $vEmail = $this->session->userdata('email_emp');
        $vId = $this->session->userdata('id_usuarioemp');
        if($vEmail == null or empty($vEmail)){
            redirect('','refresh');
        }else{
            $postulaciones = $this->empresa->_get_lista_multiple('tbl_postulaciones','result',array('postu_empresa_id' =>$vId));
            $arrEmail = $this->empresa->_obtener_email($vEmail);
            if(count($arrEmail)>0){
                $tEmail = $arrEmail;
            }else{
                redirect('','refresh');
            }
        }

        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'datos'      => $tEmail,
            'postu'      => $postulaciones,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function crear_aviso(){
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|trim|min_length[2]|max_length[250]|xss_clean');
        $this->form_validation->set_rules('descripcion', 'descripcion', 'required|trim|min_length[6]|xss_clean');
        //lanzamos mensajes de error si es que los hay
        $this->form_validation->set_message('required', 'El %s es requerido');
        if($this->form_validation->run() == FALSE)
        {
            print_r(validation_errors());
        }else{
            
            $titulo      = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $beneficio   = $this->input->post('beneficio');
            $requisito   = $this->input->post('requisito');
            $vacantes    = $this->input->post('vacantes');
            $experiencia = $this->input->post('experiencia');
            $salario     = $this->input->post('salario');
            $distrito    = $this->input->post('distrito');
            $jornada     = $this->input->post('jornada');
            $contrato    = $this->input->post('contrato');
            $educacion   = $this->input->post('educacion');
            $area   = $this->input->post('area');

            
            $empresa = '';
            if($this->session->userdata('id_usuarioemp') != ''){
                $empresa = $this->session->userdata('id_usuarioemp');
            }

            $arrDatos = array(
                'postu_titulo'              => $titulo,
                'postu_seo'                 => slugify($titulo),
                'postu_desc_larga'          => $descripcion,
                'postu_beneficios'          => $beneficio,
                'postu_requisitos'          => $requisito,
                'postu_vacantes'            => $vacantes,
                'postu_tiempo_experiencia'  => $experiencia,
                'postu_salario'             => $salario,
                'postu_distrito_id'         => $distrito,
                'postu_jornada_id'          => $jornada,
                'postu_tipo_contrato_id'    => $contrato,
                'postu_educacion_id'        => $educacion,
                'postu_area_id'             => $area,
                'postu_empresa_id'          => $empresa,
                'postu_fecha_creacion'      => date('Y-m-d H:m:s'),
                'postu_caduca'              => $this->recursos->suma_meses(date('Y-m-j'),1),
                'postu_estado'              => 1
            );

            $ins = $this->inicio->_insertar('tbl_postulaciones',$arrDatos);
            if($ins){
                redirect('empresa/mi-empresa','refresh');
            }else{
                redirect('crear-aviso','refresh');
            }

        }
    }

    public function aviso(){
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'script/materialize/css/materialize.css'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            array('src'=>'script/materialize/js/materialize.js')
        );


        $vEmail = $this->session->userdata('email_emp');
        if($vEmail == null or empty($vEmail)){
            redirect('','refresh');
        }else{
            $distrito   = $this->inicio->_lst_cbo('dist_id','dist_descripcion','tbl_distrito','-- DISTRITOS --');
            $jornada    = $this->inicio->_lst_cbo('jor_id','jor_descripcion','tbl_jornada','-- JORNADA --');
            $educacion  = $this->inicio->_lst_cbo('edu_id','edu_descripcion','tbl_educacion','-- EDUCACIÓN --');
            $contrato   = $this->inicio->_lst_cbo('contra_id','contra_descripcion','tbl_contrato','-- CONTRATO --');
            $area       = $this->inicio->_lst_cbo('area_id','area_nombre','tbl_areas','-- AREA --');
        }

        ## Inicio de Sesión
        $page_title = 'Tallentus - Empresa';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/avisos';

        $data = array(
            'titulo'     => $page_title,
            'cbo_distrito'=> $distrito,
            'cbo_jornada'=> $jornada,
            'cbo_educacion'=> $educacion,
            'cbo_contrato'=> $contrato,
            'cbo_area'  => $area,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function listado_empresa(){
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            array('src'=>'script/materialize/js/materialize.js')
        );


        #Logica
        // Distrito
        $distrito = $this->empresa->_get_lista('tbl_distrito');
        foreach ($distrito as $dist) {
            $dst[] = array(
                'id_dist' => $dist->dist_id,
                'describe_dist' => $dist->dist_descripcion,
                'postu_dist' => count($this->empresa->_get_lista_multiple('tbl_postulaciones','result',array('postu_distrito_id' => $dist->dist_id,'postu_estado' => 1)))
            );
        }

        $empresa = $this->empresa->_get_lista('tbl_empresa');
        foreach ($empresa as $emp) {
            $aEmpresa[] = array(
                'id_emp' => $emp->emp_id,
                'imagen' => $emp->emp_logo,
                'razon_social' => $emp->emp_razon_social,
                'razon_seo' => $emp->emp_seo,
                'emp_postu' => count($this->empresa->_get_lista_multiple('tbl_postulaciones','result',array('postu_empresa_id' => $emp->emp_id,'postu_estado' => 1)))
            );
        }

        ## Inicio de Sesión
        $page_title = 'Tallentus - Empresa';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/empresas';

        // var_dump($aEmpresa);
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'distrito'   => $dst,
            'empresa'    => $aEmpresa,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);   
    }

    public function empresa_public($seo_id){
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'assets/materialize/css/materialize.css'),
            array('href'=>'https://fonts.googleapis.com/icon?family=Material+Icons'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );    
        ## Inicio de Sesión
        $page_title = 'Tallentus - Empresa';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/public';


        #Logica

        $vId = $this->session->userdata('id_usuarioemp');

        if($seo_id == null or empty($seo_id)){
            redirect('','refresh');
        }else{
            $empresa = $this->empresa->_get_lista('tbl_empresa',$seo_id,'emp_seo');
            if(count($empresa)== 0){
                redirect('','refresh');
            }
            $postulaciones = $this->empresa->_get_postulaciones('result',null,$empresa['emp_id']);
            $rnd_prst = $this->empresa->_get_postulaciones('result',null,null,null,6);
        }

        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'empresa'    => $empresa,
            'rand_post'  => $rnd_prst,
            'postu'      => $postulaciones,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function empresa_distrito($seo_id){
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'assets/materialize/css/materialize.css'),
            array('href'=>'https://fonts.googleapis.com/icon?family=Material+Icons'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );    
        ## Inicio de Sesión
        $page_title = 'Tallentus - Empresa';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/distrito';


        #Logica

        $vId = $this->session->userdata('id_usuarioemp');

        if($seo_id == null or empty($seo_id)){
            redirect('','refresh');
        }else{
            $empresa = $this->empresa->_get_lista('tbl_empresa',$seo_id,'emp_seo');
            if(count($empresa)== 0){
                redirect('','refresh');
            }
            $postulaciones = $this->empresa->_get_postulaciones('result',null,$empresa['emp_id']);
        }

        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'empresa'    => $empresa,
            'postu'      => $postulaciones,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function editar_perfil()
    {
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'script/materialize/css/materialize.css'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            array('src'=>'script/materialize/js/materialize.js'),
            array('src'=>'assets/js/jquery.form.js')
        );  
        ## Inicio de Sesión
        $page_title = 'Tallentus - Editar Perfil Empresa';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/edit_empresa';

        #Logica
        
        #### Obteniendo datos para mostrar
        $vEmail = $this->session->userdata('email_emp');
        if($vEmail == null or empty($vEmail)){
            redirect('empresa','refresh');
        }else{
            $arrEmail = $this->empresa->_obtener_email($vEmail);
            if(count($arrEmail)>0){
                $tEmail = $arrEmail;
            }else{
                redirect('empresa','refresh');
            }
        }


        #### Metodos Post
        if($this->input->post('razon') != ''){
            $id                 = base64_decode($this->input->post('id'));
            $nombre         = $this->input->post('nombre');
            $razon          = $this->input->post('razon');
            $email          = $this->input->post('email');
            $ruc            = $this->input->post('ruc');
            $direccion      = $this->input->post('direccion');
            $fijo           = $this->input->post('fijo');
            $descripcion    = $this->input->post('descripcion');
            
            $arrDatos = array(
                'emp_nombre'            => $nombre,
                'emp_razon_social'      => $razon,
                'emp_email'             => $email,
                'emp_ruc'               => $ruc,
                'emp_direccion'         => $direccion,
                'emp_telefono'          => $fijo,
                'emp_descripcion'       => $descripcion,
                'emp_estado'            => 1,
                'emp_fecha_modificacion'=> date('Y-m-d H:m:s'),
                'id_rol'                => 0,
                'emp_seo'               => slugify($razon)
            );
            
            $id = $this->empresa->_update('tbl_empresa',$arrDatos,$id);
            redirect('empresa/mi-empresa','refresh');
        }
        
        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'module'     => $module,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'arrEmail'   => $tEmail,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function upload_imagen(){
        $id_usuario = $this->session->userdata('id_usuarioemp');
        if($id_usuario == null or empty($id_usuario)){
            redirect('','refresh');
        }else{
            $imagen = $this->recursos->upload_img_products('photoimg','uploads/empresa/',true);
            if(!is_array($imagen)){
                $arrDatos = array(
                    'emp_logo' => $imagen
                );
                $id = $this->empresa->_update('tbl_empresa',$arrDatos,$id_usuario);
                echo "<img src='".base_url()."uploads/empresa/".$imagen."'  class='img-responsive img-center'>";
            }
        }
    }

    public function vacantes(){
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'assets/materialize/css/materialize.css'),
            array('href'=>'https://fonts.googleapis.com/icon?family=Material+Icons'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );    
        ## Inicio de Sesión
        $page_title = 'Tallentus - Vacantes';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'empresa/vacantes';


        #Logica
        $vEmail = $this->session->userdata('email_emp');
        $vId = $this->session->userdata('id_usuarioemp');
        if($vEmail == null or empty($vEmail)){
            redirect('','refresh');
        }else{
            $postulaciones = $this->empresa->_get_postulaciones('result',null,$vId);
            // $postulaciones = $this->empresa->_get_(null,2);
            $arr = array();
            foreach ($postulaciones as $postula) {
                $arr[] = array(
                    'idpostu'   => $postula->postu_id,
                    'titulo'    => $postula->postu_titulo,
                    'caduca'    => $postula->postu_caduca,
                    'total'     => count($this->empresa->_get_(null,$postula->postu_id))
                    );
            }
            // echo '<pre>';print_r($arr);echo '</pre>';
            // die();
            $arrEmail = $this->empresa->_obtener_email($vEmail);
            if(count($arrEmail)>0){
                $tEmail = $arrEmail;
            }else{
                redirect('','refresh');
            }
        }

        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'datos'      => $tEmail,
            'postu'      => $arr,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

}

/*
*end modules/login/controllers/dashboard.php
*/