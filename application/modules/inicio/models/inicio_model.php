<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Inicio_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	

    ## Insertar datos
    public function _insertar($tabla,$arrDatos){
        $this->db->insert($tabla, $arrDatos);
        return $this->db->insert_id();
    }

    public function _update($tabla,$arrDatos,$id){
        $this->db->where('usu_id', $id);
        return $this->db->update($tabla, $arrDatos);
    }

    public function _delete($tabla,$idWhere){
        $this->db->where($idWhere);
        return $this->db->delete($tabla);
    }


    public function _obtener_id($id){
        $arrayWhere = array("usu_id"=>$id);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tbl_usuario');
        $this->db->limit(1);
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }

    public function _obtener_email($email){
        $arrayWhere = array("usu_correo"=>$email);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tbl_usuario');
        $this->db->limit(1);
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }

    public function _get_areas($id = null){
        if(!empty($id)){
            $this->db->where('area_id',$id);
        }
        $this->db->select('*');
        $this->db->from('tbl_areas');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    }

    public function _get_areas_usuario($id = null,$resultado = null,$id_res = null){
        if(!empty($id)){
            $this->db->where('au.area_usu',$id);
        }
        if(!empty($id_res)){
            $this->db->where($id_res);
        }

        $this->db->select('*');
        $this->db->join('tbl_areas a','au.area_id = a.area_id');
        $this->db->from('tbl_areasxusuario au');
        $query = $this->db->get();
        if($resultado == 'row'){
            $arrayResultado = $query->row_array();
        }else{
            $arrayResultado = $query->result();
        }
        return $arrayResultado;
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
            redirect(base_url(),'refresh');
        }
    }



    public function _lst_cbo($id,$nombre,$tabla,$descripcion){
        $this->db->select("$id id,$nombre nombre")
                ->from($tabla)
                ->order_by('id','ASC');
        $result = $this->db->get();
        $cbo_arr['']= $descripcion;
        foreach($result->result() as $row)
        {
            $cbo_arr[$row->id]=strtoupper($row->nombre);
        };
        $result->free_result();
        return $cbo_arr;
    }

    

    public function search_user($email)
    {
        $this->db->select('user_id id');    
        $this->db->from('tbl_usuario');
        $this->db->where('usu_correo',$email);
        $this->db->where('usu_estado',1);
        $this->db->where('id_rol',0);
        $query = $this->db->get();
        if($query->num_rows() == 1)
        {
            return $query->row();
        }else{
            return false;
        }
    }


    public function valid_token($id_user,$token)
    {
        $this->db->select('token_register');
        $this->db->from('tbl_usuario');
        $this->db->where('user_id',$id_user);  
        $this->db->where('token_register',$token);
        $query = $this->db->get();
        return $query->result();
    }


}
