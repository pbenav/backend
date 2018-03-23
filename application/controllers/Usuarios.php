<?php

class Usuarios extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
    }

    protected $access = "Admin";

    public function index() {
        $usuarios['data'] = $this->usuarios_model->get_usuarios();
        $this->load->view('base/cabeceras');
        $this->load->view('base/navbar');
        $this->load->view('usuarios/usuarios', $usuarios);
        $this->load->view('base/salir');
        $this->load->view('base/pies');
    }

    public function insertar() {
        $this->load->view('base/cabeceras');
        $this->load->view('base/navbar');
        $this->load->view('usuarios/alta_usuario');
        $this->load->view('base/salir');
        $this->load->view('base/pies');
    }

    public function guardar() {
        $tmp = ['codigo_usuario' => $this->input->post('codigo_usuario'),
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
            'parent_usuario' => $this->input->post('parent_usuario'),
            'grupo_usuario' => $this->input->post('grupo_usuario'),
            'nombre_usuario' => $this->input->post('nombre_usuario'),
            'apellidos_usuario' => $this->input->post('apellidos_usuario'),
            'razon_usuario' => $this->input->post('razon_usuario'),
            'obs_usuario' => $this->input->post('obs_usuario'),
            'rol' => $this->input->post('rol')
        ];
        $this->usuarios_model->insertar_usuario($tmp);
        redirect('usuarios');
    }

    public function actualizar() {
        $pass = $this->input->post('password');
        if (!$pass == NULL) {
            $tmp ['password'] = sha1($pass);
        }
        $tmp = ['codigo_usuario' => $this->input->post('codigo_usuario'),
            'username' => $this->input->post('username'),
            'parent_usuario' => $this->input->post('parent_usuario'),
            'grupo_usuario' => $this->input->post('grupo_usuario'),
            'nombre_usuario' => $this->input->post('nombre_usuario'),
            'apellidos_usuario' => $this->input->post('apellidos_usuario'),
            'razon_usuario' => $this->input->post('razon_usuario'),
            'obs_usuario' => $this->input->post('obs_usuario'),
            'rol' => $this->input->post('rol')
        ];
        $this->usuarios_model->actualizar_usuario($tmp);
        redirect('usuarios');
    }

    public function modificar($id = null) {
        if (!$id == null) {
            $data['datos'] = $this->usuarios_model->get_usuario($id);
            $this->load->view('base/cabeceras');
            $this->load->view('base/navbar');
            if (isset($data)) {
                $this->load->view('usuarios/modificar_usuario', $data);
            }
            $this->load->view('base/salir');
            $this->load->view('base/pies');
        } else {
            redirect('usuarios');
        }
    }

    public function eliminar($id = null) {
        if (!$id == NULL) {
            $this->usuarios_model->eliminar_usuario($id);
        }
        redirect('usuarios');
    }

}
