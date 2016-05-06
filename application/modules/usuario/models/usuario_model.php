<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Usuario_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function lst_users(){
        $this->db->where('u.usu_estado',1);
        $this->db->where('u.id_rol !=',0);
        $this->db->select('*')->from('tbl_usuario u');
        // $this->db->join('tbl_persona p','p.id_persona = u.id_persona');
        $this->db->join('tbl_tipo_doc td','td.doc_id = u.usu_tipo_doc')
                    ->order_by('u.usu_id', 'DESC');
        return $this->db->get()->result();
	}

    public function lst_users_postulante(){
        $this->db->where('u.usu_estado',1)
            ->where('u.id_rol',0)
            ->select('*')->from('tbl_usuario u')
            ->join('tbl_tipo_doc td','td.doc_id = u.usu_tipo_doc')
            ->order_by('u.usu_id', 'DESC');
        return $this->db->get()->result();
    }

    public function lst_users_empresas(){
        $this->db->where('u.emp_estado',1)
            ->where('u.id_rol',0)
            ->select('*')->from('tbl_empresa u')
            ->order_by('u.emp_id', 'DESC');
        return $this->db->get()->result();
    }


    public function _lst_cbo_tipo_documento(){
        $this->db->select('doc_id id,doc_nombre nombre')
                ->from('tbl_tipo_doc')
                ->order_by('id','ASC');
        $result = $this->db->get();
        $cbo_arr['']='SELECCIONE';
        foreach($result->result() as $row)
        {
            $cbo_arr[$row->id]=strtoupper($row->nombre);
        };
        $result->free_result();
        return $cbo_arr;
    }

    public function _lst_cbo_rol(){
        $this->db->select('id_rol id,rol_descripcion nombre')
                ->from('tbl_rol')
                ->order_by('id','ASC');
        $result = $this->db->get();
        $cbo_arr['']='SELECCIONE';
        foreach($result->result() as $row)
        {
            $cbo_arr[$row->id]=strtoupper($row->nombre);
        };
        $result->free_result();
        return $cbo_arr;
    }


    public function _lst_cbo_departamento(){
        $this->db->select('department_id id,department nombre')
                ->from('tbl_ubigeo')
                ->group_by('department')
                ->order_by('id','ASC');
        $result = $this->db->get();
        $cbo_arr['']='SELECCIONE';
        foreach($result->result() as $row)
        {
            $cbo_arr[$row->id]=strtoupper($row->nombre);
        };
        $result->free_result();
        return $cbo_arr;
    }

    public function ajax_provincia($id){
        $this->db->select('province_id id,province nombre')
                ->from('tbl_ubigeo')
                ->group_by('province')
                ->where('department_id', $id)
                ->order_by('id','ASC');
        $result = $this->db->get();
        // $cbo_arr['']='SELECCIONE';
        $cbo_arr ='<option value="">SELECCIONE</option>';
        foreach($result->result() as $row)
        {
            $cbo_arr .= '<option value='.$row->id.'>'.strtoupper($row->nombre).'</option>';
            //$cbo_arr[$row->id]=strtoupper($row->nombre);
        };
        $result->free_result();
        return $cbo_arr;
    }


    public function ajax_distrito($id){
        $this->db->select('district_id id,district nombre')
                ->from('tbl_ubigeo')
                ->group_by('district')
                ->where('province_id', $id)
                ->order_by('id','ASC');
        $result = $this->db->get();
        // $cbo_arr['']='SELECCIONE';
        $cbo_arr ='<option value="">SELECCIONE</option>';
        foreach($result->result() as $row)
        {
            $cbo_arr .= '<option value='.$row->id.'>'.strtoupper($row->nombre).'</option>';
            //$cbo_arr[$row->id]=strtoupper($row->nombre);
        };
        $result->free_result();
        return $cbo_arr;
    }

    

    ## CRUD PERSONA
        public function _insert_persona($arrPosts){
            $this->db->insert('tbl_persona', $arrPosts);
            return $this->db->insert_id();
        }

        public function _update_persona($arrPosts,$id){
            $this->db->where('id_persona', $id);
            return $this->db->update('tbl_persona', $arrPosts);
        }

        public function _obtener_datos_persona($id){
            $this->db->where('id_persona',(int)$id);
            $this->db->limit(1);
            $resultado = $this->db->get('tbl_persona');
            return $resultado->row_array();
        }

    ## CRUD USER
        public function _insert_usuario($arrPosts){
            $this->db->insert('tbl_usuario', $arrPosts);
            return $this->db->insert_id();
        }

        public function _update_usuario($arrPosts,$id){
            $this->db->where('usu_id', $id);
            return $this->db->update('tbl_usuario', $arrPosts);
        }

        public function _obtener_datos_usuario($id){
            $sql = "SELECT * FROM tbl_usuario u 
                -- INNER JOIN tbl_persona p ON u.id_persona = p.id_persona 
                INNER JOIN tbl_tipo_doc td ON td.doc_id = u.usu_tipo_doc
                WHERE u.usu_id = ".$id." ORDER BY u.usu_id DESC LIMIT 1";
            // $this->db->where('u.user_estado',1);
            // $this->db->where('u.id_usuario',(int)$id)->limit(1);
            // $this->db->select('*')->from('tbl_usuario u');
            // $this->db->join('tbl_persona p','p.id_persona = u.id_persona');
            // $this->db->join('tbl_tipo_doc td','td.id_documento = p.per_documento')
            //         ->order_by('u.id_usuario', 'DESC');
            $quuery = $this->db->query($sql);
            return $quuery->row_array();
        }


    /**
    * Check if username available for registering
    *
    * @param   string
    * @return  bool
    */
    function isUsernameAvailable($username)
    {
        $this->db->select('usu_correo');
        $this->db->where('LOWER(usu_correo)=', strtolower($username));
        $query = $this->db->get('tbl_usuario');
        if ($query->num_rows() == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
    * Check if username available for registering
    *
    * @param   string
    * @return  bool
    */
    function isDniAvailable($dni)
    {
        $sql = "SELECT * FROM  tbl_usuario p 
                WHERE p.usu_nro_documento = ".$dni." AND p.usu_estado = 1 LIMIT 1";
        $quuery = $this->db->query($sql);
        // $this->db->where('u.user_estado',1);
        // $this->db->where('p.per_nrodoc', $dni);
        // $this->db->select('p.per_nrodoc')->from('tbl_usuario u');
        // $this->db->join('tbl_persona p','p.id_persona = u.id_persona');
        // $this->db->join('tbl_tipo_doc td','td.id_documento = p.per_documento')
        //             ->order_by('u.id_usuario', 'DESC');
        // $query = $this->db->get();
        if ($quuery->num_rows() == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
