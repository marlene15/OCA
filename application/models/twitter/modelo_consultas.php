<?php
	class Modelo_consultas extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function ExisteFecha($fecha)
		{
			$usuarios_fechas = $this->db->query("SELECT usuario From cuentas WHERE fecha = '$fecha'");
			if($usuarios_fechas->num_rows()>0)
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}
		#Diputados federales
		//Obtiene los datos de la cuenta de jose_manuel
		public function obtener_cuenta_dip_federales1($fecha)
		{
			$jose = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'soygp'");
			$kike = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'kikerojas007'");
			$indira = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
										where fecha = '$fecha'  and usuario = 'indira_vizcaino'");
		
			if($jose->num_rows()>0 and $kike->num_rows()>0 and $indira->num_rows()>0)
			{
				$jose = $jose->row();
				$kike = $kike->row();
				$indira = $indira->row();
				$a = array(
	                "jose" => $jose,
	                "kike" => $kike,
	                "indira" => $indira
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}
		public function obtener_cuenta_dip_federales2($fecha)
		{
			$norma = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'NormaGdeV'");
			$juan = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'olave_nery'");
		
			if($norma->num_rows()>0 and $juan->num_rows()>0)
			{
				$norma = $norma->row();
				$juan = $juan->row();
				$a = array(
	                "norma" => $norma,
	                "juan" => $juan
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}
	}

?>