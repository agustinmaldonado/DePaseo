<?php


class Abmvehiculos extends CI_Controller {

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
        $this->load->model('vehiculo'); //cargamos el modelo
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

     function altaViews(){

        $this->principioPagina();
     
      
        //Obtener datos de la tabla 'vahiculo'
        $autos = $this->vehiculo->getData(); //llamamos a la función getData() del modelo creado anteriormente.
        $data['autos'] = $autos;
 		$this->load->view('altavehiculo');
 		$this->finalPagina();
 	}

	


     function bajaViews(){

 

     	$this->principioPagina();
     	//Obtener datos de la tabla 'vahiculo'
        $autos = $this->vehiculo->getData(); //llamamos a la función getData() del modelo creado anteriormente.
        $data['autos'] = $autos;
 		$this->load->view('listavehiculos',$data);
 		$this->finalPagina();




    }
    function bajadb($id){
    	
    	$this->vehiculo->baja($id);
    	$this->bajaViews();
    }

    function altaDb(){
    	 $marca = $this->input->post('marca');
    	 $dominio = $this->input->post('dominio');
    	 $modelo = $this->input->post('modelo');
    	 $capacidad = $this->input->post('capacidad');
    	 $this->vehiculo->alta($marca, $dominio, $modelo, $capacidad);
         $this->altaViews();


    }

    function update(){
    	 $data['id'] = $this->input->post('idvehiculo');
    	 $data['marca']  = $this->input->post('marca');
    	 $data['modelo'] = $this->input->post('modelo');
    	 $data['patente'] =$this->input->post('dominio');
    	 $data['plazas'] = $this->input->post('plazas');
    	 $this->vehiculo->editar($data);
    	 $this->bajaViews();



    }


	}

	

?>