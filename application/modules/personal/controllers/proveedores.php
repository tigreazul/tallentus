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
class Proveedores extends MX_Controller
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
        $this->pagina = 6;
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
                        $proveedor = $this->persona->lst_proveedores();

                        $data = array(
                            'proveedor'    => $proveedor,
                            'page_title' => 'Proveedor',
                            'module'     => 'personal',
                            'view_file'  => 'proveedores/index_view'
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
                        $cbo_departamento = $this->user->_lst_cbo_departamento();
                        $cbo_vacio = array( '' => 'SELECCIONE');
                        // $cbo_rol = $this->user->_lst_cbo_rol();

                        $form = $this->_formularios();

                        $data = array(
                            'tipodoc'    => $cbo_tipo_documento,
                            // 'roles'      => $cbo_rol,
                            'form'       => $form,
                            'departamento'  => $cbo_departamento,
                            'cbo_vacio'  => $cbo_vacio,
                            'page_title' => 'Proveedor',
                            'module'     => 'personal',
                            'view_file'  => 'proveedores/contenido_form_view'
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
                        $proveedor = $this->persona->_obtener_datos_proveedores((int)$id);

                        if(count($proveedor) != 0){
                            //CBO Cargando Combos
                            $cbo_tipo_documento = $this->user->_lst_cbo_tipo_documento();
                            $cbo_departamento = $this->user->_lst_cbo_departamento();
                            $cbo_vacio = array( '' => 'SELECCIONE');
                            // Formularios
                            $form = $this->_formularios($proveedor);
                            $data = array(
                                'tipodoc'    => $cbo_tipo_documento,
                                'form'       => $form,
                                'departamento'  => $cbo_departamento,
                                'cbo_vacio'  => $cbo_vacio,
                                'page_title' => 'Proveedor',
                                'module'     => 'personal',
                                'view_file'  => 'proveedores/contenido_form_view'
                                );

                            echo Modules::run('template/header_admin',$data);
                            echo Modules::run('template/admin',$data);
                            echo Modules::run('template/footer_admin',$data);   
                            
                        }else{
                            redirect('personal/proveedores','refresh');
                        }
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }
    }

    public function cu_create_proveedores(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'xss_clean');
        $this->form_validation->set_rules('appaterno', 'appaterno', 'xss_clean');
        $this->form_validation->set_rules('apmaterno', 'apmaterno', 'xss_clean');
        $this->form_validation->set_rules('ndoc', 'ndoc', 'xss_clean');
        // $this->form_validation->set_rules('user', 'user', 'xss_clean');
        // $this->form_validation->set_rules('pass', 'pass', 'required|xss_clean');
        $this->form_validation->set_rules('id', 'Código', 'xss_clean');
        if ($this->form_validation->run() == true)
        {
            $id_proveedor = $this->input->post('idu');
            //tbl persona
            $nombre       = htmlspecialchars($this->input->post('nombre'),ENT_QUOTES);
            $appaterno    = htmlspecialchars($this->input->post('appaterno'),ENT_QUOTES);
            $apmaterno    = htmlspecialchars($this->input->post('apmaterno'),ENT_QUOTES);
            $tipodoc      = $this->input->post('tipodoc');
            $provincia      = $this->input->post('provincia');
            $departamento      = $this->input->post('departamento');
            $distrito      = $this->input->post('distrito');

            $ndoc         = htmlspecialchars($this->input->post('ndoc'),ENT_QUOTES);

            $mailPerso    = htmlspecialchars($this->input->post('mailPerso'),ENT_QUOTES);
            $mailJobs     = htmlspecialchars($this->input->post('mailJobs'),ENT_QUOTES);
            $telFijo      = htmlspecialchars($this->input->post('telFijo'),ENT_QUOTES);
            $celular      = htmlspecialchars($this->input->post('celular'),ENT_QUOTES);
            $razon_social = htmlspecialchars($this->input->post('razon_social'),ENT_QUOTES);
            $ruc          = htmlspecialchars($this->input->post('ruc'),ENT_QUOTES);

            $nomContact   = htmlspecialchars($this->input->post('nom_contact'),ENT_QUOTES);
            $direccion    = htmlspecialchars($this->input->post('direccion'),ENT_QUOTES);
            $tipopersona  = $this->input->post('tipopersona');

            //tbl usuario
            if($ndoc == ''){
                $ff = $ruc;
            }else{
                $ff = $ndoc;  
            };
            
            $arr_persona = array(
                'per_nombre'                => $nombre,
                'per_appaterno'             => $appaterno,
                'per_apmaterno'             => $apmaterno,
                'per_documento'             => $tipodoc==''? 1 : $tipodoc,
                'per_nrodoc'                => $ff,
                'per_correoPersonal'        => $mailPerso,
                'per_correoTrabajo'         => $mailJobs,
                'per_telefojoFijo'          => $telFijo,
                'per_telefonoMovil'         => $celular,
                'per_direccion'             => $direccion,
                'tipopersona'               => $tipopersona,
                'per_provincia'             => $provincia,
                'per_departamento'          => $departamento,
                'per_distrito'              => $distrito,
                'per_razonSocial'           => $razon_social,
                'id_usuarioCreacion'        => $this->id_usuario,
                'per_fechaCreacion'         => date('Y-m-d H:m:s'),
                'id_usuarioModificacion'    => $this->id_usuario,
                'per_fechaModificacion'     => date('Y-m-d H:m:s'),
                'per_ruc'                   => $ruc,
                'per_estado'                => 1,
                'per_fecha'                 => date('Y-m-d H:m:s')
            );
            
            $numeroDocumento = $this->validateDni($ff);

            if(!empty($id_proveedor)){
                
                $usuario = $this->persona->_obtener_datos_proveedores((int)$id_proveedor);
                $id_persona = $usuario['id_persona'];
                
                $arr_proveedor = array(
                    'idPersona'               =>  $id_persona,
                    'prov_nombre_contacto'    =>  $nomContact,
                    'idEmpresa'               =>  1,
                    'prov_estado'             =>  1,
                    'id_usuarioCreacion'      =>  $this->id_usuario,
                    'prov_fechaCreacion'      =>  date('Y-m-d H:m:s'),
                    'id_usuarioModificacion'  =>  $this->id_usuario,
                    'prov_fechaModificacion'  =>  date('Y-m-d H:m:s'),
                );

                if( $numeroDocumento == false){
                    unset($arr_persona['per_nrodoc']);
                    $this->session->set_flashdata('documento', 'error_nro');
                }
                // print_r($convina);
                // die();
                $this->persona->_update_proveedores($arr_proveedor,(int)$id_proveedor);
                $this->user->_update_persona($arr_persona,(int)$id_persona);
                
                $this->session->set_flashdata('message', 'update');
                redirect('personal/proveedores','refresh');
                
            }else{

                if( $numeroDocumento == false){
                    $this->session->set_flashdata('message', 'error_nro_');
                    redirect('personal/proveedores','refresh');
                }

                $id_persona = $this->user->_insert_persona($arr_persona);
                $arr_proveedores = array(
                    'idPersona'               =>  $id_persona,
                    'prov_nombre_contacto'    =>  $nomContact,
                    'idEmpresa'               =>  1,
                    'prov_estado'             =>  1,
                    'id_usuarioCreacion'      =>  $this->id_usuario,
                    'prov_fechaCreacion'      =>  date('Y-m-d H:m:s'),
                    'id_usuarioModificacion'  =>  $this->id_usuario,
                    'prov_fechaModificacion'  =>  date('Y-m-d H:m:s'),
                );

                $this->persona->_insert_proveedores($arr_proveedores);
                redirect('personal/proveedores','refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors());
            die();
            redirect('personal/proveedores','refresh');
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
                        $usuario = $this->persona->_obtener_datos_proveedores((int)$id);
                        if(count($usuario) != 0){
                            $arr_usuario = array(
                                'prov_estado' => 0
                                );
                            $this->persona->_update_proveedores($arr_usuario,(int)$id);
                        }
                        redirect('personal/proveedores','refresh');
                        ################
                    break;
                }
            }else{
                redirect(base_url().'usuario/permisos/acceso','refresh');
            }
        }
    }

    private function _formularios($id = null){
        $data['idProveedor'] = $idProveedor = (!empty($id)) ? $id['idProveedor'] : $this->form_validation->set_value('idProveedor');

        $data['tipodoc'] = $tipodoc = (!empty($id)) ? $id['per_documento'] : '';
        $data['provincia']      = $provincia = (!empty($id)) ? $id['per_provincia'] : '';
        $data['departamento']   = $departamento = (!empty($id)) ? $id['per_departamento'] : '';
        $data['distrito']       = $distrito = (!empty($id)) ? $id['per_distrito'] : '';
        $data['tipopersona'] = $tipopersona = (!empty($id)) ? $id['tipopersona'] : '';

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
            'class' => 'gui-input numero',
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

        $data['razon_social'] = array(
            'name'  => 'razon_social',
            'id'    => 'razon_social',
            'class' => 'gui-input texto',
            'type'  => 'text',
            'required' => 'required',
            'value' => $razon_social = (!empty($id)) ? $id['per_razonSocial'] : $this->form_validation->set_value('razon_social')
        );


        $data['ruc'] = array(
            'name'  => 'ruc',
            'id'    => 'ruc',
            'class' => 'gui-input numero',
            'type'  => 'number',
            'required' => 'required',
            'value' => $ruc = (!empty($id)) ? $id['per_ruc'] : $this->form_validation->set_value('ruc')
        );

        $data['direccion'] = array(
            'name'  => 'direccion',
            'id'    => 'direccion',
            'class' => 'gui-input',
            'required' => 'required',
            'value' => $direccion = (!empty($id)) ? $id['per_direccion'] : $this->form_validation->set_value('direccion')
        );

        $data['nom_contact'] = array(
            'name'  => 'nom_contact',
            'id'    => 'nom_contact',
            'class' => 'gui-input texto',
            'required' => 'required',
            'value' => $nom_contact = (!empty($id)) ? $id['prov_nombre_contacto'] : $this->form_validation->set_value('nom_contact')
        );
        
        return $data;
    }

    public function validateDni($ndoc){
        // $ndoc = $this->input->post('ndoc');
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