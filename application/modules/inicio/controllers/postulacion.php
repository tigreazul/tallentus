<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Inicio/Controller/Postulacion.php
Propósito       : Página de Inicio Postulaciones
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 20/04/2016 - 15:12 hrs.
*************************************************************
*/
class Postulacion extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('empresa_model', 'empresa', TRUE);
        $this->load->model('inicio_model', 'inicio', TRUE);
    }

    public function index($id = null)
    {
        $web_css  = array(
            array('href'=>'assets/css/bootstrap.css'),
            array('href'=>'script/materialize/css/materialize.css'),
            array('href'=>'assets/css/theme.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            array('src'=>'script/materialize/js/materialize.js')
        );

        ## Logica
        
        $page_title = 'Tallentus - Empresa';
        $tbl_postu = $this->empresa->_get_postulaciones('row',$id);
        $rnd_prst = $this->empresa->_get_postulaciones('result',null,null,null,6);
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'postulaciones/index';

        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'module'     => $module,
            'rand_post'  => $rnd_prst,
            'tbl_postu'  => $tbl_postu,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }

    public function postular($id = null)
    {
        ## Logica
        if($id == null){
            redirect(base_url(),'refresh');
        }

        $code = explode('_',$id);
        $postula = base64_decode($code[0]);
        $usuario =  $this->session->userdata('id_usuario');
        
        if(!empty($usuario) and !empty($postula)){
            $where = array(
                'usu_id' => $usuario,
                'postu_id' => $postula,
                'estado' => 1
                );
            // Validando
            $values = $this->empresa->_get_lista_multiple('tbl_usuarioxpostulacion','result',$where);
            if(count($values) == 0){
                $arr = array(
                    'usu_id'    => $usuario,
                    'postu_id'  => $postula,
                    'estado'    => 1,
                    'fecha_postulacion' => date('Y-m-d H:m:s')
                );
                //Registrando postulacion
                $ins = $this->inicio->_insertar('tbl_usuarioxpostulacion',$arr);
                redirect('mi-cuenta','refresh');
            }else{
                redirect('','refresh');
            }

        }else{
            redirect('','refresh');    
        }
    }
    

}

/*
*end modules/login/controllers/dashboard.php
*/