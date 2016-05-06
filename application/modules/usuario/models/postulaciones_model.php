<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Postulaciones_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function lst_postulaciones(){
        $this->db->where('p.postu_estado',1);
        $this->db->where('p.postu_estado !=',0);
        $this->db->select('*')->from('tbl_postulaciones p');
        // $this->db->join('tbl_persona p','p.id_persona = u.id_persona');
        $this->db->join('tbl_empresa e','e.emp_id = p.postu_empresa_id')
                    ->order_by('p.postu_fecha_creacion', 'DESC');
        return $this->db->get()->result();
	}


    public function _obtener_datos_postulaciones($id){
        $this->db->where('p.postu_id',$id);
        $this->db->select('*')->from('tbl_postulaciones p');
        return $this->db->get()->result();
    }


    public function _update_postulaciones($arrPosts,$id){
        $this->db->where('postu_id', $id);
        return $this->db->update('tbl_postulaciones', $arrPosts);
    }



}
