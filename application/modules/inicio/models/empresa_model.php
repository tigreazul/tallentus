<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Empresa_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

    public function login_user($username,$password)
    {
        $this->db->where('LOWER(emp_email)=',strtolower($username));
        $this->db->where('emp_clave',$password);
        $this->db->where('emp_estado',1);

        $query = $this->db->get('tbl_empresa');
        if($query->num_rows() == 1)
        {
            return $query->row();
        }else{
            return false;
        }
    }


    public function _update($tabla,$arrDatos,$id){
        $this->db->where('emp_id', $id);
        return $this->db->update($tabla, $arrDatos);
    }
    

    public function _obtener_email($email){
        $arrayWhere = array("emp_email"=>$email);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tbl_empresa');
        $this->db->limit(1);
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }


    public function _get_lista_multiple($tabla,$rs,$arr = null){
        if(!empty($arr) and is_array($arr)){
            $this->db->where($arr);  
        }
        $this->db->select('*');
        $this->db->from($tabla);
        $query = $this->db->get();
        if($rs == 'row'){
            // $this->db->limit(1);
            $resultado = $query->row_array();
        }elseif($rs == 'result'){
            $resultado = $query->result();
        }
        return $resultado;
    }


    public function _get_lista($tabla,$id = null,$key = null){
        if(!empty($id) and !empty($key)){
            $this->db->where($key,$id);
        }
        $this->db->select('*');
        $this->db->from($tabla);
        $query = $this->db->get();

        if(!empty($id) and !empty($key)){
            $arrayResultado = $query->row_array();
        }else{
            $arrayResultado = $query->result();
        }
        return $arrayResultado;
    }



    public function _get_postulaciones($resultado,$id = null,$otro = null,$arrDato = null,$limit = null){
        if(!empty($id) and is_numeric($id)){
            $this->db->where('p.postu_id',$id);
        }elseif(!empty($id) and is_string($id)){
            $this->db->where('p.postu_seo',$id);
        }elseif(!empty($otro)){
            $this->db->where('p.postu_empresa_id',$otro);
        }elseif(!empty($arrDato)){
            $this->db->where($arrDato);
        }

        $this->db->where('p.postu_estado',1);
        $this->db->select('*');
        $this->db->join('tbl_contrato c','c.contra_id = p.postu_tipo_contrato_id');
        $this->db->join('tbl_distrito d','d.dist_id = p.postu_distrito_id');
        $this->db->join('tbl_educacion edu','edu.edu_id = p.postu_educacion_id');
        $this->db->join('tbl_empresa e','e.emp_id = p.postu_empresa_id');
        $this->db->join('tbl_jornada j','j.jor_id = p.postu_jornada_id');
        $this->db->join('tbl_areas a','a.area_id = p.postu_area_id');
        if(!empty($limit)){
            $this->db->limit($limit);
            $this->db->order_by('p.postu_estado', 'RANDOM');
        }
        $this->db->from('tbl_postulaciones p');
        $query = $this->db->get();
        if($resultado == 'row'){
            $arrayResultado = $query->row_array();
        }elseif($resultado = 'result'){
            $arrayResultado = $query->result();
        }
        return $arrayResultado;
    }


    public function _get_($id = null,$idPostu = null){
        if(!empty($id)){
            $this->db->where('up.usu_id',$id);
        }
        if(!empty($idPostu)){
            $this->db->where('p.postu_id',$idPostu);
        }
        $this->db->select('*');
        $this->db->join('tbl_contrato c','c.contra_id = p.postu_tipo_contrato_id');
        $this->db->join('tbl_distrito d','d.dist_id = p.postu_distrito_id');
        $this->db->join('tbl_educacion edu','edu.edu_id = p.postu_educacion_id');
        $this->db->join('tbl_empresa e','e.emp_id = p.postu_empresa_id');
        $this->db->join('tbl_jornada j','j.jor_id = p.postu_jornada_id');
        $this->db->join('tbl_usuarioxpostulacion up','up.postu_id = p.postu_id');
        $this->db->from('tbl_postulaciones p');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    }

    ## POSTULACIONES
        // public function _get_lista_id($tabla,$id,$key){
        //     if(!empty($id)){
        //         $this->db->where($key,$id);
        //     }
        //     $this->db->select('*');
        //     $this->db->from($tabla);
        //     $query = $this->db->get();
        //     $arrayResultado = $query->result();
        //     return $arrayResultado;
        // }


    public function _buscador($arrDato){
        if(!empty($arrDato)){
            $this->db->where($arrDato);
        }

        $this->db->where('p.postu_estado',1);
        $this->db->select('*');
        $this->db->join('tbl_contrato c','c.contra_id = p.postu_tipo_contrato_id');
        $this->db->join('tbl_distrito d','d.dist_id = p.postu_distrito_id');
        $this->db->join('tbl_educacion edu','edu.edu_id = p.postu_educacion_id');
        $this->db->join('tbl_empresa e','e.emp_id = p.postu_empresa_id');
        $this->db->join('tbl_jornada j','j.jor_id = p.postu_jornada_id');
        $this->db->join('tbl_areas a','a.area_id = p.postu_area_id');
        $this->db->from('tbl_postulaciones p');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    
    }


}
