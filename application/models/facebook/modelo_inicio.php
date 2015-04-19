<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Modelo_inicio extends CI_Model 
{
	function __construct() 
	{
		parent::__construct();
		//con esta línea cargamos la base de datos facebook
		$db_facebook = $this->load->database('facebook', TRUE);
	}	
	function prueba_conexion()
	{
        //y de esta forma accedemos, no con $this->db->get,
        //sino con $db_facebook->get que contiene la conexión
        //a la base de datos prueba
		$usuarios = $db_prueba->get('usuarios');
		foreach($usuarios->result() as $fila)
		{
			$data[] = $fila;
		}
		return $data;
	}
}	