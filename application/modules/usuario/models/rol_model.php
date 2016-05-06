<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Rol_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function lst_rol(){
        $this->db->select('*')->from('tbl_rol')
                    ->order_by('id_rol', 'DESC');
        return $this->db->get()->result();
    }

    public function _delete_usuario($id){
        $this->db->where('id_rol', $id)
                ->delete('tbl_rol');
    }
    ## CRUD PERSONA
        public function _insert_rol($arrPosts){
            $this->db->insert('tbl_rol', $arrPosts);
            return $this->db->insert_id();
        }

        public function _update_rol($arrPosts,$id){
            $this->db->where('id_rol', $id);
            return $this->db->update('tbl_rol', $arrPosts);
        }

        public function _obtener_datos_rol($id){
            $this->db->where('id_rol',(int)$id);
            $this->db->limit(1);
            $resultado = $this->db->get('tbl_rol');
            return $resultado->row_array();
        }

}
