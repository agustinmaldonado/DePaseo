<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function index()
	{
		$this->load->view('starter');    //inicio del html y head e inicio del body
		$this->load->view('main-header');  //cabecera superior
		$this->load->view('sidebar'); // menu lateral izquierdo
		$this->load->view('form-perfil');  // div para mostrar las difrentes funciones del sistema
		$this->load->view('footer');    // pie de pagina
		$this->load->view('sidebar-derecho'); // menu desplegable derecho
		$this->load->view('cierre'); // referencia a js, cierre del body y del documento html
	}
}