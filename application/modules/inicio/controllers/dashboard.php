<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Admin/Controller/login.php
Propósito       : Página de Dashboard
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 06/05/2016 - 15:12 hrs.
*************************************************************
*/
class Dashboard extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('inicio_model', 'inicio', TRUE);
        $this->load->model('empresa_model', 'empresa', TRUE);
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


        # Logica
        // Areas
        $arr = $this->_get_areas();
        // Distrito
        $dst = $this->_get_distrito();

        $postula = $this->empresa->_get_postulaciones('result');
        $empresa = $this->empresa->_get_lista('tbl_empresa');

        ## Inicio de Sesión
        $page_title = 'Tallentus - Inicio';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'index/index';

        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'module'     => $module,
            'areas'      => $arr,
            'distrito'   => $dst,
            'trabajo'    => $postula,
            'empresa'    => $empresa,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function paso2($email = null)
    {
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );    
        ## Inicio de Sesión
        $page_title = 'Tallentus - Paso 2';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'index/paso_2';


        #Logica
        $vEmail = base64_decode($email);
        if(($vEmail == null or empty($vEmail)) and $this->session->userdata('email') == '' ){
            redirect('','refresh');
        }else{
            $arrEmail = $this->inicio->_obtener_email($vEmail);
            if(count($arrEmail)>0){
                $tEmail = $this->session->userdata('email');
            }else{
                $tEmail = '';
            }
        }

        $arrAreas = $this->inicio->_get_areas();

        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'email'      => $tEmail,
            'arrEmail'   => $arrEmail,
            'areas'      => $arrAreas,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function paso3()
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
        $page_title = 'Tallentus - Paso 3';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'index/paso_3';

        #Logica
        
        #### Obteniendo datos para mostrar
        $vEmail = $this->session->userdata('email');
        if($vEmail == null or empty($vEmail)){
            redirect('','refresh');
        }else{
            $arrEmail = $this->inicio->_obtener_email($vEmail);
            if(count($arrEmail)>0){
                $tEmail = $arrEmail;
            }else{
                redirect('','refresh');
            }
        }


        #### Metodos Post
            $areas = $this->input->post('areas'); 
            if(!empty($areas)){
                $ids = base64_decode($this->input->post('id'));
                foreach ($areas as $value) {
                    $ins_data = array(
                        'area_id' => $value,
                        'area_usu'  => $ids,
                        'area_estado'  => 1
                    );
                    $this->inicio->_insertar('tbl_areasxusuario',$ins_data);
                }
            }

        if($this->input->post('nombre') != ''){
            $id                 = base64_decode($this->input->post('id'));
            $nombre             = $this->input->post('nombre');
            $apellido           = $this->input->post('apellido');
            $sobremi            = $this->input->post('sobremi');
            $email              = $this->input->post('email');
            $dia                = $this->input->post('dia');
            $mes                = $this->input->post('mes');
            $anio               = $this->input->post('anio');
            $nrodocumento       = $this->input->post('nrodocumento');
            $sexo               = $this->input->post('sexo');
            $fijo               = $this->input->post('fijo');
            $celular            = $this->input->post('celular');
            $discapacidad       = $this->input->post('discapacidad');
            $texotdiscapacidad  = $this->input->post('texotdiscapacidad');
            
            $arrDatos = array(
                'usu_nombre'            => $nombre,
                'usu_apellidos'         => $apellido,
                'usu_descripcion'       => $sobremi,
                'usu_fecha_nacimiento'  => $anio.'-'.$mes.'-'.$dia,
                'usu_nro_documento'     => $nrodocumento,
                'usu_sexo'              => $sexo,
                'usu_telefono'          => $fijo,
                'usu_celular'           => $celular,
                'usu_discapacidad'      => $discapacidad,
                'usu_texodiscapacidad'  => $texotdiscapacidad,
                'usu_fecha_modificacion'=> date('Y-m-d H:m:s')
            );
            
            $id = $this->inicio->_update('tbl_usuario',$arrDatos,$id);
            redirect('mi-cuenta','refresh');
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

    public function registrar()
    {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|xss_clean');
        $this->form_validation->set_rules('id', 'Código', 'xss_clean');
        if ($this->form_validation->run() == true)
        {
            $nombre     = $this->input->post('nombre');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');
            $tUsuario = $this->recursos->generateToken($email);

            $arr_persona = array(
                'usu_nombre'        => $nombre,
                'usu_correo'        => $email,
                'usu_clave'         => sha1($password),
                'usu_estado'        => 1,
                'usu_tipo_doc'      => 1,
                'id_rol'            => 0,
                'usu_descripcion'   => '',
                'token_register'    => $tUsuario,
                'usu_imagen_perfil' => 'user_new.svg',
                'usu_fecha_creacion'=> date('Y-m-d H:m:s')
            );
            
            
            ## Mensaje de activacion para email
            $dMsg = array(
                'nombre' => $nombre,
                'url'    => base_url().'activate/'.base64_encode($email).'/'.$tUsuario.'/'.base64_encode('user'),
                'correo' => $email
            );

            $html_msg = $this->mensaje->html_mensaje_confirmacion($dMsg);

            $subject    = "Bienvenido(a) a Tallentus";
            $correo = new PHPMailer();
            $correo->SetFrom('no-reply@tallentus.com','Tallentus');
            $correo->AddAddress($email, $nombre);
            $correo->Subject = $subject;
            $correo->MsgHTML($html_msg);
            if(!$correo->Send()) {
                redirect('','refresh');
            } else {
                $id = $this->inicio->_insertar('tbl_usuario',$arr_persona);
                $this->session->set_flashdata('flashSuccess', 'Se ha enviado un correo para activar la cuenta');
                redirect('','refresh');

                // $arrUsu = $this->inicio->_obtener_id((int)$id);
                // $data = array(
                //     'is_logued_in'  =>  TRUE,
                //     'id_usuario'    =>  $arrUsu['usu_id'],
                //     'username'      =>  $arrUsu['usu_nombre'],
                //     'email'      =>  $arrUsu['usu_correo']
                // );
                // $this->session->set_userdata($data);
                // $this->session->set_flashdata('message', 'inserto');
                // redirect('registro-paso-2/'.base64_encode($email),'refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors());
            die();
            redirect('','refresh');
        }

        ## Inicio de Sesión
        $data['page_title'] = 'Bolsa Trabajo';
    }

    public function activate($email,$token,$user){
        $vEmail = base64_decode($email);
        $vToken = base64_decode($token);
        $vUser  = base64_decode($user);

        if($vUser == 'user'){
            $vReturnIdUser = $this->inicio->search_user($vEmail);

            if($vReturnIdUser != FALSE){
                $arrWhere = array('usu_id' => $vReturnIdUser['usu_id']);

                $rowRecovery = $this->inicio->valid_token('tbl_usuario',$arrWhere,$token);
                
                if(count($rowRecovery) != 0){
                    $data = array(
                        'token_register'      => ''
                    );
                    $rowRecovery = $this->inicio->_update('tbl_usuario',$data,$vReturnIdUser['usu_id']);
                    $this->session->set_flashdata('flashSuccess', 'Su cuenta ha sido activada con exito!');

                    $arrUsu = $this->inicio->_obtener_email($vEmail);
                    $data = array(
                        'is_logued_in'  =>  TRUE,
                        'id_usuario'    =>  $arrUsu['usu_id'],
                        'username'      =>  $arrUsu['usu_nombre'],
                        'email'      =>  $arrUsu['usu_correo']
                    );
                    $this->session->set_userdata($data);
                    redirect('registro-paso-2/'.base64_encode($vEmail),'refresh');
                }else{
                    $this->session->set_flashdata('flashSuccess', 'Token no existe o ya expiro!');
                    redirect(base_url(),'refresh');
                }
            }
        }elseif($vUser == 'empresa'){
            $vReturnIdUser = $this->empresa->search_empresa($vEmail);

            if($vReturnIdUser != FALSE){
                $arrWhere = array('emp_id' => $vReturnIdUser->id);
                $rowRecovery = $this->inicio->valid_token('tbl_empresa',$arrWhere,$token);
                
                if(count($rowRecovery) != 0){
                    $data = array(
                        'token_register'      => ''
                    );
                    $rowRecoverys = $this->empresa->_update('tbl_empresa',$data,$vReturnIdUser->id);
                    $this->session->set_flashdata('flashSuccess', 'Su cuenta ha sido activada con exito!');
                    redirect(base_url().'empresa','refresh');
                }else{
                    $this->session->set_flashdata('flashSuccess', 'Token no existe o ya expiro!');
                    redirect(base_url(),'refresh');
                }
            }
        }else{
            redirect(base_url(),'refresh');
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
            $this->session->set_flashdata('usuario_incorrecto', 'error_login');
            $arrayResultado = array(
                "resultado"=>0,
                "mensaje"=> validation_errors()
            );
        }else{
            $username   = $this->input->post('email');
            $password   = sha1($this->input->post('password'));
            $check_user = $this->inicio->login_user($username,$password);
            if($check_user == TRUE)
            {
                $data = array(
                    'is_logued_in'  =>  TRUE,
                    'id_usuario'    =>  $check_user->usu_id,
                    'username'      =>  $check_user->usu_nombre,
                    'email'         =>  $check_user->usu_correo,
                    'imagen'        =>  $check_user->usu_imagen_perfil
                );
                
                $this->session->set_userdata($data);
                $arrayResultado = array(
                    "resultado" => 1,
                    "mensaje"   => 'Entraste!!',
                    "envio"     => base_url()
                );
                //redirect('registro-paso-2/'.base64_encode($email),'refresh');
            }else{
                $this->session->set_flashdata('usuario_incorrecto', 'error_login');
                $arrayResultado = array(
                    "resultado"=>0,
                    "mensaje"=>'Usuario y/o Contraseña incorrecta'
                );
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($arrayResultado));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
    }

    public function perfil()
    {
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
        $view       = 'index/perfil';


        #Logica
        $vEmail = $this->session->userdata('email');

        if($vEmail == null or empty($vEmail)){
            redirect('','refresh');
        }else{
            $id_usuario = $this->session->userdata('id_usuario');
            $postulaciones = $this->empresa->_get_($id_usuario);
            $arrEmail = $this->inicio->_obtener_email($vEmail);
            if(count($arrEmail)>0){
                $tEmail = $arrEmail;
            }else{
                redirect('','refresh');
            }
        }

        // Obteniendo areas
        $lsArea  = $this->inicio->_get_areas_usuario($tEmail['usu_id']);
        // $postula = $this->inicio->_get_areas_usuario($tEmail['usu_id']);
        $rnd_prst = $this->empresa->_get_postulaciones('result',null,null,null,6);
        
        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'datos'      => $tEmail,
            'areas'      => $lsArea,
            'web_js'     => $web_js,
            'rand_post'  => $rnd_prst,
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
        $page_title = 'Tallentus - Paso 3';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'index/edit_perfil';

        #Logica
        
        #### Obteniendo datos para mostrar
        $vEmail = $this->session->userdata('email');
        if($vEmail == null or empty($vEmail)){
            redirect('','refresh');
        }else{
            $arrEmail = $this->inicio->_obtener_email($vEmail);
            if(count($arrEmail)>0){
                $tEmail = $arrEmail;
            }else{
                redirect('','refresh');
            }
        }


        #### Metodos Post
        if($this->input->post('nombre') != ''){
            $id                 = base64_decode($this->input->post('id'));
            $nombre             = $this->input->post('nombre');
            $apellido           = $this->input->post('apellido');
            $email              = $this->input->post('email');
            $dia                = $this->input->post('dia');
            $mes                = $this->input->post('mes');
            $anio               = $this->input->post('anio');
            $nrodocumento       = $this->input->post('nrodocumento');
            $sobremi            = $this->input->post('sobremi');
            $sexo               = $this->input->post('sexo');
            $fijo               = $this->input->post('fijo');
            $celular            = $this->input->post('celular');
            $discapacidad       = $this->input->post('discapacidad');
            $texotdiscapacidad  = $this->input->post('texotdiscapacidad');
            
            $arrDatos = array(
                'usu_nombre'            => $nombre,
                'usu_descripcion'       => $sobremi,
                'usu_apellidos'         => $apellido,
                'usu_fecha_nacimiento'  => $anio.'-'.$mes.'-'.$dia,
                'usu_nro_documento'     => $nrodocumento,
                'usu_sexo'              => $sexo,
                'usu_telefono'          => $fijo,
                'usu_celular'           => $celular,
                'usu_discapacidad'      => $discapacidad,
                'usu_texodiscapacidad'  => $texotdiscapacidad,
                'usu_fecha_modificacion'=> date('Y-m-d H:m:s')
            );
            
            // print_r($arrDatos);
            // print_r($id);
            $id = $this->inicio->_update('tbl_usuario',$arrDatos,$id);
            redirect('mi-cuenta','refresh');
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
        $id_usuario = $this->session->userdata('id_usuario');
        if($id_usuario == null or empty($id_usuario)){
            redirect('','refresh');
        }else{
            $imagen = $this->recursos->upload_img_products('photoimg','uploads/usuario/',true);
            if(!is_array($imagen)){
                $arrDatos = array(
                    'usu_imagen_perfil' => $imagen
                );
                $id = $this->inicio->_update('tbl_usuario',$arrDatos,$id_usuario);
                echo "<img src='".base_url()."uploads/usuario/".$imagen."'  class='img-responsive img-center'>";
            }
        }
    }

    public function upload_cv(){
        $id_usuario = $this->session->userdata('id_usuario');
        if($id_usuario == null or empty($id_usuario)){
            redirect('','refresh');
        }else{
            $cv = $this->recursos->upload_img_products('loadCv','uploads/usuario/',false,'pdf|doc|docx');
            if(!is_array($cv)){
                $arrDatos = array(
                    'usu_cv' => $cv
                );
                $id = $this->inicio->_update('tbl_usuario',$arrDatos,$id_usuario);
                echo "<a href='".base_url()."uploads/usuario/".$cv."'  target='_blank'><span class='glyphicon glyphicon-save-file'></span> Descargar CV</a>";
            }
        }
    }

    public function delete_cv(){
        $id_usuario = $this->session->userdata('id_usuario');
        if($id_usuario == null or empty($id_usuario)){
            redirect('','refresh');
        }else{
            $usu = $this->inicio->_obtener_id($id_usuario);
            unlink('uploads/usuario/'.$usu['usu_cv']);
            $arrDatos = array(
                    'usu_cv' => ''
                );
            $id = $this->inicio->_update('tbl_usuario',$arrDatos,$id_usuario);

            redirect('editar-perfil','refresh');
        }
    }

    public function editar_areas(){
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/css/waves.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );    
        ## Inicio de Sesión
        $page_title = 'Tallentus - Editar Areas';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'index/edit_areas';


        #Logica
        $id_usuario = $this->session->userdata('id_usuario');
        if($id_usuario == null or empty($id_usuario)){
            redirect('','refresh');
        }else{
            $arrAreas = $this->inicio->_get_areas();
            $lsArea = $this->inicio->_get_areas_usuario($id_usuario);

            foreach ($arrAreas as $area) {
                $arrArea[] = array(
                    'id'    => $area->area_id,
                    'nombre'=> $area->area_nombre,
                    'activo'=> count($this->inicio->_get_areas_usuario(null,'row',array('au.area_usu'=>$id_usuario,'au.area_id'=>$area->area_id)))
                    );
            }
        }


        #Vistas
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'areas'      => $arrArea,
            'id_user'    => $id_usuario,
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function update_areas(){
        $ids = base64_decode($this->input->post('id'));
        if($ids == null or empty($ids)){
            redirect('','refresh');
        }else{
            $areas = $this->input->post('areas'); 
            if(!empty($areas)){
                $vData = count($this->inicio->_get_areas_usuario(null,'row',array('au.area_usu'=>$ids)));
                if($vData != 0){
                    $dTable = $this->inicio->_delete('tbl_areasxusuario',array('area_usu'=>$ids));
                }
                foreach ($areas as $value) {
                    $ins_data = array(
                        'area_id' => $value,
                        'area_usu'  => $ids,
                        'area_estado'  => 1
                    );
                    $this->inicio->_insertar('tbl_areasxusuario',$ins_data);
                }
                    redirect('mi-cuenta','refresh');
            }else{
                redirect('editar-areas','refresh');
            }
        }
    }

    public function listado_distrito($distrito_seo = null){
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

        $lst_distrito = $this->empresa->_get_postulaciones('result',null,null,array('d.dist_seo' => $distrito_seo));
        ## Inicio de Sesión
        $page_title = 'Tallentus - Distrito';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'index/distrito';

        // var_dump($aEmpresa);
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'distrito'   => $dst,
            // 'empresa'    => $aEmpresa,
            'lDistrito'  => $lst_distrito,
            'titulo_dst' => $distrito_seo,   
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);   
    }

    public function listado_area_servicio($areas_seo = null){
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


        $lst_distrito = $this->empresa->_get_postulaciones('result',null,null,array('a.area_seo' => $areas_seo));
        ## Inicio de Sesión
        $page_title = 'Tallentus - Areas';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'index/lista_areas';

        // var_dump($aEmpresa);
        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'distrito'   => $dst,
            // 'empresa'    => $aEmpresa,
            'lDistrito'  => $lst_distrito,
            'titulo_dst' => $areas_seo,   
            'module'     => $module,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);   
    }




    public function _get_distrito(){
        $distrito = $this->empresa->_get_lista('tbl_distrito');
        foreach ($distrito as $dist) {
            $dst[] = array(
                'id_dist' => $dist->dist_id,
                'describe_dist' => $dist->dist_descripcion,
                'postu_dist' => count($this->empresa->_get_lista_multiple('tbl_postulaciones','result',array('postu_distrito_id' => $dist->dist_id,'postu_estado' => 1)))
            );
        }

        return $dst;
    }


    public function _get_areas(){
        $areas = $this->empresa->_get_lista('tbl_areas');
        foreach ($areas as $ar) {
            $arr[] = array(
                'id' => $ar->area_id,
                'describe' => $ar->area_nombre,
                'seo' => $ar->area_seo,
                'postu' => count($this->empresa->_get_lista_multiple('tbl_postulaciones','result',array('postu_area_id' => $ar->area_id,'postu_estado' => 1)))
                );
        }
        return $arr;
    }

}

/*
*end modules/login/controllers/dashboard.php
*/