<?php
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function usuario_por_nombre_contrasena($nombre, $contrasena){
      $this->db->select('id, user,empleado');
      $this->db->from('usuario');
      $this->db->where('user', $nombre);
      $this->db->where('pass', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }


function obtener($id) {
        $this->db->where('idempleado', $id);
        $query = $this->db->get('empleado');
        $fila = $query->row();
        return $fila;
    }

    }