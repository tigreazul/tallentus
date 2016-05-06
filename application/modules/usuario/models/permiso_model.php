<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Permiso_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function lst_paginas(){
        $this->db->select('*')->from('tbl_pagina')
                    ->order_by('id_pagina', 'DESC');
        return $this->db->get()->result();
    }

    public function _obtener_rol_permisos($id_pagina,$id_rol){
        $this->db->where('id_rol',(int)$id_rol);
        $this->db->where('id_pagina',(int)$id_pagina);
        $this->db->limit(1);
        $resultado = $this->db->get('tbl_permisos');
        return $resultado->row_array();
    }


    public function _update_permiso($arr, $id_pagina, $id_rol){
        $this->db->where('id_pagina', $id_pagina);
        $this->db->where('id_rol', $id_rol);
        return $this->db->update('tbl_permisos', $arr);
    }

    public function _insert_permiso($arrPosts){
        $this->db->insert('tbl_permisos', $arrPosts);
        return $this->db->insert_id();
    }


    // public function _obtener_

    ### ------------------
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



    public function permiso_por_pagina($idUsuario,$idPagina){
        $qry = "    SELECT p.* FROM tbl_usuario u INNER JOIN tbl_rol r
            ON u.id_rol = r.id_rol INNER JOIN tbl_permisos p
            ON u.id_rol = p.id_rol 
            WHERE u.usu_id = ".$idUsuario."
            AND p.id_pagina = ".$idPagina;
        $quuery = $this->db->query($qry);
        return $quuery->row_array();
    }

}
