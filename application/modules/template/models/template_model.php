<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Template_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}  

    public function _lst_categoria($id){
        $this->db->select('*');
        $this->db->where('cat_estado', 1);
        $this->db->where('cat_tipo', $id);
        $this->db->from('cay_categoria');
        $this->db->order_by('cat_nombre','asc');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    }
}
