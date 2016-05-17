<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Inicio/Controller/Buscador.php
Propósito       : Página de Inicio Filtros
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 20/04/2016 - 15:12 hrs.
*************************************************************
*/
class Buscador extends MX_Controller
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
            array('href'=>'assets/css/tallentus.min.css'),
            array('href'=>'assets/masterslider/style/masterslider.css'),
            array('href'=>'assets/masterslider/skins/default/style.css'),
        );
        $web_js   = array(  
            
        );

        $distrito = $this->empresa->_get_lista('tbl_distrito');
        foreach ($distrito as $dist) {
            $dst[] = array(
                'id_dist' => $dist->dist_id,
                'describe_dist' => $dist->dist_descripcion,
                'postu_dist' => count($this->empresa->_get_lista_multiple('tbl_postulaciones','result',array('postu_distrito_id' => $dist->dist_id,'postu_estado' => 1)))
            );
        }


        $distrito = $this->session->userdata('distrito');
        $salario  = $this->session->userdata('salario');
        $fecha    = $this->session->userdata('fecha');
        $palabra  = $this->session->userdata('palabra');

        $arrD = array();
        $arrS = array();
        $arrF = array();
        $arrP = array();

        if(!empty($distrito)){
            $arrD = array(
                'd.dist_seo' => $distrito
            );
        }
        if(!empty($salario)){
            $arrS = array(
                'p.postu_salario >=' => $salario
            );   
        }
        if(!empty($fecha)){
            $arrF = array(
                "DATE_FORMAT(p.postu_fecha_creacion,'%Y-%m-%d')" => $fecha
            );
        }
        if(!empty($palabra)){
            $arrP = array(
                'p.postu_titulo' => $palabra
            );
        }


        $arr_final_search = array_merge($arrD,$arrP);
        $final_where = array_merge($arrS,$arrF);

        // var_dump($arr_final_search);
        // die();
        
        $postula = $this->empresa->_buscador($arr_final_search,$final_where);

        ## Inicio de Sesión
        $page_title = 'Tallentus - Inicio';
        ## Template Admin Dashboard
        $module     = 'inicio';
        $view       = 'layout/resultado_search';

        $data = array(
            'titulo'     => $page_title,
            'web_css'    => $web_css,
            'web_js'     => $web_js,
            'module'     => $module,
            'distrito'   => $dst,
            'trabajo'    => $postula,
            'view_file'  => $view
        );
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
    }


    public function palabra_clave(){
        $palabra = $this->input->post('palabra');
        $this->search('palabra='.$palabra);
    }

    public function search($q){
        ## Logica
        
        $se = explode ("=",$q);

        switch ($se[0]) {
            case 'distrito':
                $delete_sesion = array('distrito' => '');
                $this->session->unset_userdata($delete_sesion);
                
                if($se[1] != ''){
                    $add = array('distrito' => $se[1]);
                    $this->session->set_userdata($add);
                }
                break;
            case 'salario':
                $delete_sesion = array('salario' => '');
                $this->session->unset_userdata($delete_sesion);

                if($se[1] != ''){
                    $add = array('salario' => $se[1]);
                    $this->session->set_userdata($add);
                }
                break;
            case 'fecha':
                $delete_sesion = array('fecha' => '');
                $this->session->unset_userdata($delete_sesion);

                if($se[1] != ''){
                    $add = array('fecha' => $se[1]);
                    $this->session->set_userdata($add);
                }
                break;
            case 'palabra':
                $delete_sesion = array('palabra' => '');
                $this->session->unset_userdata($delete_sesion);

                if($se[1] != ''){
                    $add = array('palabra' => $se[1]);
                    $this->session->set_userdata($add);
                }
                break;
        }


        //var_dump($se);
        $distrito = $this->session->userdata('distrito');
        $salario  = $this->session->userdata('salario');
        $fecha    = $this->session->userdata('fecha');
        $palabra  = $this->session->userdata('palabra');

        $url = $this->crear_url($palabra,$distrito,$salario,$fecha);

        if(!empty($url)){
            redirect('empleos/'.$url,'refresh');
        }else{
            redirect(''.$url,'refresh');
        }
    }

    public function crear_url($palabra,$distrito,$salario,$fecha){
        $url = '';
        if(!empty($palabra)){
            $url .= $palabra." ";
        }
        if(!empty($distrito)){
            $url .= "en ".$distrito;
        }
        if(!empty($fecha)){
            $url .= " ".$fecha;
        }
        if(!empty($salario)){
            $url .= " ".$salario;
        }

        if($url == ''){
            return slugify($url,true);
        }else{
            return slugify($url);
        }
    }


}

/*
*end modules/login/controllers/dashboard.php
*/