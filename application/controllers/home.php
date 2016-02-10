<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        if($this->session->userdata('logueado')== false){  // SI NO ESTA LOGUEADO REDIRECCIONA AL LOGIN
             redirect('login/index');

           }
       }

	public function index()
	{
		$this->load->view('starter');    //inicio del html y head e inicio del body
		$this->load->view('main-header');  //cabecera superior
		if($this->session->userdata('ROL')== "Vendedor"){
             $this->load->view('menu_vendedor'); // menu lateral izquierdo  VARIA SEGUN EL USUARIO REGISTRADO?

           }

         if($this->session->userdata('ROL')== "Administrador"){
             $this->load->view('sidebar'); // menu lateral izquierdo  VARIA SEGUN EL USUARIO REGISTRADO?

           } 
		
		$this->load->view('cuerpo');  // div para mostrar las difrentes funciones del sistema
		$this->load->view('footer');    // pie de pagina
		$this->load->view('sidebar-derecho'); // menu desplegable derecho
		$this->load->view('cierre'); // referencia a js, cierre del body y del documento html
	}
}