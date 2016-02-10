<?php
class Salidas_model extends CI_Model{

	function __construct() { parent::__construct(); } 


function alta($excursionid, $fecha, $idvehiculo, $disponibles){
           $data = array('excursionid' => $excursionid ,'salida' => $fecha ,'vehiculoid' => $idvehiculo,'disponibles' => $disponibles); 
           $this->db->insert('salida', $data);
    }



	function getData(){
         $salidas = $this->db->get('salida'); //obtenemos la tabla 'vehiculo'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
         return $salidas->result(); //devolvemos el resultado de lanzar la query.
     }
 function baja($id){
    	$this->db->where('idsalida', $id);
        $this->db->delete('salida');

// Produce:
// DELETE FROM mitabla
// WHERE id = $id

  
}




}
?>