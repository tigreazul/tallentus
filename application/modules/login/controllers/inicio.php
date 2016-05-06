<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Controller/Login/inicio.php
Propósito       : Página de Login
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 04/04/2015 - 15:12 hrs.
*************************************************************
*/
class Inicio extends MX_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model','login');
        $this->load->model('usuario/permiso_model','permiso');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }
    
    public function index()
    {   
        $id_usuario = $this->session->userdata('id_usuario');
        if($id_usuario == ''){
            $data['token'] = $this->token();
            ## Inicio de Sesión
            $data['page_title'] = 'Login';
            ## Template Login
            echo Modules::run('template/header_login',$data);
            echo Modules::run('template/login',$data);
            echo Modules::run('template/footer_login',$data);
        }else{
            $logUsuario = $this->login->_getUsuario($id_usuario);
            if($logUsuario['id_rol'] != 0){
                $arrRes = $this->permiso->permiso_por_pagina($id_usuario,1);
                if(count($arrRes) != 0){
                    switch ($arrRes['per_ver']) {
                        case '0':
                            redirect(base_url().'usuario/permisos/acceso','refresh');
                            break;
                        case '1':
                            redirect(base_url().'usuario/dashboard','refresh');
                            break;
                    }
                }else{
                    $data['token'] = $this->token();
                    ## Inicio de Sesión
                    $data['page_title'] = 'Login';
                    ## Template Login
                    echo Modules::run('template/header_login',$data);
                    echo Modules::run('template/login',$data);
                    echo Modules::run('template/footer_login',$data);
                }
            }else{
                $data['token'] = $this->token();
                ## Inicio de Sesión
                $data['page_title'] = 'Login';
                ## Template Login
                echo Modules::run('template/header_login',$data);
                echo Modules::run('template/login',$data);
                echo Modules::run('template/footer_login',$data);
            }
            
        }
    }

    public function token()
    {
        $token = md5(uniqid(rand(),true));
        $this->session->set_userdata('token',$token);
        return $token;
    }
    
    public function valid()
    {
        if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
        {
            // print_r($this->input->post());

            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|max_length[150]|xss_clean');
            //lanzamos mensajes de error si es que los hay
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('usuario_incorrecto', 'error_login');
                // print_r($this->input->post());
                print_r(validation_errors());
                // die();
                $this->index();
            }else{
                $username   = $this->input->post('username');
                $password   = sha1($this->input->post('password'));
                $check_user = $this->login->login_user($username,$password);
                // print_r($check_user); die();
                if(count($check_user) >= 1)
                {
                    $data = array(
                        'is_logued_admin'   =>  TRUE,
                        'id_usuario'        =>  $check_user->usu_id,
                        'perfil'            =>  $check_user->id_rol,
                        'username'          =>  $check_user->usu_nombre,
                        // 'email'         =>  $check_user->user_email,
                        // 'nombre'        =>  $check_user->user_nombre
                    );
                    $this->session->set_userdata($data);
                    redirect(base_url().'login/inicio','refresh');
                }else{
                    $this->session->set_flashdata('usuario_incorrecto', 'error_login');
                    redirect(base_url().'login/inicio','refresh');
                }
            }
        }else{
            $this->session->set_flashdata('usuario_incorrecto', 'error_login');
            print_r(validation_errors());
            redirect(base_url().'login/inicio','refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'login/inicio','refresh');
    }
    
}

/*
*end modules/login/controllers/index.php
*/