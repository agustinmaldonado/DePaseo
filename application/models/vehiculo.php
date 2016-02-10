
<?php

class Vehiculo extends CI_Model {


      /* public function listar(){
      
              $this->db->select('idvehiculo, marca, modelo, patente, plazas');
              $this->db->from('vehiculo');
              $consulta = $this->db->get();   //// Produce: SELECT * FROM tabla
              $resultado = $consulta->result();
              return $resultado;
   }
*/
function getData(){
  
  
  $autos = $this->db->get('vehiculo'); //obtenemos la tabla 'vehiculo'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
  return $autos->result(); //devolvemos el resultado de lanzar la query.


}

function alta($marca, $dominio, $modelo, $capacidad){

  $data = array('marca' => $marca ,'patente' => $dominio ,'modelo' => $modelo,'plazas' => $capacidad); // modificar para la tabla de vahiculos
  $this->db->insert('vehiculo', $data);
}

function baja($id){

$this->db->where('idvehiculo', $id);
$this->db->delete('vehiculo');

// Produce:
// DELETE FROM mitabla
// WHERE id = $id

  
}

function editar($data){

 $this->db->set('marca', $data['marca']);
 $this->db->set('modelo', $data['modelo']);
 $this->db->set('patente', $data['patente']);
 $this->db->set('plazas', $data['plazas']);
 $this->db->where('idvehiculo', $data['id']);
 $this->db->update('vehiculo');

 

// Produces:
// UPDATE mitabla
// SET titulo = '{$titulo}', nombre = '{$nombre}', fecha = '{$fecha}'
// WHERE id = $id
}


//obtenemos la fila completa del mensaje a editar
    //vemos que como solo queremos una fila utilizamos
    //la función row que sólo nos devuelve una fila,
    //así la consulta será más rápida

function obtener($id) {
        $this->db->where('idvehiculo', $id);
        $query = $this->db->get('vehiculo');
        $fila = $query->row();
        return $fila;
    }


function disponible($id){



  
}    

 
}
?>