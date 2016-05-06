<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Personal_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	

    ## CRUD CLIENTE
    	public function lst_clientes(){
            $sql = "SELECT * FROM tbl_cliente u INNER JOIN tbl_persona p
                    ON u.idPersona = p.id_persona INNER JOIN tbl_tipodocumento td 
                    ON td.id_documento = p.per_documento  WHERE u.cli_estado = 1 ORDER BY u.idCliente DESC";
                $quuery = $this->db->query($sql);
                return $quuery->result();
    	}
        public function _insert_cliente($arrPosts){
            $this->db->insert('tbl_cliente', $arrPosts);
            return $this->db->insert_id();
        }

        public function _update_cliente($arrPosts,$id){
            $this->db->where('idCliente', $id);
            return $this->db->update('tbl_cliente', $arrPosts);
        }

        public function _obtener_datos_cliente($id){
            $sql = "SELECT * FROM tbl_cliente u INNER JOIN tbl_persona p
                ON u.idPersona = p.id_persona JOIN tbl_tipodocumento td 
                ON td.id_documento = p.per_documento
                WHERE u.cli_estado = 1 and u.idCliente = ".$id." ORDER BY u.idCliente DESC LIMIT 1";
            $quuery = $this->db->query($sql);
            return $quuery->row_array();
        }


    ## CRUD EMPLEADO
        public function lst_empleado(){
            $sql = "SELECT * FROM tbl_empleado e 
                    INNER JOIN tbl_persona p ON e.id_persona = p.id_persona 
                    INNER JOIN tbl_tipodocumento td ON td.id_documento = p.per_documento  
                    INNER JOIN tbl_cargo c ON e.id_cargo = c.id_cargo  
                    WHERE e.emp_estado = 1 ORDER BY e.id_empleado DESC";
                $quuery = $this->db->query($sql);
                return $quuery->result();
        }
        public function _insert_empleado($arrPosts){
            $this->db->insert('tbl_empleado', $arrPosts);
            return $this->db->insert_id();
        }

        public function _update_empleado($arrPosts,$id){
            $this->db->where('id_empleado', $id);
            return $this->db->update('tbl_empleado', $arrPosts);
        }

        public function _obtener_datos_empleado($id){
            $sql = "SELECT * FROM tbl_empleado e 
                    INNER JOIN tbl_persona p ON e.id_persona = p.id_persona 
                    INNER JOIN tbl_tipodocumento td ON td.id_documento = p.per_documento  
                    INNER JOIN tbl_cargo c ON e.id_cargo = c.id_cargo  
                    WHERE e.emp_estado = 1 AND e.id_empleado = ".$id." ORDER BY e.id_empleado DESC LIMIT 1";
            $quuery = $this->db->query($sql);
            return $quuery->row_array();
        }

    ## CRUD PROVEEDOR
        public function lst_proveedores(){
            $sql = "SELECT * FROM tbl_proveedor prov 
                    INNER JOIN tbl_persona p ON prov.idPersona = p.id_persona 
                    INNER JOIN tbl_tipodocumento td ON td.id_documento = p.per_documento
                    WHERE prov.prov_estado = 1 ORDER BY prov.idProveedor DESC";
                $quuery = $this->db->query($sql);
                return $quuery->result();
        }
        public function _insert_proveedores($arrPosts){
            $this->db->insert('tbl_proveedor', $arrPosts);
            return $this->db->insert_id();
        }

        public function _update_proveedores($arrPosts,$id){
            $this->db->where('idProveedor', $id);
            return $this->db->update('tbl_proveedor', $arrPosts);
        }

        public function _obtener_datos_proveedores($id){
            $sql = "SELECT * FROM tbl_proveedor prov 
                    INNER JOIN tbl_persona p ON prov.idPersona = p.id_persona 
                    INNER JOIN tbl_tipodocumento td ON td.id_documento = p.per_documento
                    WHERE prov.prov_estado = 1 AND prov.idProveedor = ".$id." ORDER BY prov.idProveedor DESC LIMIT 1";
            $quuery = $this->db->query($sql);
            return $quuery->row_array();
        }


    ## COMBOS PARA CARGAR
        public function _lst_cbo_cargo(){
            $this->db->select('id_cargo id,car_nombre nombre')
                    ->from('tbl_cargo')
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
}
