<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('twitter/modelo_inicio');
		$this->load->database('twitter');
	}

	public function index()
	{
		$this->load->view('twitter/gobernadores');
	}
	public function gobernadores()
	{
		$nacho = $this->modelo_inicio->obtener_cuenta_nacho();
		$jorge = $this->modelo_inicio->obtener_cuenta_jorge();
		$locho = $this->modelo_inicio->obtener_cuenta_locho();
		$martha = $this->modelo_inicio->obtener_cuenta_martha();
		if($nacho != FALSE and $jorge != FALSE and $locho != FALSE and $martha != FALSE)
		{
			$datos = array('usuarion' => $nacho->usuario, 'seguidoresn' => $nacho->seguidores, 
				          'siguiendon' => $nacho->siguiendo, 'tweetsn' => $nacho->tweets,
				          'usuarioj' => $jorge->usuario, 'seguidoresj' => $jorge->seguidores, 
				          'siguiendoj' => $jorge->siguiendo, 'tweetsj' => $jorge->tweets,
				          'usuariol' => $locho->usuario, 'seguidoresl' => $locho->seguidores, 
				          'siguiendol' => $locho->siguiendo, 'tweetsl' => $locho->tweets,
				          'usuariom' => $martha->usuario, 'seguidoresm' => $martha->seguidores, 
				          'siguiendom' => $martha->siguiendo, 'tweetsm' => $martha->tweets);
			$this->load->view('twitter/gobernadores',$datos);
		}
	}

	public function dip_federales()
	{
		#Distrito 1
		$jose_manuel = $this->modelo_inicio->obtener_cuenta_jose_manuel();
		$kike = $this->modelo_inicio->obtener_cuenta_kike();
		$indira = $this->modelo_inicio->obtener_cuenta_indira();
		#Distrito 2
		$norma = $this->modelo_inicio->obtener_cuenta_norma();
		$juan = $this->modelo_inicio->obtener_cuenta_juan();
		if($jose_manuel != FALSE and $kike != FALSE and $indira != FALSE and $norma != FALSE and $juan != FALSE)
		{
			$datos = array('usuariojm' => $jose_manuel->usuario, 'seguidoresjm' => $jose_manuel->seguidores, 
				          'siguiendojm' => $jose_manuel->siguiendo, 'tweetsjm' => $jose_manuel->tweets,
				          'usuariok' => $kike->usuario, 'seguidoresk' => $kike->seguidores, 
				          'siguiendok' => $kike->siguiendo, 'tweetsk' => $kike->tweets,
				          'usuarioi' => $indira->usuario, 'seguidoresi' => $indira->seguidores, 
				          'siguiendoi' => $indira->siguiendo, 'tweetsi' => $indira->tweets,
				          'usuarion' => $norma->usuario, 'seguidoresn' => $norma->seguidores, 
				          'siguiendon' => $norma->siguiendo, 'tweetsn' => $norma->tweets,
				          'usuarioj' => $juan->usuario, 'seguidoresj' => $juan->seguidores, 
				          'siguiendoj' => $juan->siguiendo, 'tweetsj' => $juan->tweets);
			$this->load->view('twitter/dip_federales',$datos);	
		}	
	}

	public function alcaldias()
	{
		#Colima
		$hector = $this->modelo_inicio->obtener_cuenta_hector();
		$maria = $this->modelo_inicio->obtener_cuenta_maria();
		$esmeralda = $this->modelo_inicio->obtener_cuenta_esmeralda();
		#Manzanillo
		$pico = $this->modelo_inicio->obtener_cuenta_pico();
		$marcos = $this->modelo_inicio->obtener_cuenta_marcos();
		if($hector != FALSE and $maria != FALSE and $esmeralda != FALSE and $pico != FALSE and $marcos != FALSE)
		{
			$datos = array('usuarioh' => $hector->usuario, 'seguidoresh' => $hector->seguidores, 
				          'siguiendoh' => $hector->siguiendo, 'tweetsh' => $hector->tweets,
				          'usuarioma' => $maria->usuario, 'seguidoresma' => $maria->seguidores, 
				          'siguiendoma' => $maria->siguiendo, 'tweetsma' => $maria->tweets,
				          'usuarioes' => $esmeralda->usuario, 'seguidoreses' => $esmeralda->seguidores, 
				          'siguiendoes' => $esmeralda->siguiendo, 'tweetses' => $esmeralda->tweets,
				          'usuariop' => $pico->usuario, 'seguidoresp' => $pico->seguidores, 
				          'siguiendop' => $pico->siguiendo, 'tweetsp' => $pico->tweets,
				          'usuariomarc' => $marcos->usuario, 'seguidoresmarc' => $marcos->seguidores, 
				          'siguiendomarc' => $marcos->siguiendo, 'tweetsmarc' => $marcos->tweets);
			$this->load->view('twitter/alcaldias',$datos);	
		}
	}

	public function candidatos_valoracion()
	{		
		$positivos_nacho = $this->modelo_inicio->positivos_nacho();
		$negativos_nacho = $this->modelo_inicio->negativos_nacho();
		$neutros_nacho = $this->modelo_inicio->neutros_nacho();
		$datos = array('positivos' => $positivos_nacho->positivos,
					  'negativos' => $negativos_nacho->negativos,
					  'neutros' => $neutros_nacho->neutros);
		$this->load->view('twitter/candidatos_valoracion',$datos);	
	}

	public function prueba()
	{
		$consulta = $this->modelo_inicio->prueba();
		$data = array('neutros' => $consulta->neutros);
		$this->load->view('twitter/prueba',$data);	
	}

	public function busqueda_tweets()
	{
		$this->load->view('twitter/busqueda_tweets');	
	}

	public function mapa_coordenadas()
	{	
		$datos = array('coordenadasC' => $this->modelo_inicio->obtener_coordenadasC(),
					  'coordenadasV' => $this->modelo_inicio->obtener_coordenadasV()
					  );
		$this->load->view('twitter/maps/mapa_coordenadas',$datos);	
	}

	public function valoracion_gobernadores()
	{
		$nacho = $this->modelo_inicio->valoracion_nacho();
		$jorge = $this->modelo_inicio->valoracion_jorge();
		$datos = array('nachoP' => $nacho['positivos'],
					  'nachoNe' => $nacho['negativos'],
					  'nachoN' => $nacho['neutros'],
					  'jorgeP' => $jorge['positivos'],
					  'jorgeNe' => $jorge['negativos'],
					  'jorgeN' => $jorge['neutros']
					  );
		$this->load->view('twitter/valoracionGobernadores',$datos);
	}
}