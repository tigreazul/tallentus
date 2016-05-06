<?php

$theme = $this->config->item('frontend_theme');

$_data = array(
	'PATH_URL' => base_url().'assets/theme/'.$theme.'/',
	'BASE_URL' => base_url().'frontend/',
);

$this->load->view('frontend/'.$theme.'/layout/head_view',$_data);
$this->load->view('frontend/'.$theme.'/'.$view, $_data);
$this->load->view('frontend/'.$theme.'/layout/footer_view',$_data);