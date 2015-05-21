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
	public function Obtener_CDLDIHC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$Hildaceballos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito I') and Nombre='Hilda Ceballos Llerenas'");
	
		if($Hildaceballos->num_rows()>0)
		{
			return $Hildaceballos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}
	//Obteniendo los likes y los posts del candidato a DLDI José Cárdenas Sánchez
	public function Obtener_CDLDIJC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$Josecardenas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito I') and Nombre='José Cárdenas Sánchez'");
	
		if($Josecardenas->num_rows()>0)
		{
			return $Josecardenas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}		
	}
	//Obteniendo los likes y los posts del candidato a DLDI Leonardo Cesar Gutiérrez Chávez
	public function Obtener_CDLDILG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$Leonardogutierrez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito I') and Nombre='Leonardo Cesar Gutiérrez Chávez'");
	
		if($Leonardogutierrez->num_rows()>0)
		{
			return $Leonardogutierrez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDII Nicolás Contreras Cortés
	public function Obtener_CDLDIINC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$nicolascontreras = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito II') and Nombre='Nicolás Contreras Cortés'");
	
		if($nicolascontreras->num_rows()>0)
		{
			return $nicolascontreras->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}		
	//Obteniendo los likes y los posts del candidato a DLDII José Guillermo Rángel Lozano
	public function Obtener_CDLDIIGR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$guillermorangel = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito II') and Nombre='José Guillermo Rángel Lozano'");
	
		if($guillermorangel->num_rows()>0)
		{
			return $guillermorangel->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDII Sandra Viviana Ramírez Anguiano
	public function Obtener_CDLDIISR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$SandraRammirez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito II') and Nombre='Sandra Viviana Ramírez Anguiano'");
	
		if($SandraRammirez->num_rows()>0)
		{
			return $SandraRammirez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDII José Luis García Solache
	public function Obtener_CDLDIIJG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$joseGarcia = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito II') and Nombre='José Luis García Solache'");
	
		if($joseGarcia->num_rows()>0)
		{
			return $joseGarcia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDII Arturo García Vázquez
	public function Obtener_CDLDIIAG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$arturogarcia = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito II') and Nombre='Arturo García Vázquez'");
	
		if($arturogarcia->num_rows()>0)
		{
			return $arturogarcia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDII Liliana Rodríguez Vejar
	public function Obtener_CDLDIILR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$lilianarodriguez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito II') and Nombre='Liliana Rodríguez Vejar'");
	
		if($lilianarodriguez->num_rows()>0)
		{
			return $lilianarodriguez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDIII Crispín Guerra Cárdenas
	public function Obtener_CDLDIIICG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$crispinguerra = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito III') and Nombre='Crispín Guerra Cárdenas'");
	
		if($crispinguerra->num_rows()>0)
		{
			return $crispinguerra->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDIII Alma Delia Arreola Cruz
	public function Obtener_CDLDIIIAA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$almaarreola = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito III') and Nombre='Alma Delia Arreola Cruz'");
	
		if($almaarreola->num_rows()>0)
		{
			return $almaarreola->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
	//Obteniendo los likes y los posts del candidato a DLDIII Martha Elia Farías Ríos
	public function Obtener_CDLDIIIMF()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marthafarias = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito III') and Nombre='Martha Elia Farías Ríos'");
	
		if($marthafarias->num_rows()>0)
		{
			return $marthafarias->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
 	//Obteniendo los likes y los posts del candidato a DLDIII Isis Baudella Guadalupe Villaseñor Silva
	public function Obtener_CDLDIIIIV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$isisvillasernor = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito III') and Nombre='Isis Baudella Guadalupe Villaseñor Silva'");
	
		if($isisvillasernor->num_rows()>0)
		{
			return $isisvillasernor->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
  	//Obteniendo los likes y los posts del candidato a DLDIII Octavio Aguilar Montaño
	public function Obtener_CDLDIIIOA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$octavioaguilar = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito III') and Nombre='Octavio Aguilar Montaño'");
	
		if($octavioaguilar->num_rows()>0)
		{
			return $octavioaguilar->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
   	//Obteniendo los likes y los posts del candidato a DLDIII Patricia Inés Peregrina Larios
	public function Obtener_CDLDIIIPP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$patriciaperegrina = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito III') and Nombre='Patricia Inés Peregrina Larios'");
	
		if($patriciaperegrina->num_rows()>0)
		{
			return $patriciaperegrina->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
   	//Obteniendo los likes y los posts del candidato a DLDIII Patricia Gloria Arceo Chávez
	public function Obtener_CDLDIIIGA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$gloriaarceo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito III') and Nombre='Gloria Arceo Chávez'");
	
		if($gloriaarceo->num_rows()>0)
		{
			return $gloriaarceo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDIV Janeth Paz Ponce
	public function Obtener_CDLDIVJP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$janethpaz = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IV') and Nombre='Janeth Paz Ponce'");
	
		if($janethpaz->num_rows()>0)
		{
			return $janethpaz->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDIV Juana Andrés Rivera
	public function Obtener_CDLDIVJA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$juanaandres = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IV') and Nombre='Juana Andrés Rivera'");
	
		if($juanaandres->num_rows()>0)
		{
			return $juanaandres->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDIV Sergio Ricardo Ruiz
	public function Obtener_CDLDIVSR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sergioricardo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IV') and Nombre='Sergio Ricardo Ruiz'");
	
		if($sergioricardo->num_rows()>0)
		{
			return $sergioricardo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
     //Obteniendo los likes y los posts del candidato a DLDIV Andrés Fernando Orozco Soto
	public function Obtener_CDLDIVAO()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$andresorozco = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IV') and Nombre='Andrés Fernando Orozco Soto'");
	
		if($andresorozco->num_rows()>0)
		{
			return $andresorozco->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDV Ramiro Toscano Sánchez
	public function Obtener_CDLDVRT()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ramirotoscano = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito V') and Nombre='Ramiro Toscano Sánchez'");
	
		if($ramirotoscano->num_rows()>0)
		{
			return $ramirotoscano->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDV José Guadalupe Benavides Florián
	public function Obtener_CDLDVJB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$josebenavides = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito V') and Nombre='José Guadalupe Benavides Florián'");
	
		if($josebenavides->num_rows()>0)
		{
			return $josebenavides->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDV Yuliana Lizzet Aguilar Mora
	public function Obtener_CDLDVYA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$yulianaaguilar = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito V') and Nombre='Yuliana Lizzet Aguilar Mora'");
	
		if($yulianaaguilar->num_rows()>0)
		{
			return $yulianaaguilar->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDVI Sandra Yolanda Ramírez Santillán
	public function Obtener_CDLDVISYR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$SandrayolandaRammirez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VI') and Nombre='Sandra Yolanda Ramírez Santillán'");
	
		if($SandrayolandaRammirez->num_rows()>0)
		{
			return $SandrayolandaRammirez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDVI Octavio Tintos Trujillo
	public function Obtener_CDLDVIOT()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$octaviotintos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VI') and Nombre='Octavio Tintos Trujillo'");
	
		if($octaviotintos->num_rows()>0)
		{
			return $octaviotintos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDVI Sergio Silva Sánchez
	public function Obtener_CDLDVISS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sergiosilva = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VI') and Nombre='Sergio Silva Sánchez'");
	
		if($sergiosilva->num_rows()>0)
		{
			return $sergiosilva->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
     //Obteniendo los likes y los posts del candidato a DLDVI Leticia Mendoza Gordillo
	public function Obtener_CDLDVILM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$leticiamendoza = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VI') and Nombre='Leticia Mendoza Gordillo'");
	
		if($leticiamendoza->num_rows()>0)
		{
			return $leticiamendoza->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDVI Niza Getsemani Ibarra Ávalos
	public function Obtener_CDLDVIGI()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$getzemaniibarra = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VI') and Nombre='Niza Getsemani Ibarra Ávalos'");
	
		if($getzemaniibarra->num_rows()>0)
		{
			return $getzemaniibarra->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDVII Francisco Javier Ceballos Galindo
	public function Obtener_CDLDVIIFC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$franciscoceballo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VII') and Nombre='Francisco Javier Ceballos Galindo'");
	
		if($franciscoceballo->num_rows()>0)
		{
			return $franciscoceballo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDVII Alfredo Hernández Ramos
	public function Obtener_CDLDVIIAH()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$alfredohernandez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VII') and Nombre='Alfredo Hernández Ramos'");
	
		if($alfredohernandez->num_rows()>0)
		{
			return $alfredohernandez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDVII Sara Elizabeth Cernas Verduzco
	public function Obtener_CDLDVIISC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$saracernas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VII') and Nombre='Sara Elizabeth Cernas Verduzco'");
	
		if($saracernas->num_rows()>0)
		{
			return $saracernas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}  
    //Obteniendo los likes y los posts del candidato a DLDVII Joel Padilla Peña
	public function Obtener_CDLDVIIJP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$jooelpadilla = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VII') and Nombre='Joel Padilla Peña'");
	
		if($jooelpadilla->num_rows()>0)
		{
			return $jooelpadilla->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
	//Obteniendo los likes y los posts del candidato a DLDVII Socorro Bayardo Gaitán
	public function Obtener_CDLDVIISB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$socorrobayardo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VII') and Nombre='Socorro Bayardo Gaitán'");
	
		if($socorrobayardo->num_rows()>0)
		{
			return $socorrobayardo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
 	//Obteniendo los likes y los posts del candidato a DLDVII Erendira Noemí Andrade Ochoa
	public function Obtener_CDLDVIIEA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$erendiraandrade = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VII') and Nombre='Erendira Noemí Andrade Ochoa'");
	
		if($erendiraandrade->num_rows()>0)
		{
			return $erendiraandrade->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
 	//Obteniendo los likes y los posts del candidato a DLDVIII Meyly Pastora Beltrán rolón
	public function Obtener_CDLDVIIIMP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$meylypastora = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VIII') and Nombre='Meyly Pastora Beltrán rolón'");
	
		if($meylypastora->num_rows()>0)
		{
			return $meylypastora->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}  
 	//Obteniendo los likes y los posts del candidato a DLDVII Héctor Magaña Lara
	public function Obtener_CDLDVIIIHM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hectormagana = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VIII') and Nombre='Héctor Magaña Lara'");
	
		if($hectormagana->num_rows()>0)
		{
			return $hectormagana->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
 	//Obteniendo los likes y los posts del candidato a DLDVII Alfredo Cuauhtémoc Herrera Díaz
	public function Obtener_CDLDVIIIAH()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$alfredoherrera = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VIII') and Nombre='Alfredo Cuauhtémoc Herrera Díaz'");
	
		if($alfredoherrera->num_rows()>0)
		{
			return $alfredoherrera->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
  	//Obteniendo los likes y los posts del candidato a DLDVII Adelaida Fernández Ramos
	public function Obtener_CDLDVIIIAF()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$adelaidafernandez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VIII') and Nombre='Adelaida Fernández Ramos'");
	
		if($adelaidafernandez->num_rows()>0)
		{
			return $adelaidafernandez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
   	//Obteniendo los likes y los posts del candidato a DLDVII Juan Francisco Juárez Rodríguez
	public function Obtener_CDLDVIIIJJ()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$juanjuarez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito VIII') and Nombre='Juan Francisco Juárez Rodríguez'");
	
		if($juanjuarez->num_rows()>0)
		{
			return $juanjuarez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDIX Eusebio Mesina Reyes
	public function Obtener_CDLDIXEM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$eusebiomesina = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IX') and Nombre='Eusebio Mesina Reyes'");
	
		if($eusebiomesina->num_rows()>0)
		{
			return $eusebiomesina->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDIX Beatríz Guadalupe Isunza Burciaga
	public function Obtener_CDLDIXBI()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$beatrizinsunza = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IX') and Nombre='Beatríz Guadalupe Isunza Burciaga'");
	
		if($beatrizinsunza->num_rows()>0)
		{
			return $beatrizinsunza->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDIX Selene Margarita López
	public function Obtener_CDLDIXSL()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$selenelopez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IX') and Nombre='Selene Margarita López'");
	
		if($selenelopez->num_rows()>0)
		{
			return $selenelopez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDIX Ma Angélica Ochoa Muñoz
	public function Obtener_CDLDIXAO()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$angelicaochoa = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IX') and Nombre='Ma Angélica Ochoa Muñoz'");
	
		if($angelicaochoa->num_rows()>0)
		{
			return $angelicaochoa->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDIX Mauricio Barreto Peralta
	public function Obtener_CDLDIXMB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$mauriciobarreto = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito IX') and Nombre='Mauricio Barreto Peralta'");
	
		if($mauriciobarreto->num_rows()>0)
		{
			return $mauriciobarreto->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDX Juan Carlos Pinto Rodríguez
	public function Obtener_CDLDXJP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$juanpinto = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito X') and Nombre='Juan Carlos Pinto Rodríguez'");
	
		if($juanpinto->num_rows()>0)
		{
			return $juanpinto->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDX Ricardo Sevilla Cárdenas
	public function Obtener_CDLDXRS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ricardosevilla = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito X') and Nombre='Ricardo Sevilla Cárdenas'");
	
		if($ricardosevilla->num_rows()>0)
		{
			return $ricardosevilla->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
     //Obteniendo los likes y los posts del candidato a DLDX Raquel Cárdenas Corona
	public function Obtener_CDLDXRC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$raquelcardenas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito X') and Nombre='Raquel Cárdenas Corona'");
	
		if($raquelcardenas->num_rows()>0)
		{
			return $raquelcardenas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDX Marco Antonio Rodarte Quintana
	public function Obtener_CDLDXMR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marcorodarte = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito X') and Nombre='Marco Antonio Rodarte Quintana'");
	
		if($marcorodarte->num_rows()>0)
		{
			return $marcorodarte->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
     //Obteniendo los likes y los posts del candidato a DLDX Salvador Juárez Figueroa
	public function Obtener_CDLDXSJ()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$salvadorjuarez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito X') and Nombre='Salvador Juárez Figueroa'");
	
		if($salvadorjuarez->num_rows()>0)
		{
			return $salvadorjuarez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDXI Miguel Alejandro García
	public function Obtener_CDLDXIMG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$miguelgarcia = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XI') and Nombre='Miguel Alejandro García'");
	
		if($miguelgarcia->num_rows()>0)
		{
			return $miguelgarcia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}	
    //Obteniendo los likes y los posts del candidato a DLDXI Armida Nuñez García
	public function Obtener_CDLDXIAN()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$armidanunes = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XI') and Nombre='Armida Nuñez García'");
	
		if($armidanunes->num_rows()>0)
		{
			return $armidanunes->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
     //Obteniendo los likes y los posts del candidato a DLDXI Aldo Leonardo Vega Petriz
	public function Obtener_CDLDXIAV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$aldovega = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XI') and Nombre='Aldo Leonardo Vega Petriz'");
	
		if($aldovega->num_rows()>0)
		{
			return $aldovega->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
     //Obteniendo los likes y los posts del candidato a DLDXI Sebastián Esparza Hernández
	public function Obtener_CDLDXISE()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sebastianesparza = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XI') and Nombre='Sebastián Esparza Hernández'");
	
		if($sebastianesparza->num_rows()>0)
		{
			return $sebastianesparza->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
     //Obteniendo los likes y los posts del candidato a DLDXI Teresa Hernández Ortiz
	public function Obtener_CDLDXITH()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$teresahernandez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XI') and Nombre='Teresa Hernández Ortiz'");
	
		if($teresahernandez->num_rows()>0)
		{
			return $teresahernandez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXI Diana Monserrat Topete Vargas
	public function Obtener_CDLDXIDT()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$dianatopete = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XI') and Nombre='Diana Monserrat Topete Vargas'");
	
		if($dianatopete->num_rows()>0)
		{
			return $dianatopete->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}
    //Obteniendo los likes y los posts del candidato a DLDXII Martha Leticia Sosa
	public function Obtener_CDLDXIIMS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marthasosa = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XII') and Nombre='Martha Leticia Sosa'");
	
		if($marthasosa->num_rows()>0)
		{
			return $marthasosa->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXII Rosario Yeme López
	public function Obtener_CDLDXIIRY()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rosarioyeme = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XII') and Nombre='Rosario Yeme López'");
	
		if($rosarioyeme->num_rows()>0)
		{
			return $rosarioyeme->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXII Nora Mireya Ayala Ochoa
	public function Obtener_CDLDXIINA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$noraayala = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XII') and Nombre='Nora Mireya Ayala Ochoa'");
	
		if($noraayala->num_rows()>0)
		{
			return $noraayala->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXII Iveth Sarahí Noriega Mondragón
	public function Obtener_CDLDXIISN()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sarahinoriega = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XII') and Nombre='Iveth Sarahí Noriega Mondragón'");
	
		if($sarahinoriega->num_rows()>0)
		{
			return $sarahinoriega->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXIII Iveth Sergio Sánchez Ochoa
	public function Obtener_CDLDXIIISS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sergiosanchez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIII') and Nombre='Sergio Sánchez Ochoa'");
	
		if($sergiosanchez->num_rows()>0)
		{
			return $sergiosanchez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXIII Carlos Iván Villa González
	public function Obtener_CDLDXIIICV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$carlosvilla = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIII') and Nombre='Carlos Iván Villa González'");
	
		if($carlosvilla->num_rows()>0)
		{
			return $carlosvilla->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}  
    //Obteniendo los likes y los posts del candidato a DLDXIV Carlos Iván Villa González
	public function Obtener_CDLDXIVLA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$luisayala = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIV') and Nombre='Luis Ayala Campos'");
	
		if($luisayala->num_rows()>0)
		{
			return $luisayala->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}  
    //Obteniendo los likes y los posts del candidato a DLDXIV Lilia Figueroa Larios
	public function Obtener_CDLDXIVLF()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$lilafigueroa = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIV') and Nombre='Lilia Figueroa Larios'");
	
		if($lilafigueroa->num_rows()>0)
		{
			return $lilafigueroa->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXIV Martha Alicia Meza Obregón
	public function Obtener_CDLDXIVMM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marthameza = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIV') and Nombre='Martha Alicia Meza Obregón'");
	
		if($marthameza->num_rows()>0)
		{
			return $marthameza->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}  
    //Obteniendo los likes y los posts del candidato a DLDXIV Verónica Torres Rolón
	public function Obtener_CDLDXIVVT()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$veronicatorres = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIV') and Nombre='Verónica Torres Rolón'");
	
		if($veronicatorres->num_rows()>0)
		{
			return $veronicatorres->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXIV Gustavo Rentería Gonzalez
	public function Obtener_CDLDXIVGR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$gustavorerenteria = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIV') and Nombre='Gustavo Rentería Gonzalez'");
	
		if($gustavorerenteria->num_rows()>0)
		{
			return $gustavorerenteria->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXIV Josefina Roblada Lara
	public function Obtener_CDLDXIVJR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$josefinaroblada = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIV') and Nombre='Josefina Roblada Lara'");
	
		if($josefinaroblada->num_rows()>0)
		{
			return $josefinaroblada->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	}  
    //Obteniendo los likes y los posts del candidato a DLDXIV Elías Octavio Núñez Campos
	public function Obtener_CDLDXIVEN()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$eliasnunez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XIV') and Nombre='Elías Octavio Núñez Campos'");
	
		if($eliasnunez->num_rows()>0)
		{
			return $eliasnunez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXV Felícitas Peña Cisneros
	public function Obtener_CDLDXVFP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$felicitaspena = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XV') and Nombre='Felícitas Peña Cisneros'");
	
		if($felicitaspena->num_rows()>0)
		{
			return $felicitaspena->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXV Hilda Moreno Díaz
	public function Obtener_CDLDXVHM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hildamoreno = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XV') and Nombre='Hilda Moreno Díaz'");
	
		if($hildamoreno->num_rows()>0)
		{
			return $hildamoreno->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXV Alma Elvira Rincón Rodríguez
	public function Obtener_CDLDXVAR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$almarincon = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XV') and Nombre='Alma Elvira Rincón Rodríguez'");
	
		if($almarincon->num_rows()>0)
		{
			return $almarincon->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 	
    //Obteniendo los likes y los posts del candidato a DLDXVI Santiago Chávez Chávez
	public function Obtener_CDLDXVISC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$santiagochavez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XVI') and Nombre='Santiago Chávez Chávez'");
	
		if($santiagochavez->num_rows()>0)
		{
			return $santiagochavez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 	 
    //Obteniendo los likes y los posts del candidato a DLDXVI Judith Godínez Cabrera
	public function Obtener_CDLDXVIJG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$judithgodinez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XVI') and Nombre='Judith Godínez Cabrera'");
	
		if($judithgodinez->num_rows()>0)
		{
			return $judithgodinez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 	  
    //Obteniendo los likes y los posts del candidato a DLDXVI Sergio Mendoza Lomelí
	public function Obtener_CDLDXVISM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sergiomendoza = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XVI') and Nombre='Sergio Mendoza Lomelí'");
	
		if($sergiomendoza->num_rows()>0)
		{
			return $sergiomendoza->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
	} 
    //Obteniendo los likes y los posts del candidato a DLDXVI Ma de Los Ángeles Rodríguez Silva
	public function Obtener_CDLDXVIAR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$angelesrodriguez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Diputado Local Distrito XVI') and Nombre='Ma de Los Ángeles Rodríguez Silva'");
	
		if($angelesrodriguez->num_rows()>0)
		{
			return $angelesrodriguez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}			
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

	//***************************PARTIDOS*******************************
	
	//Obteniendo los likes y los posts del partido PAN
	public function Obtener_CPAN()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pan = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PAN'");
	
		if($pan->num_rows()>0)
		{
			return $pan->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PRI
	public function Obtener_CPRI()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pri = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRI'");
	
		if($pri->num_rows()>0)
		{
			return $pri->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PNA
	public function Obtener_CPNA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pna = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='NUEVA ALIANZA'");
	
		if($pna->num_rows()>0)
		{
			return $pna->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}		
	//Obteniendo los likes y los posts del partido PV
	public function Obtener_CPV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pv = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='VERDE'");
	
		if($pv->num_rows()>0)
		{
			return $pv->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}			
	//Obteniendo los likes y los posts del partido PRD
	public function Obtener_CPRD()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$prd = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRD'");
	
		if($prd->num_rows()>0)
		{
			return $prd->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PT
	public function Obtener_CPT()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pt = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PT'");
	
		if($pt->num_rows()>0)
		{
			return $pt->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}		
	//Obteniendo los likes y los posts del partido PMC
	public function Obtener_CPMC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pmc = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MOVIMIENTO CIUDADANO'");
	
		if($pmc->num_rows()>0)
		{
			return $pmc->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}			
	//Obteniendo los likes y los posts del partido PM
	public function Obtener_CPM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pm = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MORENA'");
	
		if($pm->num_rows()>0)
		{
			return $pm->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PES
	public function Obtener_CPES()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pes = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='ENCUENTRO SOCIAL'");
	
		if($pes->num_rows()>0)
		{
			return $pes->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido Ph
	public function Obtener_CPH()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ph = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PARTIDO HUMANISTA'");
	
		if($ph->num_rows()>0)
		{
			return $ph->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PAN
	public function Obtener_CPAN2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pan2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PAN2'");
	
		if($pan2->num_rows()>0)
		{
			return $pan2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PRI
	public function Obtener_CPRI2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pri2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRI2'");
	
		if($pri2->num_rows()>0)
		{
			return $pri2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PNA
	public function Obtener_CPNA2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pna2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='NUEVA ALIANZA2'");
	
		if($pna2->num_rows()>0)
		{
			return $pna2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PV
	public function Obtener_CPV2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pv2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='VERDE2'");
	
		if($pv2->num_rows()>0)
		{
			return $pv2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PRD
	public function Obtener_CPRD2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$prd2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRD2'");
	
		if($prd2->num_rows()>0)
		{
			return $prd2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}		
	//Obteniendo los likes y los posts del partido PT
	public function Obtener_CPT2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pt2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PT2'");
	
		if($pt2->num_rows()>0)
		{
			return $pt2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PMC
	public function Obtener_CPMC2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pmc2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MOVIMIENTO CIUDADANO2'");
	
		if($pmc2->num_rows()>0)
		{
			return $pmc2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PM
	public function Obtener_CPM2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pm2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MORENA2'");
	
		if($pm2->num_rows()>0)
		{
			return $pm2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PES
	public function Obtener_CPES2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pes2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='ENCUENTRO SOCIAL2'");
	
		if($pes2->num_rows()>0)
		{
			return $pes2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PH
	public function Obtener_CPH2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ph2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PARTIDO HUMANISTA2'");
	
		if($ph2->num_rows()>0)
		{
			return $ph2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}			
	//OBTENIENDO LA VALORACION DE LOS CANDIDATOS A GOBERBANDOR	
	
	//Obtener valoracion de comentarios de Jorge Luis
		public function valoracion_jorge()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Jorge Luis Preciado'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Jorge Luis Preciado'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Jorge Luis Preciado'"
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
		public function valoracion_nacho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Ignacio Peralta'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Ignacio Peralta'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Ignacio Peralta'"
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
		//Obtener cuenta de Comovamoscolima
		public function obtener_cuenta_comoVamos()
		{
			$comoVamos2 = $this->db->query("select Megusta, PersonasHablan, Fecha from partido where (Cargo='Sociedad') and Partido='Como Vamos Colima' ORDER BY Fecha ASC");

			if($comoVamos2->num_rows()>0)
			{
				$a2 = array(
	                "comoVamos2" => $comoVamos2->result()
	            );
	            return $a2;
			}
			else
			{
				return FALSE;
			}
		}					
}	