<?php


class Excursiones extends CI_Controller {

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
        $this->load->model('excursiones_model'); //cargamos el modelo
        
        if($this->session->userdata('logueado')== false){  // SI NO ESTA LOGUEADO REDIRECCIONA AL LOGIN
              
              
              redirect('login/index');

           }

           if($this->session->userdata('ROL')== "Vendedor"){
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
		$this->load->view('sidebar'); // menu lateral izquierdo
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
		 $this->load->view('sidebar'); // menu lateral izquierdo  VARIA SEGUN EL USUARIO REGISTRADO?
      
   }

    function finalPagina(){

     	$this->load->view('footer');    // pie de pagina
		$this->load->view('sidebar-derecho'); // menu desplegable derecho
		$this->load->view('cierre'); // referencia a js, cierre del body y del documento html
    	
      
   }

     function alta(){

        $this->principioPagina();
        $this->load->view('form-alta-excursion');
 		$this->finalPagina();
 	}

	


     function baja(){

     	$this->principioPagina();
     	//Obtener datos de la tabla 'vahiculo'
        $excursiones = $this->excursiones_model->getData(); //llamamos a la función getData() del modelo creado anteriormente.
        $data['excursiones'] = $excursiones;
 		$this->load->view('listado_excursiones', $data);
 		$this->finalPagina();




    }
    function bajadb($id){
    	
    	$this->excursiones_model->baja($id);
    	redirect('excursiones/baja');
    }

    function altaDb(){
    	 $codigo = $this->input->post('codigo');
    	 $nombre = $this->input->post('nombre');
    	 $duracion = $this->input->post('duracion');
    	 $precio = $this->input->post('precio');
    	 $descrepcion = $this->input->post('descrepcion');
    	 $this->excursiones_model->alta($codigo, $nombre, $duracion, $precio, $descrepcion);
    	redirect('excursiones/alta');


    }


    function update(){
    	 $data['idexcursion'] = $this->input->post('idexcursion');
    	 $data['codigo']  = $this->input->post('codigo');
    	 $data['duracion'] = $this->input->post('duracionselect');
    	 $data['descripcion'] =$this->input->post('descripcion');
    	 $data['nombre'] = $this->input->post('nombre');
    	 $data['precio'] = $this->input->post('precio');
    	 $this->excursiones_model->editar($data);
    	redirect('excursiones/baja');


    


    }








	}
?>