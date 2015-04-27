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
		$consulta = $db_facebook->query("SELECT * FROM candidatos where Partido='PAN' and Nombre='Jorge Luis Preciado Rodríguez'");
	
		if($consulta->num_rows()>0)
		{
			return $consulta->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a gobernador Ignacio Peralta
	public function Obtener_CGIgnacioPeralta()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ignacioperalta = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='José Ignacio Peralta Sánchez'");

		if($ignacioperalta->num_rows()>0)
		{
			return $ignacioperalta->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a gobernador Jorge Luis Preciado
	public function Obtener_CGJorgeLuis()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$jorgepreciado = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='Jorge Luis Preciado Rodríguez'");
	
		if($jorgepreciado->num_rows()>0)
		{
			return $jorgepreciado->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a gobernador Leoncio Moran
	public function Obtener_CGLeoncioMoran()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$leonciomoran = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='Leoncio Morán Sánchez'");
	
		if($leonciomoran->num_rows()>0)
		{
			return $leonciomoran->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a gobernador Martha zepeda
	public function Obtener_CGMarthaZepeda()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marthazepeda = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='Martha Zepeda del Toro'");
	
		if($marthazepeda->num_rows()>0)
		{
			return $marthazepeda->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a gobernador David Munro
	public function Obtener_CGDavidMunro()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$davidmunro = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='David Munro González'");
	
		if($davidmunro->num_rows()>0)
		{
			return $davidmunro->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a gobernador Francisco Gallardo
	public function Obtener_CGFranciscoGallardo()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$franciscogallardo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='José Francisco Gallardo Rodríguez'");
	
		if($franciscogallardo->num_rows()>0)
		{
			return $franciscogallardo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a gobernador Gerardo Galvan
	public function Obtener_CGGerardoGalvan()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$gerardogalvan = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='Gerardo Galván Pinto'");
	
		if($gerardogalvan->num_rows()>0)
		{
			return $gerardogalvan->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}


	//Obteniendo los likes del candidato a gobernador Carlos Barbazan
	public function Obtener_CGCarlosBarbazan()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$carlosbarbazan = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
		if($carlosbarbazan->num_rows()>0)
		{
			return $carlosbarbazan->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a DF Jose Manuel
	public function Obtener_CDFDIJosemanuel()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$josemanuel = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito I') and Nombre='José Manuel Moreno González'");
	
		if($josemanuel->num_rows()>0)
		{
			return $josemanuel->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}	

	//Obteniendo los likes del candidato a DF Enrique rojas
	public function Obtener_CDFDIEnriquerojas()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$enriquerojas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito I') and Nombre='Enrique Rojas Orozco'");
				
		if($enriquerojas->num_rows()>0)
		{
			return $enriquerojas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}	

	//Obteniendo los likes del candidato a DF JIndira Vizcaino
	public function Obtener_CDFDIIndiravizcaino()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$indiravizcaino = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito I') and Nombre='Indira Vizcaíno Silva'");
	
		if($indiravizcaino->num_rows()>0)
		{
			return $indiravizcaino->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a DF Silvia Dias
	public function Obtener_CDFDISilviaDias()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$silviadias = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito I') and Nombre='Silvia Elena Díaz Márquez'");
	
		if($silviadias->num_rows()>0)
		{
			return $silviadias->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a DF Angeles Marquez
	public function Obtener_CDFDIAngelesMarquez()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$angelesmarquez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito I') and Nombre='Ángeles Márquez Gileta'");
	
		if($angelesmarquez->num_rows()>0)
		{
			return $angelesmarquez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}
	//Obteniendo los likes del candidato a DF Rosalinda Garcia
	public function Obtener_CDFDIRosalindaGarcia()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rosalinagarcia = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito I') and Nombre='Rosalina García Torres'");
	
		if($rosalinagarcia->num_rows()>0)
		{
			return $rosalinagarcia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes y los post del candidato a DFDI Claudia Ibarra
	public function Obtener_CDFDIClaudiaIbarra()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$claudiaibarra = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito I') and Nombre='Claudia Jasmín Ibarra Ávalos'");
	
		if($claudiaibarra->num_rows()>0)
		{
			return $claudiaibarra->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes y los post del candidato a DFDII Norma Galindo Matías
	public function Obtener_CDFDIINormagalindo()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$normagalindo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito II') and Nombre='Norma Galindo Matías'");
	
		if($normagalindo->num_rows()>0)
		{
			return $normagalindo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes y los posts del candidato a DFDII Pedro Fernández Rodríguez
	public function Obtener_CDFDIIPedrofernandez()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pedrofernandez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito II') and Nombre='Pedro Fernández Rodríguez'");
	
		if($pedrofernandez->num_rows()>0)
		{
			return $pedrofernandez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}
	
	//Obteniendo los likes y los posts del candidato a DFDII Elías Eduardo Valencia Cervantes
	public function Obtener_CDFDIIEliasvalencia()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$eliasvalencia = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito II') and Nombre='Elías Eduardo Valencia Cervantes'");
	
		if($eliasvalencia->num_rows()>0)
		{
			return $eliasvalencia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}
	
	//Obteniendo los likes y los posts del candidato a DFDII Juan Carlos Olave
	public function Obtener_CDFDIIJuancarlos()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$juancarlos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito II') and Nombre='Juan Carlos Olave'");
	
		if($juancarlos->num_rows()>0)
		{
			return $juancarlos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes y los posts del candidato a DFDII Marisa Mesina Polanco
	public function Obtener_CDFDIIMarisamesina()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marisamesina = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Federal Distrito II') and Nombre='Marisa Mesina Polanco'");
	
		if($marisamesina->num_rows()>0)
		{
			return $marisamesina->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}
	
	//********CANDIDATOS A DIPUTADO LOCAL*********
	//Obteniendo los likes y los posts del candidato a DLDI Hilda Ceballos Llerenas
	public function Obtener_CDLDIHildaceballos()
	{
		
	}

	//********CANDIDATOS A PRESIDENTE MUNICIPAL DE COLIMA*********

	//Obteniendo los likes y los posts del candidato a PMColima Hector Insua
	public function Obtener_CPMColimaHectorinsua()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hectorinsua = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Héctor Insúa García'");
	
		if($hectorinsua->num_rows()>0)
		{
			return $hectorinsua->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes y los posts del candidato a PMColima Oscar Valdovinos
	public function Obtener_CPMColimaOscarvaldovinos()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$oscarvaldovinos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Oscar Valdovinos Anguiano'");
	
		if($oscarvaldovinos->num_rows()>0)
		{
			return $oscarvaldovinos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
		
	}

	//Obteniendo los likes y los posts del candidato a PMColima Esmeralda Cardenas
	public function Obtener_CPMColimaEsmeraldacardenas()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$esmeraldacardenas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Esmeralda Cárdenas Sánchez'");
	
		if($esmeraldacardenas->num_rows()>0)
		{
			return $esmeraldacardenas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}		
	}

	//Obteniendo los likes y los posts del candidato a PMColima Juan Vazquez
	public function Obtener_CPMColimaJuanvazquez()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$juanvazquez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Juan Óscar Vázquez Chávez'");
	
		if($juanvazquez->num_rows()>0)
		{
			return $juanvazquez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMColima Paulo Velazquez
	public function Obtener_CPMColimaPaulovelazquez()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$paulovelazquez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Paulo Galileo Velázquez Rueda'");
	
		if($paulovelazquez->num_rows()>0)
		{
			return $paulovelazquez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}						
	}

	//Obteniendo los likes y los posts del candidato a PMColima Elena Abaroa
	public function Obtener_CPMColimaElenaabaroa()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$elenaabaroa = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='María Elena Abaroa López'");
	
		if($elenaabaroa->num_rows()>0)
		{
			return $elenaabaroa->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}		
	}
	
	//Obteniendo los likes y los posts del candidato a PMColima Brenda Mayoral
	public function Obtener_CPMColimaBrendamayoral()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$brendamayoral = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Brenda Natalí Mayoral Gutiérrez'");
	
		if($brendamayoral->num_rows()>0)
		{
			return $brendamayoral->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMManzanillo Gabriela Benavides Cobos
	public function Obtener_CPMManzanilloGB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$gabrielabenavides = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Gabriela Benavides Cobos'");
	
		if($gabrielabenavides->num_rows()>0)
		{
			return $gabrielabenavides->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMManzanillo Francisco Zepeda González
	public function Obtener_CPMManzanilloFZ()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$franciscozepeda = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Francisco Zepeda González'");
	
		if($franciscozepeda->num_rows()>0)
		{
			return $franciscozepeda->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Rosa Martha Leal Molina
	public function Obtener_CPMManzanilloML()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marthaleal = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Rosa Martha Leal Molina'");
	
		if($marthaleal->num_rows()>0)
		{
			return $marthaleal->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMManzanillo Marcos Barajas Yescas
	public function Obtener_CPMManzanilloMB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marcosbarajas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Marcos Barajas Yescas'");
	
		if($marcosbarajas->num_rows()>0)
		{
			return $marcosbarajas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Rubén Romo Ochoa
	public function Obtener_CPMManzanilloRR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rubenromo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Rubén Romo Ochoa'");
	
		if($rubenromo->num_rows()>0)
		{
			return $rubenromo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Héctor Jesús Lara Chávez
	public function Obtener_CPMManzanilloHL()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hectorlara = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Héctor Jesús Lara Chávez'");
	
		if($hectorlara->num_rows()>0)
		{
			return $hectorlara->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Héctor Víctor Manuel Granados Rangel
	public function Obtener_CPMManzanilloVG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$victorgranados = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Víctor Manuel Granados Rangel'");
	
		if($victorgranados->num_rows()>0)
		{
			return $victorgranados->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Yulenny Cortés León
	public function Obtener_CPMVilladeAlvarezYC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$yulennycortes = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Yulenny Cortés León'");
	
		if($yulennycortes->num_rows()>0)
		{
			return $yulennycortes->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Oswy Delgado
	public function Obtener_CPMVilladeAlvarezOD()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$oswydelgado = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Oswy Delgado Rodríguez'");
	
		if($oswydelgado->num_rows()>0)
		{
			return $oswydelgado->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Jaime Sotelo García 
	public function Obtener_CPMVilladeAlvarezJS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$jaimesotelo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Jaime Sotelo García '");
	
		if($jaimesotelo->num_rows()>0)
		{
			return $jaimesotelo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Berenice González Gutiérrez
	public function Obtener_CPMVilladeAlvarezBG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$berenicegonzalez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Berenice González Gutiérrez '");
	
		if($berenicegonzalez->num_rows()>0)
		{
			return $berenicegonzalez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Héctor Anaya Villanueva
	public function Obtener_CPMVilladeAlvarezHA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hectoranaya = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Héctor Anaya Villanueva '");
	
		if($hectoranaya->num_rows()>0)
		{
			return $hectoranaya->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Melchor Arroyo Manriquez
	public function Obtener_CPMVilladeAlvarezMA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$melchorarroyo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Melchor Arroyo Manriquez '");
	
		if($melchorarroyo->num_rows()>0)
		{
			return $melchorarroyo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Edgar Octavio González Medina
	public function Obtener_CPMVilladeAlvarezEG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$edgargonzalez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Edgar Octavio González Medina '");
	
		if($edgargonzalez->num_rows()>0)
		{
			return $edgargonzalez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMComala Salomón Salazar Barragán
	public function Obtener_CPMComalaSS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$salomonsalazar = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Salomón Salazar Barragán'");
	
		if($salomonsalazar->num_rows()>0)
		{
			return $salomonsalazar->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	

	//Obteniendo los likes y los posts del candidato a PMComala Mario Peña Jiménez
	public function Obtener_CPMComalaMP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$mariopena = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Mario Peña Jiménez'");
	
		if($mariopena->num_rows()>0)
		{
			return $mariopena->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	

	//Obteniendo los likes y los posts del candidato a PMComala Zenaida Vicente Olivares
	public function Obtener_CPMComalaZV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$zenaidavicente = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Zenaida Vicente Olivares'");
	
		if($zenaidavicente->num_rows()>0)
		{
			return $zenaidavicente->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMComala Mario Carrillo Llerenas
	public function Obtener_CPMComalaMC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$mariocarrillo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Mario Carrillo Llerenas'");
	
		if($mariocarrillo->num_rows()>0)
		{
			return $mariocarrillo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMTecoman Arturo García Arias
	public function Obtener_CPMTecomanAG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$arturogarcia = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Tecoman') and Nombre='Arturo García Arias'");
	
		if($arturogarcia->num_rows()>0)
		{
			return $arturogarcia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMTecoman Rubén Santos Álvarez
	public function Obtener_CPMTecomanRS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rubensantos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Tecoman') and Nombre='Rubén Santos Álvarez'");
	
		if($rubensantos->num_rows()>0)
		{
			return $rubensantos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMTecoman Ángel Venegas López
	public function Obtener_CPMTecomanAV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$angelvenegas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Tecoman') and Nombre='Ángel Venegas López'");
	
		if($angelvenegas->num_rows()>0)
		{
			return $angelvenegas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCoquimatlan Orlando Lino Castellanos
	public function Obtener_CPMCoquimatlanOL()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$orlandolino = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Coquimatlan') and Nombre='Orlando Lino Castellanos'");
	
		if($orlandolino->num_rows()>0)
		{
			return $orlandolino->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCoquimatlan Enrique Preciado Beas
	public function Obtener_CPMCoquimatlanEP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$enriquepreciado = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Coquimatlan') and Nombre='Enrique Preciado Beas'");
	
		if($enriquepreciado->num_rows()>0)
		{
			return $enriquepreciado->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCoquimatlan Sergio Polanco Ceballos
	public function Obtener_CPMCoquimatlanSP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sergiopolanco = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Coquimatlan') and Nombre='Sergio Polanco Ceballos'");
	
		if($sergiopolanco->num_rows()>0)
		{
			return $sergiopolanco->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Rafael Mendoza Godínez
	public function Obtener_CPMCuahutemocRM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rafaelmendoza = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Rafael Mendoza Godínez'");
	
		if($rafaelmendoza->num_rows()>0)
		{
			return $rafaelmendoza->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Blanca Isabel Rocha Cobián
	public function Obtener_CPMCuahutemocBR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$blancarocha = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Blanca Isabel Rocha Cobián'");
	
		if($blancarocha->num_rows()>0)
		{
			return $blancarocha->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
		
	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Ana Bertha Zamora Prieto
	public function Obtener_CPMCuahutemocAZ()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$anazamora = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Ana Bertha Zamora Prieto'");
	
		if($anazamora->num_rows()>0)
		{
			return $anazamora->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
		
	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Gilberto Ascencio Villalpando
	public function Obtener_CPMCuahutemocGA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$gilbertoascencio = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Gilberto Ascencio Villalpando'");
	
		if($gilbertoascencio->num_rows()>0)
		{
			return $gilbertoascencio->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Blanca Ursúa Blanco
	public function Obtener_CPMCuahutemocBU()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$blancaursua = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Blanca Ursúa Blanco'");
	
		if($blancaursua->num_rows()>0)
		{
			return $blancaursua->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMMinatitlan Manuel Palacios Rodríguez
	public function Obtener_CPMMinatitlanMP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$manuelpalacio = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Minatitlan') and Nombre='Manuel Palacios Rodríguez'");
	
		if($manuelpalacio->num_rows()>0)
		{
			return $manuelpalacio->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMMinatitlan Bertha Alicia Picasso Morán
	public function Obtener_CPMMinatitlanBP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$berthapicasso = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Minatitlan') and Nombre='Bertha Alicia Picasso Morán'");
	
		if($berthapicasso->num_rows()>0)
		{
			return $berthapicasso->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMMinatitlan Norma Campos Arias
	public function Obtener_CPMMinatitlanNC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$normacampos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Minatitlan') and Nombre='Norma Campos Arias'");
	
		if($normacampos->num_rows()>0)
		{
			return $normacampos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMArmeria Esperanza Alcaraz Alcaraz
	public function Obtener_CPMArmeriaEA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$esperanzaalcaraz = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Armeria') and Nombre='Esperanza Alcaraz Alcaraz'");
	
		if($esperanzaalcaraz->num_rows()>0)
		{
			return $esperanzaalcaraz->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	
	//Obteniendo los likes y los posts del candidato a PMArmeria Miguel Ruelas Jaramillo
	public function Obtener_CPMArmeriaMR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$miguelruelas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Armeria') and Nombre='Miguel Ruelas Jaramillo'");
	
		if($miguelruelas->num_rows()>0)
		{
			return $miguelruelas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	
	//Obteniendo los likes y los posts del candidato a PMArmeria Salvador Bueno Arceo
	public function Obtener_CPMArmeriaSB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$salvadorbueno = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Armeria') and Nombre='Salvador Bueno Arceo'");
	
		if($salvadorbueno->num_rows()>0)
		{
			return $salvadorbueno->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Crispín Gutiérrez Moreno
	public function Obtener_CPMIxtlahuacanCG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$crispingutierrez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Crispín Gutiérrez Moreno'");
	
		if($crispingutierrez->num_rows()>0)
		{
			return $crispingutierrez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Hiram Amador Ruiz Mancilla
	public function Obtener_CPMIxtlahuacanHA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hiramamador = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Hiram Amador Ruiz Mancilla'");
	
		if($hiramamador->num_rows()>0)
		{
			return $hiramamador->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Germán Ruelas Verduzco
	public function Obtener_CPMIxtlahuacanGR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$germanruelas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Germán Ruelas Verduzco'");
	
		if($germanruelas->num_rows()>0)
		{
			return $germanruelas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Ignacia Gutiérrez Cortez
	public function Obtener_CPMIxtlahuacanIG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ignaciagutierrez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Ignacia Gutiérrez Cortez'");
	
		if($ignaciagutierrez->num_rows()>0)
		{
			return $ignaciagutierrez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
}	