<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('template_model', 'inicios', TRUE);
    }

	## Dashboard Admin
    function header_admin($data){
        $this->load->view('admin/layout/dash_head_view',$data);
    }
    function admin($data){
        $this->load->view('admin/index_view_dash',$data);
    }
    function footer_admin($data){
        $this->load->view('admin/layout/dash_footer_view',$data);
    }

	    
    ## Login
    function  header_login($data){
        $this->load->view('admin/layout/login_head_view',$data);
    }
    function  login($data){
        $this->load->view('admin/login_view',$data);
    }
    function  footer_login($data){
        $this->load->view('admin/layout/login_footer_view',$data);
    }


    ## Front
    function  head_front($data){
        $data['frontend'] = base_url().'assets/frontend/default/';
        $data['BASE_URL'] = base_url();
        $this->load->view('frontend/layout/head_view',$data);
    }
    
    function  front($data){ 
        $this->load->view('frontend/inicio_view',$data);
    }

    function  footer_front($data){
        $this->load->view('frontend/layout/footer_view',$data);
    }

}