<?php

class Usuarios extends MY_Controller {

    protected $access = "Admin";
    protected $msg = "";

    public function index() {
        $this->load->model('usuarios_model');

        $usuarios['data'] = $this->usuarios_model->listar_usuarios();
        $usuarios['msg'] = $this->msg;
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
        $this->load->model('usuarios_model');
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
        $this->usuarios_model->insertar($tmp);
        $this->msg = "El registro se ha creado";
        redirect('usuarios');
    }

    public function modificar($id) {
        $this->load->view('base/cabeceras');
        $this->load->view('base/navbar');
        $usuario = $this->usuarios_model->get_usuario($id);
        $this->load->view('usuarios/modificar_usuario', $usuario);
        $this->load->view('base/salir');
        $this->load->view('base/pies');
    }

    public function eliminar($id) {
        $datos['id'] = $id;
        $this->load->view('usuarios/usuarios', $datos);
    }

}
