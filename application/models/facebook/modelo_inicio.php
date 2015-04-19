<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Modelo_inicio extends CI_Model 
{
	function __construct() 
	{
		parent::__construct();
		//con esta línea cargamos la base de datos facebook
		$db_facebook = $this->load->database('facebook', TRUE);
	}	
	
	//Consulta que prueba la conexión a la base de datos
	public function consulta()
	{	
		$db_facebook = $this->load->database('facebook', TRUE);
		$consulta = $db_facebook->query("SELECT * FROM candidatos WHERE Partido='PAN' and Nombre='Jorge Luis Preciado Rodríguez'");
	
		if($consulta->num_rows()>0)
		{
			return $consulta->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}
}	