<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Usuario/Controller/Dashboard.php
Propósito       : Página de Administrador Usuario
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 23/10/2015 - 15:12 hrs.
*************************************************************
*/
class Empleados extends MX_Controller
{
    
    var $id_usuario = "";
    var $pagina = "";
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario/usuario_model','user');
        $this->load->model('personal_model','persona');
        $this->load->model('usuario/permiso_model','permiso');
        $this->id_usuario = $this->session->userdata('id_usuario');
        $this->pagina = 5;
    }
    
    public function index()
    {   
        if($this->id_usuario == ''){
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }else{
            $arrRes = $this->permiso->permiso_por_pagina($this->id_usuario,$this->pagina);
            if(count($arrRes) != 0){
                switch ($arrRes['per_ver']) {
                    case '0':
                        redirect(base_url().'usuario/permisos/acceso','refresh');
                    break;
                    case '1':
                        #######################################
                        $empleado = $this->persona->lst_empleado();

                        $data = array(
                            'empleado'    => $empleado,
                            'page_title' => 'Empleados',
                            'module'     => 'personal',
                            'view_file'  => 'empleados/index_view'
                            );

                        echo Modules::run('template/header_admin',$data);
                        echo Modules::run('template/admin',$data);
                        echo Modules::run('template/footer_admin',$data);   
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }
    }

    public function add()
    {
        if($this->id_usuario == ''){
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }else{
            $arrRes = $this->permiso->permiso_por_pagina($this->id_usuario,$this->pagina);
            if(count($arrRes) != 0){
                switch ($arrRes['per_insert']) {
                    case '0':
                        redirect(base_url().'usuario/permisos/acceso','refresh');
                    break;
                    case '1':
                        #######################################
                        //CBO Cargando Combos
                        $cbo_tipo_documento = $this->user->_lst_cbo_tipo_documento();
                        $cbo_cargo = $this->persona->_lst_cbo_cargo();

                        $form = $this->_formularios();

                        $data = array(
                            'tipodoc'    => $cbo_tipo_documento,
                            'cargo'      => $cbo_cargo,
                            'form'       => $form,
                            'page_title' => 'Empleados',
                            'module'     => 'personal',
                            'view_file'  => 'empleados/contenido_form_view'
                            );

                        echo Modules::run('template/header_admin',$data);
                        echo Modules::run('template/admin',$data);
                        echo Modules::run('template/footer_admin',$data);   
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }
    }

    public function edit($id)
    {
        if($this->id_usuario == ''){
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }else{
            $arrRes = $this->permiso->permiso_por_pagina($this->id_usuario,$this->pagina);
            if(count($arrRes) != 0){
                switch ($arrRes['per_update']) {
                    case '0':
                        redirect(base_url().'usuario/permisos/acceso','refresh');
                    break;
                    case '1':
                        #######################################
                        $cliente = $this->persona->_obtener_datos_empleado((int)$id);

                        if(count($cliente) != 0){
                            //CBO Cargando Combos
                            $cbo_tipo_documento = $this->user->_lst_cbo_tipo_documento();
                            $cbo_cargo = $this->persona->_lst_cbo_cargo();

                            //Obtener por id
                            $form = $this->_formularios($cliente);

                            $data = array(
                                'tipodoc'    => $cbo_tipo_documento,
                                'cargo'      => $cbo_cargo,
                                'form'       => $form,
                                'page_title' => 'Empleados',
                                'module'     => 'personal',
                                'view_file'  => 'empleados/contenido_form_view'
                                );

                            echo Modules::run('template/header_admin',$data);
                            echo Modules::run('template/admin',$data);
                            echo Modules::run('template/footer_admin',$data);   
                            
                        }else{
                            redirect('persona/empleados','refresh');
                        }
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }
    }

    public function cu_create_empleados(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
        $this->form_validation->set_rules('appaterno', 'appaterno', 'required|xss_clean');
        $this->form_validation->set_rules('apmaterno', 'apmaterno', 'required|xss_clean');
        $this->form_validation->set_rules('ndoc', 'ndoc', 'xss_clean');
        // $this->form_validation->set_rules('user', 'user', 'xss_clean');
        // $this->form_validation->set_rules('pass', 'pass', 'required|xss_clean');
        $this->form_validation->set_rules('id', 'Código', 'xss_clean');
        if ($this->form_validation->run() == true)
        {
            $id_cliente = $this->input->post('idu');
            //tbl persona
            $nombre       = htmlspecialchars($this->input->post('nombre'),ENT_QUOTES);
            $appaterno    = htmlspecialchars($this->input->post('appaterno'),ENT_QUOTES);
            $apmaterno    = htmlspecialchars($this->input->post('apmaterno'),ENT_QUOTES);
            $tipodoc      = $this->input->post('tipodoc');
            $ndoc         = htmlspecialchars($this->input->post('ndoc'),ENT_QUOTES);

            $mailPerso    = htmlspecialchars($this->input->post('mailPerso'),ENT_QUOTES);
            $mailJobs     = htmlspecialchars($this->input->post('mailJobs'),ENT_QUOTES);
            $telFijo      = htmlspecialchars($this->input->post('telFijo'),ENT_QUOTES);
            $celular      = htmlspecialchars($this->input->post('celular'),ENT_QUOTES);
            
            $cargo        = htmlspecialchars($this->input->post('cargo'),ENT_QUOTES);
            $anexo        = htmlspecialchars($this->input->post('anexo'),ENT_QUOTES);
            $emp_telefono = htmlspecialchars($this->input->post('emp_telefono'),ENT_QUOTES);

            //tbl usuario
            
            $arr_persona = array(
                'per_nombre'                => $nombre,
                'per_appaterno'             => $appaterno,
                'per_apmaterno'             => $apmaterno,
                'per_documento'             => $tipodoc,
                'per_nrodoc'                => $ndoc,
                'per_correoPersonal'        => $mailPerso,
                'per_correoTrabajo'         => $mailJobs,
                'per_telefojoFijo'          => $telFijo,
                'per_telefonoMovil'         => $celular,

                'id_usuarioCreacion'        => $this->id_usuario,
                'per_fechaCreacion'         => date('Y-m-d H:m:s'),
                'id_usuarioModificacion'    => $this->id_usuario,
                'per_fechaModificacion'     => date('Y-m-d H:m:s'),

                'per_estado'                => 1,
                'per_fecha'                 => date('Y-m-d H:m:s')
            );
            
            $numeroDocumento = $this->validateDni($ndoc);

            if(!empty($id_cliente)){
                
                $usuario = $this->persona->_obtener_datos_empleado((int)$id_cliente);
                $id_persona = $usuario['id_persona'];
                
                $arr_empleado = array(
                    'id_persona'               =>  $id_persona,
                    'id_empresa'               =>  1,
                    'id_cargo'                    =>  $cargo,
                    'emp_anexo'                    =>  $anexo,
                    'emp_telefono'             =>  $emp_telefono,
                    'id_usuarioModificacion'   =>  $this->id_usuario,
                    'emp_fechaModificacion'    =>  date('Y-m-d H:m:s'),
                );

                if( $numeroDocumento == false){
                    $this->session->set_flashdata('documento', 'error_nro');
                }
                // print_r($convina);
                // die();
                $this->persona->_update_empleado($arr_empleado,(int)$id_cliente);
                $this->user->_update_persona($arr_persona,(int)$id_persona);
                
                $this->session->set_flashdata('message', 'update');
                redirect('personal/empleados','refresh');
                
            }else{

                if( $numeroDocumento == false){
                    $this->session->set_flashdata('message', 'error_nro_');
                    redirect('personal/empleados','refresh');
                }

                $id_persona = $this->user->_insert_persona($arr_persona);
                $arr_empleado = array(
                    'id_persona'              =>  $id_persona,
                    'id_empresa'              =>  1,
                    'emp_estado'              =>  1,
                    'id_cargo'                =>  $cargo,
                    'emp_anexo'                   =>  $anexo,
                    'emp_telefono'            =>  $emp_telefono,
                    'id_usuarioCreacion'      =>  $this->id_usuario,
                    'emp_fechaCreacion'       =>  date('Y-m-d H:m:s'),
                    'id_usuarioModificacion'  =>  $this->id_usuario,
                    'emp_fechaModificacion'   =>  date('Y-m-d H:m:s'),
                );

                $this->persona->_insert_empleado($arr_empleado);
                redirect('personal/empleados','refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors());
            die();
            redirect('personal/empleados','refresh');
        }
    }


    public function delete($id){
        if($this->id_usuario == ''){
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }else{
            $arrRes = $this->permiso->permiso_por_pagina($this->id_usuario,$this->pagina);
            if(count($arrRes) != 0){
                switch ($arrRes['per_delete']) {
                    case '0':
                        redirect(base_url().'usuario/permisos/acceso','refresh');
                    break;
                    case '1':
                        #######################################
                        $usuario = $this->persona->_obtener_datos_empleado((int)$id);
                        if(count($usuario) != 0){
                            $arr_empleado = array(
                                'emp_estado' => 0
                                );
                            $this->persona->_update_empleado($arr_empleado,(int)$id);
                        }
                        redirect('personal/empleados','refresh');
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }

    }

    private function _formularios($id = null){
        $data['id_empleado'] = $id_empleado = (!empty($id)) ? $id['id_empleado'] : $this->form_validation->set_value('id_empleado');
        $data['tipodoc'] = $tipodoc = (!empty($id)) ? $id['per_documento'] : '';
        $data['cargo'] = $cargo = (!empty($id)) ? $id['id_cargo'] : '';
        
        $data['nombre'] = array(
            'name'  => 'nombre',
            'id'    => 'nombre',
            'class' => 'gui-input texto',
            'type'  => 'text',
            'required' => 'required',
            'value' => $nombre = (!empty($id)) ? $id['per_nombre'] : $this->form_validation->set_value('nombre') 
        );

        $data['appaterno'] = array(
            'name'  => 'appaterno',
            'id'    => 'appaterno',
            'class' => 'gui-input texto',
            'type'  => 'text',
            'required' => 'required',
            'value' => $appaterno = (!empty($id)) ? $id['per_appaterno'] : $this->form_validation->set_value('appaterno')
        );

        $data['apmaterno'] = array(
            'name'  => 'apmaterno',
            'id'    => 'apmaterno',
            'class' => 'gui-input texto',
            'type'  => 'text',
            'required' => 'required',
            'value' => $apmaterno = (!empty($id)) ? $id['per_apmaterno'] : $this->form_validation->set_value('apmaterno')
        );

        $data['ndoc'] = array(
            'name'  => 'ndoc',
            'id'    => 'ndoc',
            'class' => 'gui-input numero',
            'type'  => 'number',
            'required' => 'required',
            'value' => $ndoc = (!empty($id)) ? $id['per_nrodoc'] : $this->form_validation->set_value('ndoc')
        );


        $data['mailPerso'] = array(
            'name'  => 'mailPerso',
            'id'    => 'mailPerso',
            'class' => 'gui-input',
            'type'  => 'email',
            'required' => 'required',
            'value' => $mailPerso = (!empty($id)) ? $id['per_correoPersonal'] : $this->form_validation->set_value('mailPerso')
        );

        $data['mailJobs'] = array(
            'name'  => 'mailJobs',
            'id'    => 'mailJobs',
            'class' => 'gui-input',
            'type'  => 'email',
            'required' => 'required',
            'value' => $mailJobs = (!empty($id)) ? $id['per_correoTrabajo'] : $this->form_validation->set_value('mailJobs')
        );


        $data['telFijo'] = array(
            'name'  => 'telFijo',
            'id'    => 'telFijo',
            'class' => 'gui-input',
            'type'  => 'number',
            'required' => 'required',
            'value' => $telFijo = (!empty($id)) ? $id['per_telefojoFijo'] : $this->form_validation->set_value('telFijo')
        );

        $data['celular'] = array(
            'name'  => 'celular',
            'id'    => 'celular',
            'class' => 'gui-input numero',
            'type'  => 'number',
            'required' => 'required',
            'value' => $celular = (!empty($id)) ? $id['per_telefonoMovil'] : $this->form_validation->set_value('celular')
        );

        $data['per_razonSocial'] = array(
            'name'  => 'per_razonSocial',
            'id'    => 'per_razonSocial',
            'class' => 'gui-input',
            'type'  => 'text',
            'required' => 'required',
            'value' => $per_razonSocial = (!empty($id)) ? $id['per_razonSocial'] : $this->form_validation->set_value('per_razonSocial')
        );


        $data['emp_telefono'] = array(
            'name'  => 'emp_telefono',
            'id'    => 'emp_telefono',
            'class' => 'gui-input numero',
            'type'  => 'number',
            'required' => 'required',
            'value' => $emp_telefono = (!empty($id)) ? $id['emp_telefono'] : $this->form_validation->set_value('emp_telefono')
        );

        $data['anexo'] = array(
            'name'  => 'anexo',
            'id'    => 'anexo',
            'class' => 'gui-input',
            'type'  => 'number',
            'required' => 'required',
            'value' => $anexo = (!empty($id)) ? $id['emp_anexo'] : $this->form_validation->set_value('anexo')
        );

        return $data;
    }

    public function validateDni(){
        $ndoc = $this->input->post('ndoc');
        // echo $ndoc;
        if ($this->user->isDniAvailable($ndoc))
        {
            return TRUE;
            // echo(json_encode(true));
        }
        else
        {
            return FALSE;
            // echo(json_encode(false));
        }
    }

    
}

/*
*end modules/login/controllers/dashboard.php
*/