<?php

class Escritorio extends MY_Controller {
    
    protected $access = "@";
    
    public function index() {
        $this->load->view('base/cabeceras');
        $this->load->view('base/navbar');
        $this->load->view('escritorio');
        $this->load->view('base/salir');
        $this->load->view('base/pies');
    }
}
