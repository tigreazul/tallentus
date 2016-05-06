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
class Postulante extends MX_Controller
{
    
    var $id_usuario = "";
    var $pagina = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model','user');
        $this->load->model('permiso_model','permiso');
        $this->id_usuario = $this->session->userdata('id_usuario');
        $this->pagina = 1;
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
                        $usuario = $this->user->lst_users_postulante();

                        $data = array(
                            'usuario'    => $usuario,
                            'page_title' => 'Usuario',
                            'module'     => 'usuario',
                            'view_file'  => 'postulante/index_view'
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
                        $cbo_rol = $this->user->_lst_cbo_rol();

                        $form = $this->_formularios();

                        $data = array(
                            'tipodoc'    => $cbo_tipo_documento,
                            'roles'      => $cbo_rol,
                            'form'       => $form,
                            'page_title' => 'Usuario',
                            'module'     => 'usuario',
                            'view_file'  => 'postulante/contenido_form_view'
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
                        $usuario = $this->user->_obtener_datos_usuario((int)$id);

                        if(count($usuario) != 0){
                            //CBO Cargando Combos
                            $cbo_tipo_documento = $this->user->_lst_cbo_tipo_documento();
                            $cbo_rol = $this->user->_lst_cbo_rol();

                            //Obtener por id
                            $id_resul = $this->user->_obtener_datos_usuario($id);
                            $form = $this->_formularios($id_resul);

                            $data = array(
                                'tipodoc'    => $cbo_tipo_documento,
                                'roles'      => $cbo_rol,
                                'form'       => $form,
                                'page_title' => 'Usuario',
                                'module'     => 'usuario',
                                'view_file'  => 'postulante/contenido_form_view'
                                );

                            echo Modules::run('template/header_admin',$data);
                            echo Modules::run('template/admin',$data);
                            echo Modules::run('template/footer_admin',$data);   
                            
                        }else{
                            redirect('usuario/dashboard','refresh');
                        }
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }
    }

    public function cu_create_usuario(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
        $this->form_validation->set_rules('appaterno', 'appaterno', 'required|xss_clean');
        $this->form_validation->set_rules('ndoc', 'ndoc', 'xss_clean');
        $this->form_validation->set_rules('user', 'user', 'xss_clean');
        $this->form_validation->set_rules('id', 'Código', 'xss_clean');
        if ($this->form_validation->run() == true)
        {
            $id_usuario = $this->input->post('idu');
            //tbl persona
            $nombre       = htmlspecialchars($this->input->post('nombre'),ENT_QUOTES);
            $appaterno    = htmlspecialchars($this->input->post('appaterno'),ENT_QUOTES);
            $apmaterno    = htmlspecialchars($this->input->post('apmaterno'),ENT_QUOTES);
            $tipodoc      = $this->input->post('tipodoc');
            $ndoc         = htmlspecialchars($this->input->post('ndoc'),ENT_QUOTES);
            $perfil       = $this->input->post('perfil');
            $user         = $this->input->post('user');
            $pass         = $this->input->post('pass');

                
            $arr_persona = array(
                'usu_nombre'        => $nombre,
                'usu_apellidos'     => $appaterno,
                'usu_tipo_doc'      => $tipodoc,
                'usu_nro_documento' => $ndoc,
                'usu_estado'        => 1,
                'usu_correo'        => $user,
                'id_rol'            => $perfil,
                'usu_fecha_creacion'=> date('Y-m-d H:m:s')
            );

            $numeroDocumento = $this->validateDni($ndoc);

            if(!empty($id_usuario)){
                
                $usuario = $this->user->_obtener_datos_usuario((int)$id_usuario);
                if($pass != ""){
                    $arr_new = array(
                        'usu_clave' =>  sha1($pass)
                    );
                    $convina = array_merge($arr_persona, $arr_new);
                }else{
                    $convina = $arr_persona;
                }

                $arr_new_e = array();
                if( $numeroDocumento == false){
                    $this->session->set_flashdata('documento', 'error_nro');
                }
                $this->user->_update_usuario($arr_persona,(int)$id_usuario);
                $this->session->set_flashdata('message', 'update');
                redirect('usuario/dashboard','refresh');
                
            }else{

                if( $numeroDocumento == false){
                    $this->session->set_flashdata('message', 'error_nro_');
                    redirect('usuario/dashboard','refresh');
                }


                if($pass != ""){
                    $arr_new = array(
                        'usu_clave' =>  sha1($pass)
                    );
                    $convina = array_merge($arr_persona, $arr_new);
                }else{
                    $convina = $arr_persona;
                }
                $id_persona = $this->user->_insert_usuario($convina);
                redirect('usuario/dashboard','refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors());
            die();
            redirect('usuario/dashboard','refresh');
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
                        $usuario = $this->user->_obtener_datos_usuario((int)$id);
                        if(count($usuario) != 0){
                            $arr_usuario = array(
                                'user_estado' => 0
                                );
                            $this->user->_update_usuario($arr_usuario,(int)$id);
                        }
                        redirect('usuario/dashboard','refresh');
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }

    }

    private function _formularios($id = null){
        $data['usu_id'] = $usu_id = (!empty($id)) ? $id['usu_id'] : $this->form_validation->set_value('usu_id');

        $data['tipodoc'] = $tipodoc = (!empty($id)) ? $id['doc_id'] : '';
        
        $data['roles'] = $roles = (!empty($id)) ? $id['id_rol'] : '';

        $data['nombre'] = array(
            'name'  => 'nombre',
            'id'    => 'nombre',
            'class' => 'gui-input',
            'type'  => 'text',
            'required' => 'required',
            // 'value' => $this->form_validation->set_value('appaterno')
            'value' => $nombre = (!empty($id)) ? $id['usu_nombre'] : $this->form_validation->set_value('nombre') 
        );

        $data['appaterno'] = array(
            'name'  => 'appaterno',
            'id'    => 'appaterno',
            'class' => 'gui-input',
            'type'  => 'text',
            'required' => 'required',
            'value' => $appaterno = (!empty($id)) ? $id['usu_apellidos'] : $this->form_validation->set_value('appaterno')
        );

        $data['ndoc'] = array(
            'name'  => 'ndoc',
            'id'    => 'ndoc',
            'class' => 'gui-input',
            'type'  => 'number',
            'required' => 'required',
            'value' => $ndoc = (!empty($id)) ? $id['usu_nro_documento'] : $this->form_validation->set_value('ndoc')
        );

        $data['user'] = array(
            'name'  => 'user',
            'id'    => 'user',
            'class' => 'gui-input',
            'type'  => 'text',
            'required' => 'required',
            'value' => $user = (!empty($id)) ? $id['usu_correo'] : $this->form_validation->set_value('user')
        );

        $data['pass'] = array(
            'name'  => 'pass',
            'id'    => 'pass',
            'class' => 'gui-input',
            'type'  => 'text',
            'value' => $nombre = (!empty($id)) ? '' : $this->form_validation->set_value('pass')
        );

        return $data;
    }

    
    public function validateUser(){
        $usuario = $this->input->post('user');
        // echo $usuario;
        if ($this->user->isUsernameAvailable($usuario))
        {
            // return 'found';
            echo(json_encode(true));
        }
        else
        {
            // return 'found1';
            echo(json_encode(false));
        }
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