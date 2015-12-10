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

		public function ExisteFecha2($fecha)
		{
			$usuarios_fechas = $this->db->query("SELECT Partido From partido WHERE fecha = '$fecha'");
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
			$Hildaceballos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Hilda Ceballos Llerenas'");
			$Josecardenas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Cárdenas Sánchez'");
			//$Leonardogutierrez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
			//						  where fecha = '$fecha' and Nombre = 'Leonardo Cesar Gutiérrez Chávez'");

			$nicolascontreras = $this->db->query("SELECT  Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Nicolás Contreras Cortés'");
			$guillermorangel = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Guillermo Rángel Lozano'");
			$SandraRammirez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sandra Viviana Ramírez Anguiano'");
			$joseGarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Luis García Solache'");
			$arturogarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Arturo García Arias'");
			//$lilianarodriguez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
			//						  where fecha = '$fecha' and Nombre = 'Liliana Rodríguez Vejar'");
			
			$crispinguerra = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Crispin Guerra Cardenas'");
			$almaarreola = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alma Delia Arreola Cruz'");
			$marthafarias = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Martha Elia Farias Rios'");
			$isisvillasernor = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Isis Baudella Guadalupe Villasenor Silva'");
			$octavioaguilar = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Octavio Aguilar Montano'");
			$patriciaperegrina = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Patricia Ines Peregrina Larios'");
			//$gloriaarceo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
			//						  where fecha = '$fecha' and Nombre = 'Gloria Arceo Chavez'");
			
			$janethpaz = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Janeth Paz Ponce'");
			$juanaandres = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Juana Andres Rivera'");
			$sergioricardo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Ricardo Ruiz'");
			//$andresorozco = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
			//						  where fecha = '$fecha' and Nombre = 'Andres Fernando Orozco Soto'");

			$ramirotoscano = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ramiro Toscano Sánchez'");
			$josebenavides = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Jose Guadalupe Benavides Florian'");
			$yulianaaguilar = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Yuliana Lizzet Aguilar Mora'");
			
			$SandrayolandaRammirez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sandra Ramirez'");
			$octaviotintos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Octavio Tintos'");
			$sergiosilva = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Silva'");
			$leticiamendoza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Leticia Mendoza'");
			$getzemaniibarra = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Getsemani Ibarra'");
			
			$franciscoceballo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Francisco Javier Ceballos Galindo'");
			$alfredohernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alfredo Hernández Ramos'");
			$saracernas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sara Elizabeth Cernas Verduzco'");
			$jooelpadilla = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Joel Padilla Pena'");
			$socorrobayardo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Socorro Bayardo Gaitan'");
			$erendiraandrade = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Erendira Noemi Andrade Ochoa'");
			//FALTA DESCARGAR DE AQUI
			//DISTRITO VIII
			$meylypastora = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Meyly Pastora Beltran rolon'");
			$hectormagana = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Hector Magana Lara'");
			$alfredoherrera = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alfredo Cuauhtemoc Herrera Diaz'");
			$adelaidafernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Adelaida Fernandez Ramos'");
			$juanjuarez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Juan Francisco Juarez Rodriguez'");
			//DISTRITO IX
			$eusebiomesina = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Eusebio Mesina Reyes'");
			$beatrizinsunza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Beatriz Guadalupe Isunza Burciaga'");
			$selenelopez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Selene Margarita Lopez'");
			$angelicaochoa = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ma Angelica Ochoa Munoz'");
			$mauriciobarreto = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Mauricio Barreto Peralta'");
			//DISTRITO X
			$juanpinto = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Juan Carlos Pinto Rodriguez'");
			$ricardosevilla = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ricardo Sevilla Cardenas'");
			$raquelcardenas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Raquel Cardenas Corona'");
			$marcorodarte = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Marco Antonio Rodarte Quintana'");
			$salvadorjuarez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Salvador Juarez Figueroa'");
			//DISTRITO XI
			$miguelgarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Miguel Alejandro Garcia'");
			$armidanunes = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Armida Nunez Garcia'");
			$aldovega = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Aldo Leonardo Vega Petriz'");
			$sebastianesparza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sebastian Esparza Hernandez'");
			$teresahernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Teresa Hernandez Ortiz'");
			$dianatopete = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Diana Monserrat Topete Vargas'");
			//DISTRITO XII
			$marthasosa = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Martha Leticia Sosa'");
			$rosarioyeme = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Rosario Yeme Lopez'");
			$noraayala = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Nora Mireya Ayala Ochoa'");
			$sarahinoriega = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Iveth Sarahi Noriega Mondragon'");
			//DISTRITO XIII
			$sergiosanchez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Sanchez Ochoa'");
			$carlosvilla = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Carlos Ivan Villa Gonzalez'");
			//DISTRITO XIV
			$luisayala = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Luis Ayala Campos'");
			$lilafigueroa = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Lilia Figueroa Larios'");
			$marthameza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Martha Alicia Meza Obregon'");
			$veronicatorres = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Veronica Torres Rolon'");
			$gustavorerenteria = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Gustavo Renteria Gonzalez'");
			$josefinaroblada = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Josefina Roblada Lara'");
			$eliasnunez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Elias Octavio Nunez Campos'");
			//DISTRITO XV
			$felicitaspena = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Felícitas Pena Cisneros'");
			$hildamoreno = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Hilda Moreno Diaz'");
			$almarincon = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alma Elvira Rincon Rodriguez'");
			//DISTRITO XVI
			$santiagochavez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Santiago chavez Chavez'");
			$judithgodinez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Judith Godinez Cabrera'");
			$sergiomendoza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Mendoza Lomeli'");
			$angelesrodriguez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ma de Los angeles Rodriguez Silva'");
			

			$a = array(
	            	"Hildaceballos" => $Hildaceballos->row(),
	              	"Josecardenas" => $Josecardenas->row(),
	              	// "Leonardogutierrez" => $Leonardogutierrez->row(),
	              	
	              	"nicolascontreras" => $nicolascontreras->row(),
	              	"guillermorangel" => $guillermorangel->row(),
	              	"SandraRammirez" => $SandraRammirez->row(),
	              	"joseGarcia" => $joseGarcia->row(),
	              	"arturogarcia" => $arturogarcia->row(),
	              	// "lilianarodriguez" => $lilianarodriguez->row(),

	              	"crispinguerra" => $crispinguerra->row(),
	              	"almaarreola" => $almaarreola->row(),
	              	"marthafarias" => $marthafarias->row(),
	              	"isisvillasernor" => $isisvillasernor->row(),
	              	"octavioaguilar" => $octavioaguilar->row(),
	              	"patriciaperegrina" => $patriciaperegrina->row(),
	              	// "gloriaarceo" => $gloriaarceo->row(),

	              	"janethpaz" => $janethpaz->row(),
	              	"juanaandres" => $juanaandres->row(),
	              	"sergioricardo" => $sergioricardo->row(),
	              	// "andresorozco" => $andresorozco->row(),

	              	"ramirotoscano" => $ramirotoscano->row(),
	              	"josebenavides" => $josebenavides->row(),
	              	// "yulianaaguilar" => $yulianaaguilar,

	              	"SandrayolandaRammirez" => $SandrayolandaRammirez->row(),
	              	"octaviotintos" => $octaviotintos->row(),
	              	"sergiosilva" => $sergiosilva->row(),
	              	"leticiamendoza" => $leticiamendoza->row(),
	              	// "getzemaniibarra" => $getzemaniibarra,

	              	"franciscoceballo" => $franciscoceballo->row(),
	              	"alfredohernandez" => $alfredohernandez->row(),
	              	"saracernas" => $saracernas->row(),
	              	"jooelpadilla" => $jooelpadilla->row(),
	              	"socorrobayardo" => $socorrobayardo->row(),
	              	// "erendiraandrade" => $erendiraandrade->row(),

	              	"meylypastora" => $meylypastora->row(),
	              	"hectormagana" => $hectormagana->row(),
	              	"alfredoherrera" => $alfredoherrera->row(),
	              	"adelaidafernandez" => $adelaidafernandez->row(),
	              	// "juanjuarez" => $juanjuarez->row(),

	              	"eusebiomesina" => $eusebiomesina->row(),
	              	"beatrizinsunza" => $beatrizinsunza->row(),
	              	"selenelopez" => $selenelopez->row(),
	              	"angelicaochoa" => $angelicaochoa->row(),
	              	// "mauriciobarreto" => $mauriciobarreto->row(),

	              	"juanpinto" => $juanpinto->row(),
	              	"ricardosevilla" => $ricardosevilla->row(),
	              	"raquelcardenas" => $raquelcardenas->row(),
	              	"marcorodarte" => $marcorodarte->row(),
	              	// "salvadorjuarez" => $salvadorjuarez->row(),

	              	"miguelgarcia" => $miguelgarcia->row(),
	              	"armidanunes" => $armidanunes->row(),
	              	"aldovega" => $aldovega->row(),
	              	"sebastianesparza" => $sebastianesparza->row(),
	              	"teresahernandez" => $teresahernandez->row(),
	              	// "dianatopete" => $dianatopete->row(),

	              	"marthasosa" => $marthasosa->row(),
	              	"rosarioyeme" => $rosarioyeme->row(),
	              	"noraayala" => $noraayala->row(),
	              	// "sarahinoriega" => $sarahinoriega->row(),

	              	"sergiosanchez" => $sergiosanchez,
	              	// "carlosvilla" => $carlosvilla->row(),

	              	"luisayala" => $luisayala->row(),
	              	"lilafigueroa" => $lilafigueroa->row(),
	              	"marthameza" => $marthameza->row(),
	              	"veronicatorres" => $veronicatorres->row(),
	              	"gustavorerenteria" => $gustavorerenteria->row(),
	              	"josefinaroblada" => $josefinaroblada->row(),
	              	// "eliasnunez" => $eliasnunez->row(),

	              	"felicitaspena" => $felicitaspena->row(),
	              	"hildamoreno" => $hildamoreno->row(),
	              	// "almarincon" => $almarincon->row(),
	              	
	               	"santiagochavez" => $santiagochavez->row(),
	              	"judithgodinez" => $judithgodinez->row(),
	              	"sergiomendoza" => $sergiomendoza->row()
	              	// "angelesrodriguez" => $angelesrodriguez->row()
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
			$pri = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRI' ORDER BY fecha ASC");
			$pan = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PAN' ORDER BY fecha ASC");
			$pna = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PNA' ORDER BY fecha ASC");
			$pv = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PV' ORDER BY fecha ASC");
			$prd = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRD' ORDER BY fecha ASC");
			$pt = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PT' ORDER BY fecha ASC");
			$pmc = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'MC' ORDER BY fecha ASC");
			$pm = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PM' ORDER BY fecha ASC");
			$pes = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PES' ORDER BY fecha ASC");
			$ph = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PH' ORDER BY fecha ASC");
			
			if($pri->num_rows()>0)
			{
				$a = array(
	                "pri" => $pri->result(),
	                "pan" => $pan->result(),
	                "pna" => $pna->result(),
	                "pv" => $pv->result(),
	                "prd" => $prd->result(),
	                "pt" => $pt->result(),
	                "pmc" => $pmc->result(),
	                "pm" => $pm->result(),
	                "pes" => $pes->result(),
	                "ph" => $ph->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}
		public function obtener_cuenta_partidos_rango($fecha_inicio,$fecha_fin)
		{
			$pri = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRI' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$pan = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PAN' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pna = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PNA' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pv = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PV' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$prd = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRD' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pt = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PT' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pmc = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'MC' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pm = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PM' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pes = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PES' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$ph = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PH' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
		
			$a = array(
                "pri" => $pri->result(),
                "pan" => $pan->result(),
                "pna" => $pna->result(),
                "pv" => $pv->result(),
                "prd" => $prd->result(),
                "pt" => $pt->result(),
                "pmc" => $pmc->result(),
                "pm" => $pm->result(),
                "pes" => $pes->result(),
                "ph" => $ph->result()
            );
            return $a;
		}

		public function obtener_cuenta_comoVamos_rango($fecha_inicio,$fecha_fin)
		{
			$comoVamos2 = $this->db->query("SELECT Megusta, PersonasHablan, Fecha from partido 
									  where Partido='Como Vamos Colima' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$a = array(
                "comoVamos2" => $comoVamos2->result()
            );
            return $a;
		}

		public function obtener_cuenta_rumboal7dejunio_rango($fecha_inicio,$fecha_fin)
		{
			$rumbo = $this->db->query("SELECT Megusta, PersonasHablan, Fecha from partido 
									  where Partido = 'Rumbo al 7 de junio' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$a2 = array(
                "rumbo" => $rumbo->result()
            );
            return $a2;
		}
	}

?>