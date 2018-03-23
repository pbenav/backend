<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Usuarios_model extends CI_model {

    public function __construct() {
        parent::__construct();
    }

    public function get_usuarios() {
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function get_usuario($id) {
        $this->db->where('id_usuario', $id);
        $query = $this->db->get('usuarios', 1);
        if ($query->num_rows() > 0) {
            $datos = $query->row();
            return $datos;
        } else {
            return FALSE;
        }
    }

    public function insertar_usuario($usr) {
        return $query = $this->db->insert('usuarios', $usr);
    }
    
    public function actualizar_usuario($usr) {
        $this->db->where('id_usuario', $usr['id_usuario']);
        return $query = $this->db->update('usuarios', $usr);
    }
    
    public function eliminar_usuario($id) {
        $this->db->where('id_usuario', $id);
        return $query = $this->db->delete('usuarios');
    }

}
