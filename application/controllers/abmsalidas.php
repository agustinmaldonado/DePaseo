<?php


class Abmsalidas extends CI_Controller {

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
         $this->load->model('excursiones_model'); //cargamos el modelo de excursiones a usar en el gerenrador de salidas
         $this->load->model('vehiculo'); //cargamos el modelo
          $this->load->model('salidas_model'); //cargamos el modelo
          if($this->session->userdata('logueado')== false){
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

    function generarsalida(){
         //Obtener datos de la tabla de excursiones
         $excursiones = $this->excursiones_model->getData(); //llamamos a la función getData() del modelo creado anteriormente.
         $data['excursiones'] = $excursiones;
         $this->principioPagina();
         $this->load->view('generar_salidas',$data);

         $this->finalPagina();
        
     }

   function altaViews(){

        // $data['idexcursion'] = $this->input->post('idexcursion');
        // $data['codigo']  = $this->input->post('codigo');

       //  $data = array(
        //'codigo' => 'Jhon Locke',
        //'mensaje' => 'Has encontrado la escotilla!'
        //);
       
         $codigo= $this->input->post('codigo');
          //$data['codigo']  = $this->input->post('codigo');

          $nombre= $this->input->post('nombre');
          $idexcursion= $this->input->post('idexcursion');

       $data = array('codigo' => $codigo,'nombre' => $nombre, 'idexcursion' => $idexcursion);
        $autos = $this->vehiculo->getData(); //llamamos a la función getData() del modelo creado anteriormente.
        $data2['autos'] = $autos;



        $this->principioPagina();
        $this->load->view('form_salida',$data,$data2);
        $this->finalPagina();
    }
	

function altaDb(){
         $excursionid = $this->input->post('idexcursion');
         $fecha = $this->input->post('fecha');
         $idvehiculo = $this->input->post('idvehiculo');

         $autos = $this->vehiculo->obtener($idvehiculo); //llamamos a la función getData() del modelo creado anteriormente.
         $disponibles = $autos ->plazas;
         $this->salidas_model->alta($excursionid, $fecha, $idvehiculo, $disponibles);
         $this->bajaViews();

       


    }
   
   
     function bajaViews(){
          $this->principioPagina();
          $salidas = $this->salidas_model->getData(); 
          $data['salidas'] = $salidas;
          $this->load->view('listado_salidas',$data);
          $this->finalPagina();




    }

   
 
    function bajadb($id){
      
      $this->salidas_model->baja($id);
      $this->bajaViews();
    }


	
}

    
?>