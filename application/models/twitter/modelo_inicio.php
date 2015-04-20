<?php
	class Modelo_inicio extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}
		//Obtiene los datos de la cuenta de nacho
		public function obtener_cuenta_nacho()
		{
			$nacho = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'nachoperaltacol'");
		
			if($nacho->num_rows()>0)
			{
				return $nacho->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de jorge
		public function obtener_cuenta_jorge()
		{
			$jorge = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JL_Preciado_'");
		
			if($jorge->num_rows()>0)
			{
				return $jorge->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}		
		//Obtiene los datos de la cuenta de locho
		public function obtener_cuenta_locho()
		{
			$locho = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'leonciomoranL8'");
		
			if($locho->num_rows()>0)
			{
				return $locho->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de martha
		public function obtener_cuenta_martha()
		{
			$martha = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MarthaZepeda_'");
		
			if($martha->num_rows()>0)
			{
				return $martha->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}

		#Diputados federales
		//Obtiene los datos de la cuenta de jose_manuel
		public function obtener_cuenta_jose_manuel()
		{
			$jose = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'soygp'");
		
			if($jose->num_rows()>0)
			{
				return $jose->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de kike
		public function obtener_cuenta_kike()
		{
			$kike = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'kikerojas007'");
		
			if($kike->num_rows()>0)
			{
				return $kike->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de indira
		public function obtener_cuenta_indira()
		{
			$indira = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'indira_vizcaino'");
		
			if($indira->num_rows()>0)
			{
				return $indira->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de norma
		public function obtener_cuenta_norma()
		{
			$norma = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'NormaGdeV'");
		
			if($norma->num_rows()>0)
			{
				return $norma->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de juan
		public function obtener_cuenta_juan()
		{
			$juan = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'olave_nery'");
		
			if($juan->num_rows()>0)
			{
				return $juan->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//ALCALDIAS
		//Obtiene los datos de la cuenta de hector
		public function obtener_cuenta_hector()
		{
			$hector = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'hectorinsua'");
		
			if($hector->num_rows()>0)
			{
				return $hector->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de maria
		public function obtener_cuenta_maria()
		{
			$maria = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'meabaroa'");
		
			if($maria->num_rows()>0)
			{
				return $maria->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de esmeralda
		public function obtener_cuenta_esmeralda()
		{
			$esmeralda = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Esmeralda__CS'");
		
			if($esmeralda->num_rows()>0)
			{
				return $esmeralda->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de pico
		public function obtener_cuenta_pico()
		{
			$pico = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'PicoZepeda'");
		
			if($pico->num_rows()>0)
			{
				return $pico->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de marcos
		public function obtener_cuenta_marcos()
		{
			$marcos = $this->db->query("select max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'BarajasYescas'");
		
			if($marcos->num_rows()>0)
			{
				return $marcos->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtener comentarios positivos nacho
		public function positivos_nacho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')"
										);
		
			if($positivos->num_rows()>0)
			{
				return $positivos->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtener comentarios negativos nacho
		public function negativos_nacho()
		{
			$negativos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')"
										);
		
			if($negativos->num_rows()>0)
			{
				return $negativos->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtener comentarios neutros nacho
		public function neutros_nacho()
		{
			$neutros = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')"
										);
		
			if($neutros->num_rows()>0)
			{
				return $neutros->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}

		//Prueba de la conexión
		public function prueba()
		{
			$consulta = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')"
										);
		
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
?>