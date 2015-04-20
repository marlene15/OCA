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
		$ignacioperalta = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='José Ignacio Peralta Sánchez'");

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
		$jorgepreciado = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Jorge Luis Preciado Rodríguez'");
	
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
		$leonciomoran = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Leoncio Morán Sánchez'");
	
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
		$marthazepeda = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Martha Zepeda del Toro'");
	
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
		$davidmunro = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='David Munro González'");
	
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
		$franciscogallardo = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='José Francisco Gallardo Rodríguez'");
	
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
		$gerardogalvan = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Gerardo Galván Pinto'");
	
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
		$carlosbarbazan = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
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
		$josemanuel = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
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
		$enriquerojas = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
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
		$indiravizcaino = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
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
		$silviadias = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
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
		$angelesmarquez = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
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
		$rosalinagarcia = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
		if($rosalinagarcia->num_rows()>0)
		{
			return $rosalinagarcia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes del candidato a DF Claudia Ibarra
	public function Obtener_CDFDIClaudiaIbarra()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$claudiaibarra = $db_facebook->query("select Megusta from candidatos where (Cargo='Gobernador') and Nombre='Carlos Barbazán Martínez'");
	
		if($claudiaibarra->num_rows()>0)
		{
			return $claudiaibarra->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}
}	