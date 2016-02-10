<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Usuarios extends CI_Controller {
   public function __construct() {
      parent::__construct();
       $this->load->model('usuario_model');

   }

   public function iniciar_sesion() {
      $data = array();
      $this->load->view('login', $data);
   }

   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $nombre = $this->input->post('user');
         $contrasena = $this->input->post('pass');
         $this->load->model('usuario_model');
         $contrasena = md5($contrasena);  //encripto contraseña


    $usuario = $this->usuario_model->usuario_por_nombre_contrasena($nombre, $contrasena);
         
         $empleado = $this->usuario_model->obtener($usuario->empleado); ///llamo a la funcion del modelo q lista el empleado que corresponde al usuario
         $rol = $empleado ->rol;  //obtengo el ROL


         if ($usuario) {
            $usuario_data = array(
               'id' => $usuario->id,
               'nombre' => $usuario->user,
               'ROL' => $rol,
               'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect('home');   //tocar aca segun sea el usuario registrado
         } else {
            redirect('login');  // ACA LLAMA AL CONTROLADOR 
         }
      } else {
         $this->iniciar_sesion();
      }
   }

   public function logueado() {
      if($this->session->userdata('logueado')){
         $data = array();
         $data['user'] = $this->session->userdata('user');
         $this->load->view('usuarios/logueado', $data);
      }else{
         redirect('iniciar_sesion');
      }
   }

   public function cerrar_sesion() {
      
      $this->session->sess_destroy();  //CIERRA LA SESION
      redirect('login/index');
   }
}