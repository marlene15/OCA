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
			$nacho = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$jorge = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$locho = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$martha = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$jose = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$kike = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$indira = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$norma = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$juan = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
		//PRESIDENTES MUNICIPALES
		//Obtiene los datos de la cuenta de hector
		public function obtener_cuenta_hector()
		{
			$hector = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$maria = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$esmeralda = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'EsmePresidenta'");
		
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
			$pico = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
			$marcos = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
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
		
		//Obtiene los datos de la cuenta Yulenny_Cortes
		public function obtener_cuenta_yulenny()
		{
			$yulenny = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Yulenny_Cortes'");
		
			if($yulenny->num_rows()>0)
			{
				return $yulenny->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta OswyDelgado
		public function obtener_cuenta_oswy()
		{
			$oswy = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'OswyDelgado'");
		
			if($oswy->num_rows()>0)
			{
				return $oswy->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta salo_salazar1
		public function obtener_cuenta_salomon()
		{
			$salomon = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'salo_salazar1'");
		
			if($salomon->num_rows()>0)
			{
				return $salomon->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta MarioCarrillo01
		public function obtener_cuenta_mario()
		{
			$mario = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MarioCarrillo01'");
		
			if($mario->num_rows()>0)
			{
				return $mario->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta DipArturoGarcia
		public function obtener_cuenta_arturo()
		{
			$arturo = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'DipArturoGarcia'");
		
			if($arturo->num_rows()>0)
			{
				return $arturo->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta BlancaPRI2015
		public function obtener_cuenta_blanca()
		{
			$blanca = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'BlancaPRI2015'");
		
			if($blanca->num_rows()>0)
			{
				return $blanca->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta DipManuelPR
		public function obtener_cuenta_manuel()
		{
			$manuel = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'DipManuelPR'");
		
			if($manuel->num_rows()>0)
			{
				return $manuel->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta DipEsperanzaA
		public function obtener_cuenta_esperanza()
		{
			$esperanza = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'DipEsperanzaA'");
		
			if($esperanza->num_rows()>0)
			{
				return $esperanza->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta hiram1447
		public function obtener_cuenta_hiram()
		{
			$hiram = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'hiram1447'");
		
			if($hiram->num_rows()>0)
			{
				return $hiram->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}


		//DIPUTADOS LOCALES
		//Obtener cuenta de HildaCeballos01
		public function obtener_cuenta_hilda()
		{
			$hilda = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'HildaCeballos01'");
		
			if($hilda->num_rows()>0)
			{
				return $hilda->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtener cuenta de Rangel_G_
		public function obtener_cuenta_rangel()
		{
			$rangel = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Rangel_G_'");
		
			if($rangel->num_rows()>0)
			{
				return $rangel->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Vivi_Ram_A
		public function obtener_cuenta_viviana()
		{
			$viviana = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Vivi_Ram_A'");
		
			if($viviana->num_rows()>0)
			{
				return $viviana->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de crispindiputado 
		public function obtener_cuenta_crispin()
		{
			$crispin = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'crispindiputado'");
		
			if($crispin->num_rows()>0)
			{
				return $crispin->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de isisvillasil
		public function obtener_cuenta_isis()
		{
			$isis = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'isisvillasil'");
		
			if($isis->num_rows()>0)
			{
				return $isis->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JanethPazPonce
		public function obtener_cuenta_janeth()
		{
			$janeth = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JanethPazPonce'");
		
			if($janeth->num_rows()>0)
			{
				return $janeth->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JuanitaAndres
		public function obtener_cuenta_juanita()
		{
			$juanita = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JuanitaAndres'");
		
			if($juanita->num_rows()>0)
			{
				return $juanita->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de LupeBenavidesF
		public function obtener_cuenta_lupe()
		{
			$lupe = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'LupeBenavidesF'");
		
			if($lupe->num_rows()>0)
			{
				return $lupe->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de octaviotintos
		public function obtener_cuenta_octavio()
		{
			$octavio = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'octaviotintos'");
		
			if($octavio->num_rows()>0)
			{
				return $octavio->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de saracernas
		public function obtener_cuenta_sara()
		{
			$sara = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'saracernas'");
		
			if($sara->num_rows()>0)
			{
				return $sara->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JoelPadilla2012
		public function obtener_cuenta_joel()
		{
			$joel = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JoelPadilla2012'");
		
			if($joel->num_rows()>0)
			{
				return $joel->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de MeylyPastora
		public function obtener_cuenta_meyly()
		{
			$meyly = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MeylyPastora'");
		
			if($meyly->num_rows()>0)
			{
				return $meyly->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de hectormlara
		public function obtener_cuenta_hectorM()
		{
			$hector = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'hectormlara'");
		
			if($hector->num_rows()>0)
			{
				return $hector->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de eusebiomesina
		public function obtener_cuenta_eusebio()
		{
			$eusebio = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'eusebiomesina'");
		
			if($eusebio->num_rows()>0)
			{
				return $eusebio->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de MesinaTena
		public function obtener_cuenta_mesina()
		{
			$mesina = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MesinaTena'");
		
			if($mesina->num_rows()>0)
			{
				return $mesina->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de PintoRgz
		public function obtener_cuenta_pinto()
		{
			$pinto = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'PintoRgz'");
		
			if($pinto->num_rows()>0)
			{
				return $pinto->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Armida_NG
		public function obtener_cuenta_armida()
		{
			$armida = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Armida_NG'");
		
			if($armida->num_rows()>0)
			{
				return $armida->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de amary_landa
		public function obtener_cuenta_amary()
		{
			$amary = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'amary_landa'");
		
			if($amary->num_rows()>0)
			{
				return $amary->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Sergio_SanchezO
		public function obtener_cuenta_sergio()
		{
			$sergio = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Sergio_SanchezO'");
		
			if($sergio->num_rows()>0)
			{
				return $sergio->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Martha_Meza_ 
		public function obtener_cuenta_marthaM()
		{
			$martha = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Martha_Meza_'");
		
			if($martha->num_rows()>0)
			{
				return $martha->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de marserranos
		public function obtener_cuenta_felicitas()
		{
			$felicitas = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'marserranos'");
		
			if($felicitas->num_rows()>0)
			{
				return $felicitas->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de SantiagoCh2Tec
		public function obtener_cuenta_santiago()
		{
			$santiago = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'SantiagoCh2Tec'");
		
			if($santiago->num_rows()>0)
			{
				return $santiago->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener valoracion de comentarios de nacho
		public function valoracion_nacho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}

		//Obtener valoracion de comentarios de Jorge Luis
		public function valoracion_jorge()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%JL_Preciado_%' or texto LIKE '%DesdeAbajoConTrabajo%' 
										  or texto LIKE '%ClaroQuePodemos%' or texto LIKE '%AlegrateYaSeVan%'
										  or texto LIKE '%JorgeLuis %' or texto LIKE '%YaSeVan%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%JL_Preciado_%' or texto LIKE '%DesdeAbajoConTrabajo%' 
										  or texto LIKE '%ClaroQuePodemos%' or texto LIKE '%AlegrateYaSeVan%'
										  or texto LIKE '%JorgeLuis %' or texto LIKE '%YaSeVan%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%JL_Preciado_%' or texto LIKE '%DesdeAbajoConTrabajo%' 
										  or texto LIKE '%ClaroQuePodemos%' or texto LIKE '%AlegrateYaSeVan%'
										  or texto LIKE '%JorgeLuis %' or texto LIKE '%YaSeVan%')"  
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();			
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
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

		//Obtener coordenadas de Colima que hablan sobre nacho
		public function obtener_coordenadasC()
		{
			$resultado=$this->db->query("SELECT DISTINCT latitud,longitud,municipio from coordenadas 
										inner join twitt on twitt.id=coordenadas.id_twitt
										where twitt.municipio='Colima' and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')");
			if($resultado->num_rows()>0)
			{
				return $resultado->result();
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener coordenadas de Villa de álvarez que hablan sobre nacho
		public function obtener_coordenadasV()
		{
			$resultado=$this->db->query("SELECT DISTINCT latitud,longitud,municipio from coordenadas 
										inner join twitt on twitt.id=coordenadas.id_twitt
										where twitt.municipio='Villa de Álvarez' and 
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%jips%' 
										  or texto LIKE '%JoveNachos%' or texto LIKE '%JuntosNadieNosPara%')");
			if($resultado->num_rows()>0)
			{
				return $resultado->result();
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener hashtags Gobernadores
		public function obtener_hashtags_gobernadores()
		{
			$hashtags=$this->db->query("SELECT hashtags FROM `twitt` WHERE (hashtags LIKE '%nachoperaltacol%' or hashtags 
										LIKE '%jips%' or hashtags LIKE '%JuntosNadieNosPara%' or hashtags LIKE '%JIPS2015%' 
										or hashtags LIKE '%MiSelfiecoNacho%'or hashtags LIKE '%DesdeAbajoConTrabajo%' 
										or hashtags LIKE '%ClaroQuePodemos %' or hashtags LIKE '%JorgeLuis%' or hashtags 
										LIKE '%AlegrateYaSeVan%' or hashtags LIKE '%YaSeVan%' or hashtags LIKE '%JL_Preciado_%' 
										or hashtags LIKE '%HagámosloNosotros%' or hashtags LIKE '%TúTienesElPodio%' or hashtags 
										LIKE '%EncuentroSocial%' or hashtags LIKE '%PartidoEncuentroSocial%' or hashtags 
										LIKE '%PASALAVOZ%' or hashtags LIKE '%SoyHumanista%' or hashtags LIKE '%PartidoHumanista%' 
										or hashtags LIKE '%UnidadHumanista%' or hashtags LIKE '%Humanista%' or hashtags LIKE 
										'%TodosConL8cho%' or hashtags LIKE '%CambiarLaHistoria%' or hashtags LIKE '%MovimientoCiudadano%' 
										or hashtags LIKE '%leonciomoranL8%'or hashtags LIKE '%PRDcolima%' or hashtags LIKE 
										'%PRD%'or texto LIKE '%ComoTú%'or hashtags LIKE '%SomosPRD%'or hashtags LIKE '%SabemosGobernar%' 
										or hashtags LIKE '%NuevaIzquierda%'or hashtags LIKE '%MarthaZepeda_%') and hashtags <>''");
			if($hashtags->num_rows()>0)
			{
				return $hashtags->result();
			}
			else
			{
				return FALSE;
			}
		}

		//CUENTAS NACHO
		//Obtener cuenta de PRI_Colima
		public function obtener_cuenta_priColima()
		{
			$priColima = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'PRI_Colima'");
		
			if($priColima->num_rows()>0)
			{
				return $priColima->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JIPS2015
		public function obtener_cuenta_jips2015()
		{
			$jips2015 = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JIPS2015'");
		
			if($jips2015->num_rows()>0)
			{
				return $jips2015->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JIPSColima
		public function obtener_cuenta_jipsColima()
		{
			$jipsColima = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JIPSColima'");
		
			if($jipsColima->num_rows()>0)
			{
				return $jipsColima->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de jipsvdea
		public function obtener_cuenta_jipsVilla()
		{
			$jipsVilla = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'jipsvdea'");
		
			if($jipsVilla->num_rows()>0)
			{
				return $jipsVilla->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de MiSelfiecoNacho
		public function obtener_cuenta_selfieNacho()
		{
			$selfieNacho = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MiSelfiecoNacho'");
		
			if($selfieNacho->num_rows()>0)
			{
				return $selfieNacho->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener cuenta de Comovamoscolima
		public function obtener_cuenta_comoVamos()
		{
			$comoVamos = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Comovamoscolima'");
		
			if($comoVamos->num_rows()>0)
			{
				return $comoVamos->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}

	}
?>