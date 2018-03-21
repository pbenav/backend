<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Usuarios_model extends CI_model {

    public function __construct() {
        parent::__construct();
    }

    public function listar_usuarios() {
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function get_usuario($id) {
        $this->db->where($id);
        $query = $this->db->get('usuarios', 1);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function modificar($id) {
        $this->db->where('id_usuario', $id);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function insertar($usr) {
        $query = $this->db->insert('usuarios', $usr);
        return $query;
    }
}
