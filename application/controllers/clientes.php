<?php


class Clientes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps the folloo twing URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct() {
        parent::__construct();
        $this->load->model('clientes_model'); //cargamos el modelo
        if($this->session->userdata('logueado')== false){
             redirect('login/index');

           }
       }

	public function index()
	{
		/*
		$this->load->Model('vehiculo');
		$registros = $this->vehiculo->listar();
		$this->load->view('listarvehiculos', $registros); 
		*/
		$this->load->view('starter');    //inicio del html y head e inicio del body
		$this->load->view('main-header');  //cabecera superior
		$this->load->view('sidebar'); // menu de opciones
		$this->load->view('cuerpo');  // div para mostrar las difrentes funciones del sistema
		$this->load->view('footer');    // pie de pagina
		$this->load->view('sidebar-derecho'); // menu desplegable derecho
		$this->load->view('cierre'); // referencia a js, cierre del body y del documento html

       
		
		
		




		 
         //load de vistas
          //llamada a la vista, que crearemos posteriormente
     }
    
     function principioPagina(){
     	 $this->load->view('starter');    //inicio del html y head e inicio del body
		 $this->load->view('main-header');  //cabecera superior
		 if($this->session->userdata('ROL')== "Vendedor"){
             $this->load->view('menu_vendedor'); // menu lateral izquierdo  VARIA SEGUN EL USUARIO REGISTRADO?

           }

         if($this->session->userdata('ROL')== "Administrador"){
             $this->load->view('sidebar'); // menu lateral izquierdo  VARIA SEGUN EL USUARIO REGISTRADO?

           }  

         
      
   }

    function finalPagina(){

     	$this->load->view('footer');    // pie de pagina
		$this->load->view('sidebar-derecho'); // menu desplegable derecho
		$this->load->view('cierre'); // referencia a js, cierre del body y del documento html
    	
      
   }

     function alta(){

        $this->principioPagina();
        $this->load->view('form_cliente');
 		$this->finalPagina();
 	}

	


     function baja(){

     	$this->principioPagina();
     	//Obtener datos de la tabla 'vehiculo'
        $clientes = $this->clientes_model->getData(); //llamamos a la función getData() que retorna los clientes de la BD.
        $data['clientes'] = $clientes;
 		$this->load->view('listado_clientes', $data);
 		$this->finalPagina();




    }
    function bajadb($id){
    	
    	$this->clientes_model->baja($id);
    	//$this->baja();
    	redirect('Clientes/baja');
    }

    function altaDb(){
    	 
    	 $nombre = $this->input->post('nombre');
    	 $apellido = $this->input->post('apellido');
    	 $fechanac = $this->input->post('fechaNacimiento');
    	 $direccion = $this->input->post('direccion');
         $telefono = $this->input->post('telefono');
    	 $email = $this->input->post('email');
    	 $celular = $this->input->post('celular');
    	 $direccionalojam = $this->input->post('direccionAlojamiento');
         $this->clientes_model->alta($nombre, $apellido, $fechanac, $direccion, $telefono, $email, $celular, $direccionalojam);
    	 $this->alta();


    }

    function update(){
         $data['idcliente'] = $this->input->post('idcliente');
         $data['nombremodal']  = $this->input->post('nombremodal');
         $data['apellidomodal'] = $this->input->post('apellidomodal');
         $data['fechaNacimientomodal'] =$this->input->post('fechaNacimientomodal');
         $data['direccionmodal'] = $this->input->post('direccionmodal');
         $data['telefonomodal']  = $this->input->post('telefonomodal');
         $data['direccionAlojamientomodal'] =$this->input->post('direccionAlojamientomodal');
         $data['emailmodal'] = $this->input->post('emailmodal');
         $data['celularmodal'] = $this->input->post('celularmodal');
         $this->clientes_model->editar($data);
         $this->baja();



    }


	}

	

?>
