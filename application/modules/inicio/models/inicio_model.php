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
















    public function lst_noticias(){
        $qry = $this->db->query('SELECT * FROM tbl_noticia n INNER JOIN tbl_categoria c ON n.id_cat = c.id_cat 
            WHERE n.estado = 1 ORDER BY n.id_noticia desc');
        return $qry->result();
    }

    public function lst_ventas_equipo(){
        $qry = $this->db->query('SELECT * FROM tbl_venta_equipo ve 
            INNER JOIN tbl_marca m ON ve.id_marca = m.id_marca
            INNER JOIN tbl_equipos e ON ve.id_equipo = e.id_equipo
            WHERE ve.vent_estado = 1');
        return $qry->result();
    }

    public function lst_reclutamiento(){
        $qry = $this->db->query("SELECT o.*,t.descripcion 'areas' FROM oportunidades_laborales o INNER JOIN tbl_areas t WHERE t.estado = 1");
        return $qry->result();
    }

    
    public function detalle_lst_reclutamiento($id){
        $qry = $this->db->query("SELECT o.*,t.descripcion 'areas' FROM oportunidades_laborales o 
            INNER JOIN tbl_areas t WHERE t.estado = 1 AND o.id_convocatoria =".(int)$id);
        return $qry->row_array();
    }

    public function detalle_ventas_equipo($id){
        $qry = $this->db->query('SELECT * FROM tbl_venta_equipo ve 
            INNER JOIN tbl_marca m ON ve.id_marca = m.id_marca
            INNER JOIN tbl_equipos e ON ve.id_equipo = e.id_equipo WHERE ve.id_venta = '.$id);
        return $qry->row_array();
    }

    public function inserta_portulante($arrPosts){
        $this->db->insert('postulante', $arrPosts);
        return $this->db->insert_id();
    }

    public function inserta_convocatoria($arrPosts){
        $this->db->insert('convocatoria', $arrPosts);
        return $this->db->insert_id();
    }

    // Cargar Departamento
    function cargaDepartamento()
    {
        $query = $this->db->query("SELECT pk_dep_int_id AS id, dep_var_descripcion AS descripcion
                                    FROM tm_departamentos WHERE dep_var_estado = 1 ORDER BY descripcion ASC");
        if($query->num_rows>0){
            $arraysito = array();
            foreach($query->result() as $row){
                $arraysito[] = array(
                        htmlspecialchars($row->id,ENT_QUOTES),
                        htmlspecialchars($row->descripcion,ENT_QUOTES)
                    );
            }
            $query->free_result();
            return json_encode($arraysito);
        }else{
            return json_encode(array(1=> array("-- No se encontraron registros--")));
        }
    }

    // Cargar Provincia
    function cargaProvincia($id)
    {
        if(empty($id) or !ctype_digit($id)) return false;

        $query = $this->db
        ->query("SELECT pk_prv_int_id AS id, prv_var_descricpion AS descripcion 
                 FROM tm_provincias WHERE fk_dep_int_id = ?
                 ORDER BY descripcion ASC",array($id));

        if($query->num_rows>0){
            $arraysito = array();
            foreach($query->result() as $row){
                $arraysito[] = array(
                        htmlspecialchars($row->id,ENT_QUOTES),
                        htmlspecialchars($row->descripcion,ENT_QUOTES)
                    );
            }
            $query->free_result();
            return json_encode($arraysito);
        }else{
            return json_encode(array(1=> array("-- No se encontraron registros--")));
        }
    }

    // Cargar Distrito
    function cargaDistrito($id)
    {
        if(empty($id) or !ctype_digit($id)) return false;

        $query = $this->db
        ->query("SELECT pk_dis_int_id AS id, dist_var_descripcion AS descripcion 
                 FROM tm_distritos WHERE fk_prv_int_id = ?
                 ORDER BY descripcion ASC",array($id));

        if($query->num_rows>0){
            $arraysito = array();
            foreach($query->result() as $row){
                $arraysito[] = array(
                        htmlspecialchars($row->id,ENT_QUOTES),
                        htmlspecialchars($row->descripcion,ENT_QUOTES)
                    );
            }
            $query->free_result();
            return json_encode($arraysito);
        }else{
            return json_encode(array(1=> array("-- No se encontraron registros--")));
        }
    }

    public function nomDep($id)
    {
        $arrayWhere = array("pk_dep_int_id"=>$id);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tm_departamentos');
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }

    public function nomProv($id)
    {
        $arrayWhere = array("pk_prv_int_id"=>$id);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tm_provincias');
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }


    public function nomDist($id)
    {
        $arrayWhere = array("pk_dis_int_id"=>$id);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tm_distritos');
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }


    


}
