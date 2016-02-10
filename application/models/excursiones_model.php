<?php
class Excursiones_model extends CI_Model{

	function __construct() { parent::__construct(); } 


	function alta($codigo, $nombre, $duracion, $precio, $descrepcion){
           $data = array('nombre' => $nombre ,'codigo' => $codigo ,'precioxpersona' => $precio,'descripcion' => $descrepcion,
                         'duracion' =>  $duracion); 
           $this->db->insert('excursion', $data);
    }

function getData(){
         $excursiones = $this->db->get('excursion'); // db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
         return $excursiones->result(); //devolvemos el resultado de lanzar la query.
     }

 function baja($id){
    	$this->db->where('idexcursion', $id);
        $this->db->delete('excursion');

// Produce:
// DELETE FROM mitabla
// WHERE id = $id

  
}

function editar($data){

 $this->db->set('nombre', $data['nombre']);
 $this->db->set('codigo', $data['codigo']);
 $this->db->set('duracion', $data['duracion']);
 $this->db->set('descripcion', $data['descripcion']);
 $this->db->set('precioxpersona', $data['precio']);
 


 $this->db->where('idexcursion', $data['idexcursion']);
 $this->db->update('excursion');
// Produces:
// UPDATE mitabla
// SET titulo = '{$titulo}', nombre = '{$nombre}', fecha = '{$fecha}'
// WHERE id = $id
}


 
















 }
