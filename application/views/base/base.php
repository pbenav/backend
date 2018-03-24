<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('base/cabeceras');
$this->load->view('base/navbar');
$this->load->view($_view);
$this->load->view('base/pies');
$this->load->view('base/salir');

