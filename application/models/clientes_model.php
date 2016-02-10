<?php
class Clientes_model extends CI_Model{

	function __construct() { parent::__construct(); } 


	function getData(){
         $clientes = $this->db->get('cliente'); //obtenemos la tabla 'vehiculo'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
         return $clientes->result(); //devolvemos el resultado de lanzar la query.


}


	function alta($nombre, $apellido, $fechanac, $direccion, $telefono, $email, $celular, $direccionalojam){
           
           $data = array('nombre' => $nombre ,'apellido' => $apellido ,'fechanac' => $fechanac,'direccion' => $direccion,
                         'telefono' => $telefono, 'email' => $email, 'celular' => $celular, 'direccionalojam' => $direccionalojam); 
           $this->db->insert('cliente', $data);
    }

    function baja($id){
    	$this->db->where('idcliente', $id);
        $this->db->delete('cliente');

// Produce:
// DELETE FROM mitabla
// WHERE id = $id

  
}



function editar($data){

 $this->db->set('nombre', $data['nombremodal']);
 $this->db->set('apellido', $data['apellidomodal']);
 $this->db->set('fechanac', $data['fechaNacimientomodal']);
 $this->db->set('direccion', $data['direccionmodal']);
 $this->db->set('telefono', $data['telefonomodal']);
 $this->db->set('email', $data['emailmodal']);
 $this->db->set('celular', $data['celularmodal']);
 $this->db->set('direccionalojam', $data['direccionAlojamientomodal']);


 $this->db->where('idcliente', $data['idcliente']);
 $this->db->update('cliente');

 

// Produces:
// UPDATE mitabla
// SET titulo = '{$titulo}', nombre = '{$nombre}', fecha = '{$fecha}'
// WHERE id = $id
}










}
?>