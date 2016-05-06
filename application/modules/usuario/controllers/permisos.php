<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Usuario/Controller/Permisos.php
Propósito       : Página de Administrador Permisos
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 23/10/2015 - 15:12 hrs.
*************************************************************
*/
class Permisos extends MX_Controller
{
    var $id_usuario = "";   
    var $pagina = "";   

    public function __construct()
    {
        parent::__construct();
        $this->load->model('permiso_model','permiso');
        $this->load->model('rol_model','rol');
        $this->id_usuario = $this->session->userdata('id_usuario');
        $this->pagina = 3;
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
                            'page_title' => 'Permisos',
                            'module'     => 'usuario',
                            'view_file'  => 'permisos/index_view'
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

    public function mod($id)
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
                        $pagina = $this->permiso->lst_paginas();

                        foreach ($pagina as $pag) {
                            $permi = $this->permiso->_obtener_rol_permisos($pag->id_pagina,$id);
                            
                            $arr_per = array();
                            if(!empty($permi)){
                                $arr_per = array(
                                    'ver' => $permi['per_ver'],
                                    'add' => $permi['per_insert'],
                                    'del' => $permi['per_delete'],
                                    'up'  => $permi['per_update'],
                                );
                            }else{
                                $arr_per = array(
                                    'ver' => 0,
                                    'add' => 0,
                                    'del' => 0,
                                    'up'  => 0,
                                );
                            }

                            $pagi[] = array(
                                'id_pagina'   => $pag->id_pagina,
                                'descripcion' => $pag->pag_describre,
                                'permisos'    => $arr_per
                                );
                        }
                        $data = array(
                            'rol'        => $rol,
                            'active'     => $id,
                            'pagina'     => $pagi,
                            'page_title' => 'Permisos',
                            'module'     => 'usuario',
                            'view_file'  => 'permisos/ck_permisos_view'
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


    public function update(){
        if($this->id_usuario == ''){
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }else{
            $arrRes = $this->permiso->permiso_por_pagina($this->id_usuario,$this->pagina);
            if(count($arrRes) != 0){
                switch ($arrRes['per_update']) {
                    case '0':
                        ## Array Final.
                        $ResultadoArr = array(
                            'resultado' => '3'
                        );
                        ## Enviando toda la informacion a json.
                        $this->output->set_content_type('application/json')->set_output(json_encode($ResultadoArr));
                        // redirect(base_url().'usuario/permisos/acceso','refresh');
                    break;
                    case '1':
                        #######################################
                        $id_pagina  = $this->input->post('id_pagina');
                        $id_rol     = $this->input->post('id_rol');
                        $permiso    = $this->input->post('permiso');
                        $valor      = $this->input->post('valor');

                        $resul = $this->permiso->_obtener_rol_permisos($id_pagina,$id_rol);
                        $arr = array();
                        switch ($permiso) {
                            case 'add':
                                $arr = array(
                                    'per_insert' => $valor
                                );
                            break;
                            case 'ver':
                                $arr = array(
                                    'per_ver' => $valor
                                );
                            break;
                            case 'up':
                                $arr = array(
                                    'per_update' => $valor
                                );
                            break;
                            case 'del':
                                $arr = array(
                                    'per_delete' => $valor
                                );
                            break;
                            default:
                                $arr = array(
                                    'per_delete' => 0
                                );
                            break;
                            }
                            
                        if(count($resul) != 0){
                            //Actualiza
                            $this->permiso->_update_permiso($arr,$id_pagina,$id_rol);
                        }else{
                            // Inserta
                            $usu = array(
                                'id_rol' => $id_rol,
                                'id_pagina' => $id_pagina
                            );
                            $new_arr = array_merge($arr,$usu);
                            $this->permiso->_insert_permiso($new_arr);
                        }

                        ## Array Final.
                        $ResultadoArr = array(
                            'resultado' => '1'
                        );
                        ## Enviando toda la informacion a json.
                        $this->output->set_content_type('application/json')->set_output(json_encode($ResultadoArr));
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }
        
    }
    

    public function acceso(){
        $data = array(
            'page_title' => 'Permisos',
            'module'     => 'usuario',
            'view_file'  => 'permisos/denegado_permiso_view'
            );

        echo Modules::run('template/header_admin',$data);
        echo Modules::run('template/admin',$data);
        echo Modules::run('template/footer_admin',$data);   
    }
}

/*
*end modules/login/controllers/dashboard.php
*/