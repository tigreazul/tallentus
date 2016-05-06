<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login_user($username,$password)
	{
		$this->db->where('LOWER(usu_correo)=',strtolower($username));
		$this->db->where('usu_clave',$password);
		$this->db->where('usu_estado',1);

		$query = $this->db->get('tbl_usuario');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','error_login');
			redirect('login/inicio','refresh');
		}
	}


	public function _getUsuario($usuario)
	{
		$this->db->where('usu_id',$usuario);
		$this->db->where('usu_estado',1);
		// $this->db->where('id_rol',0);
		$query = $this->db->get('tbl_usuario');
		return $query->row_array();
	}

}
