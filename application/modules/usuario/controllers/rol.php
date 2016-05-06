<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Usuario/Controller/Rol.php
Propósito       : Página de Administrador Rol
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 23/10/2015 - 15:12 hrs.
*************************************************************
*/
class Rol extends MX_Controller
{
    var $id_usuario = "";
    var $pagina = "";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rol_model','rol');
        $this->load->model('permiso_model','permiso');
        $this->id_usuario = $this->session->userdata('id_usuario');
        $this->pagina = 2;
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
                        $rol = $this->rol->lst_rol();
                        $data = array(
                            'rol'        => $rol,
                            'page_title' => 'Roles',
                            'module'     => 'usuario',
                            'view_file'  => 'roles/index_view'
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
                        $form = $this->_formularios();
                        $data = array(
                            'form'       => $form,
                            'page_title' => 'Roles',
                            'module'     => 'usuario',
                            'view_file'  => 'roles/contenido_form_view'
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
                        $rol = $this->rol->_obtener_datos_rol((int)$id);
                        if(count($rol) != 0){
                            $form = $this->_formularios($rol);

                            $data = array(
                                'form'       => $form,
                                'page_title' => 'Roles',
                                'module'     => 'usuario',
                                'view_file'  => 'roles/contenido_form_view'
                                );

                            echo Modules::run('template/header_admin',$data);
                            echo Modules::run('template/admin',$data);
                            echo Modules::run('template/footer_admin',$data);   
                            
                        }else{
                            redirect('usuario/rol','refresh');
                        }
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }

    }

    public function cu_create_rol(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
        $this->form_validation->set_rules('id', 'Código', 'xss_clean');
        if ($this->form_validation->run() == true)
        {
            $id_rol = $this->input->post('idu');
            //tbl persona
            $nombre       = htmlspecialchars($this->input->post('nombre'),ENT_QUOTES);

                $arr_rol = array(
                    'rol_descripcion'    => $nombre
                );

            if(!empty($id_rol)){
                $usuario = $this->rol->_update_rol($arr_rol,(int)$id_rol);                
                $this->session->set_flashdata('message', 'update');
                // redirect('usuario/rol/edit/'.$id_rol,'refresh');
                redirect('usuario/rol','refresh');
                
            }else{

                $id_persona = $this->rol->_insert_rol($arr_rol);
                redirect('usuario/rol','refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors());
            redirect('usuario/rol','refresh');
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
                        $usuario = $this->rol->_obtener_datos_rol((int)$id);
                        if(count($usuario) != 0){
                            $this->rol->_delete_usuario((int)$id);
                        }
                        redirect('usuario/rol','refresh');
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }

    }

    private function _formularios($id = null){
        $data['id_rol'] = $id_usuario = (!empty($id)) ? $id['id_rol'] : $this->form_validation->set_value('id_rol');

        $data['nombre'] = array(
            'name'  => 'nombre',
            'id'    => 'nombre',
            'class' => 'gui-input',
            'type'  => 'text',
            'required' => 'required',
            'value' => $nombre = (!empty($id)) ? $id['rol_descripcion'] : $this->form_validation->set_value('nombre') 
        );

        return $data;
    }

    
}

/*
*end modules/login/controllers/dashboard.php
*/