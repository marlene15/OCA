<?php
	class Modelo_consultas extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function ExisteFecha($fecha)
		{
			$usuarios_fechas = $this->db->query("SELECT Nombre From candidatos WHERE fecha = '$fecha'");
			if($usuarios_fechas->num_rows()>0)
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}
		#Gobernadores
		public function obtener_cuenta_gobernadores($fecha)
		{
			$nacho = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Ignacio Peralta Sánchez'");
			$jorge = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Jorge Luis Preciado Rodríguez'");
			$locho = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Leoncio Morán Sánchez'");
			$martha = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Martha Zepeda del Toro'");
			$david = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'David Munro González'");
			$francisco = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Francisco Gallardo Rodríguez'");
			$gerardo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Gerardo Galván Pinto'");
			$carlos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Carlos Barbazán Martínez'");

			if($nacho->num_rows()>0 and $jorge->num_rows()>0 and $locho->num_rows()>0 and $martha->num_rows()>0 and $david->num_rows()>0 and $francisco->num_rows()>0 and $gerardo->num_rows()>0 and $carlos->num_rows()>0)
			{
				$nacho = $nacho->row();
				$jorge = $jorge->row();
				$locho = $locho->row();
				$martha = $martha->row();
				$david = $david->row();
				$francisco = $francisco->row();
				$gerardo = $gerardo->row();
				$carlos = $carlos->row();
				$a = array(
	                "nacho" => $nacho,
	                "jorge" => $jorge,
	                "locho" => $locho,
	                "martha" => $martha,
	                "david" => $david,
					"francisco" => $francisco,
					"gerardo" => $gerardo,
					"carlos" => $carlos
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		#Diputados federales
		public function obtener_cuenta_dip_federales1($fecha)
		{
		//Distrito I
		$josemanuel = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'José Manuel Moreno González'");
		$enriquerojas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Enrique Rojas Orozco'");
		$indiravizcaino = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Indira Vizcaíno Silva'");
		$silviadias = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Silvia Elena Díaz Márquez'");
		$angelesmarquez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Ángeles Márquez Gileta'");
		$rosalinagarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Rosalina García Torres'");
		$claudiaibarra = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Claudia Jasmín Ibarra Ávalos'");

			if($josemanuel->num_rows()>0 and $enriquerojas->num_rows()>0 and $indiravizcaino->num_rows()>0 and $silviadias->num_rows()>0 and $angelesmarquez->num_rows()>0 and $rosalinagarcia->num_rows()>0 and $claudiaibarra->num_rows()>0)
			{
				$josemanuel = $josemanuel->row();
				$enriquerojas = $enriquerojas->row();
				$indiravizcaino = $indiravizcaino->row();
				$silviadias = $silviadias->row();
				$angelesmarquez = $angelesmarquez->row();
				$rosalinagarcia = $rosalinagarcia->row();
				$claudiaibarra = $claudiaibarra->row();																
				$a = array(
	                "josemanuel" => $josemanuel,
	                "enriquerojas" => $enriquerojas,
	                "indiravizcaino" => $indiravizcaino,
	                "silviadias" => $silviadias,
	                "angelesmarquez" => $angelesmarquez,
	                "rosalinagarcia" => $rosalinagarcia,
	                "claudiaibarra" => $claudiaibarra	                	                	                	                
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
			//Distrito II
			$normagalindo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Norma Galindo Matías'");
			$pedrofernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Pedro Fernández Rodríguez'");
			$eliasvalencia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Elías Eduardo Valencia Cervantes'");
			$juancarlos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Juan Carlos Olave'");
			$marisamesina = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Marisa Mesina Polanco'");

		
			if($normagalindo->num_rows()>0 and $pedrofernandez->num_rows()>0 and $eliasvalencia->num_rows()>0 and $juancarlos->num_rows()>0 and $marisamesina->num_rows()>0)
			{
				//Distrito II
				$normagalindo = $normagalindo->row();
				$pedrofernandez = $pedrofernandez->row();
				$eliasvalencia = $eliasvalencia->row();
				$juancarlos = $juancarlos->row();
				$marisamesina = $marisamesina->row();

				$a = array(
	                "normagalindo" => $normagalindo,
					"pedrofernandez" => $pedrofernandez,
					"eliasvalencia" => $eliasvalencia,
					"juancarlos" => $juancarlos,
					"marisamesina" => $marisamesina
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		public function obtener_cuenta_dip_locales($fecha)
		{
			$hilda = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'HildaCeballos01'");						
			$rangel = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Rangel_G_'");
			$viviana = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Vivi_Ram_A'");
			$crispin = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'crispindiputado'");
			$isis = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'IsisColimaVerde'");
			$janeth = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'JanethPazPonce'");
			$juanita = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'JuanitaAndres'");
			$lupe = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'LupeBenavidesF'");
			$octavio = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'octaviotintos'");
			$sara = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'saracernas'");
			$joel = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'JoelPadilla2012'");
			$meyly = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'MeylyPastora'");
			$hector = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'hectormlara'");
			$eusebio = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'eusebiomesina'");
			$mesina = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'MesinaTena'");
			$pinto = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'PintoRgz'");
			$armida = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Armida_NG'");
			$amary = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'amary_landa'");
			$sergio = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Sergio_SanchezO'");
			$martha = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Martha_Meza_'");
			$felicitas = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Fdiputada'");
			$santiago = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'SantiagoCh2Tec'");
			$yadira = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'yadiraturquesa'");
			$alma = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'AlmaDelia_D3'");
			$marthaS = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'martha_sosa1'");

			if ($isis->num_rows()>0){
				$isis=$isis->row();
			}
			else{
				$isis='FALSO';
			}

			if ($felicitas->num_rows()>0){
				$felicitas=$felicitas->row();
			}
			else{
				$felicitas='FALSO';
			}

			if ($yadira->num_rows()>0){
				$yadira=$yadira->row();
			}
			else{
				$yadira='FALSO';
			}

			if ($alma->num_rows()>0){
				$alma=$alma->row();
			}
			else{
				$alma='FALSO';
			}

			if ($marthaS->num_rows()>0){
				$marthaS=$marthaS->row();
			}
			else{
				$marthaS='FALSO';
			}
			
			$a = array(
	            	"hilda" => $hilda->row(),
	              	"rangel" => $rangel->row(),
	              	"viviana" => $viviana->row(),
	              	"crispin" => $crispin->row(),
	              	"isis" => $isis,
	              	"janeth" => $janeth->row(),
	              	"juanita" => $juanita->row(),
	              	"lupe" => $lupe->row(),
	              	"octavio" => $octavio->row(),
	              	"sara" => $sara->row(),
	              	"joel" => $joel->row(),
	              	"meyly" => $meyly->row(),
	              	"hector" => $hector->row(),
	              	"eusebio" => $eusebio->row(),
	              	"mesina" => $mesina->row(),
	              	"pinto" => $pinto->row(),
	              	"armida" => $armida->row(),
	              	"amary" => $amary->row(),
	              	"sergio" => $sergio->row(),
	              	"martha" => $martha->row(),
	              	"felicitas" => $felicitas,
	              	"santiago" => $santiago->row(),
	              	"yadira" => $yadira,
	              	"alma" => $alma,
	              	"marthaS" => $marthaS
	         	);
	        return $a;			
		}

		public function obtener_cuenta_alcaldias($fecha)
		{
			$hector = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'hectorinsua'");
			$maria = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'meabaroa'");
			$esmeralda = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'EsmePresidenta'");
			$pico = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'PicoZepeda'");
			$marcos = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'BarajasYescas'");
			$yulenny = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Yulenny_Cortes'");
			$oswy = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'OswyDelgado'");
			$salomon = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'salo_salazar1'");
			$mario = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'MarioCarrillo01'");
			$arturo = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'DipArturoGarcia'");
			$blanca = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'BlancaPRI2015'");
			$manuel = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'DipManuelPR'");
			$esperanza = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'DipEsperanzaA'");
			$hiram = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'hiram1447'");
			#NUEVOS
			$oscar = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'OVPresidente'");
			$jaime = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'JaimeSoteloG'");
			$ruben = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'romo_ochoa'");
			$blancaU = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'UrsuaBlanca'");
			if ($oscar->num_rows()>0){
				$oscar=$oscar->row();
			}
			else{
				$oscar='FALSO';
			}

			if ($jaime->num_rows()>0){
				$jaime=$jaime->row();
			}
			else{
				$jaime='FALSO';
			}

			if ($ruben->num_rows()>0){
				$ruben=$ruben->row();
			}
			else{
				$ruben='FALSO';
			}

			if ($blancaU->num_rows()>0){
				$blancaU=$blancaU->row();
			}
			else{
				$blancaU='FALSO';
			}

			$a = array(
	            "hector" => $hector->row(),
	            "maria" => $maria->row(),
	            "esmeralda" => $esmeralda->row(),
	            "pico" => $pico->row(),
	            "marcos" => $marcos->row(),
	            "yulenny" => $yulenny->row(),
	            "oswy" => $oswy->row(),
	            "salomon" => $salomon->row(),
	            "mario" => $mario->row(),
	            "arturo" => $arturo->row(),
	            "blanca" => $blanca->row(),
	            "manuel" => $manuel->row(),
	            "esperanza" => $esperanza->row(),
	            "hiram" => $hiram->row(),
	            "oscar" => $oscar,
	            "jaime" => $jaime,
	            "ruben" => $ruben,
	            "blancaU" => $blancaU
	        );
	        return $a;		
		}

		public function obtener_cuenta_partidos()
		{
			$pri = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'PRI_Colima' ORDER BY fecha ASC");
			$jips_2015 = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'JIPS2015' ORDER BY fecha ASC");
			$JIPSColima = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'JIPSColima' ORDER BY fecha ASC");
			$jipsvdea = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'jipsvdea' ORDER BY fecha ASC");
			$MiSelfiecoNacho = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'MiSelfiecoNacho' ORDER BY fecha ASC");
			$PANDColima = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'PANDColima' ORDER BY fecha ASC");
			$cdepancolima = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'cdepancolima' ORDER BY fecha ASC");
			$PRDcolima = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'PRDcolima' ORDER BY fecha ASC");
			$MovCiudadanoCol = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'MovCiudadanoCol' ORDER BY fecha ASC");
			$ColPartidoVerde = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'ColPartidoVerde' ORDER BY fecha ASC");
			$PT_Colima = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'PT_Colima' ORDER BY fecha ASC");
			$MorenaColima1 = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'MorenaColima1' ORDER BY fecha ASC");
			

			if($pri->num_rows()>0)
			{
				$a = array(
	                "pri" => $pri->result(),
	                "jips_2015" => $jips_2015->result(),
	                "JIPSColima" => $JIPSColima->result(),
	                "jipsvdea" => $jipsvdea->result(),
	                "MiSelfiecoNacho" => $MiSelfiecoNacho->result(),
	                "PANDColima" => $PANDColima->result(),
	                "cdepancolima" => $cdepancolima->result(),
	                "PRDcolima" => $PRDcolima->result(),
	                "MovCiudadanoCol" => $MovCiudadanoCol->result(),
	                "ColPartidoVerde" => $ColPartidoVerde->result(),
	                "PT_Colima" => $PT_Colima->result(),
	                "MorenaColima1" => $MorenaColima1->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		public function obtener_cuenta_comoVamos()
		{
			$comoVamos = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'Comovamoscolima' ORDER BY fecha ASC");			

			if($comoVamos->num_rows()>0)
			{
				$a = array(
	                "comoVamos" => $comoVamos->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		public function menciones_gobernadores()
		{
			$nacho = $this->db->query("SELECT fecha,count(*) as cantidad FROM twitt 
									WHERE menciones LIKE '%nachoperaltacol%' group by fecha");
			$a = array(
	            "nacho" => $nacho->result()
	        );
	        return $a;
		}
	}

?>