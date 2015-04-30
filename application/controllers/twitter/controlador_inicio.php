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
		//Hashtags relacionados con los gobernadores
		$hashtags = $this->modelo_inicio->obtener_hashtags_gobernadores();

		if($nacho != FALSE and $jorge != FALSE and $locho != FALSE and $martha != FALSE)
		{
			$datos = array('usuarion' => $nacho->usuario, 'seguidoresn' => $nacho->seguidores, 
				          'siguiendon' => $nacho->siguiendo, 'tweetsn' => $nacho->tweets,
				          'usuarioj' => $jorge->usuario, 'seguidoresj' => $jorge->seguidores, 
				          'siguiendoj' => $jorge->siguiendo, 'tweetsj' => $jorge->tweets,
				          'usuariol' => $locho->usuario, 'seguidoresl' => $locho->seguidores, 
				          'siguiendol' => $locho->siguiendo, 'tweetsl' => $locho->tweets,
				          'usuariom' => $martha->usuario, 'seguidoresm' => $martha->seguidores, 
				          'siguiendom' => $martha->siguiendo, 'tweetsm' => $martha->tweets,
				          'hashtags' => $hashtags);
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

	public function dip_locales()
	{
		#Distrito 1
		$hilda = $this->modelo_inicio->obtener_cuenta_hilda();
		#Distrito 2
		$rangel = $this->modelo_inicio->obtener_cuenta_rangel();
		$viviana = $this->modelo_inicio->obtener_cuenta_viviana();
		#Distrito 3
		$crispin = $this->modelo_inicio->obtener_cuenta_crispin();
		$isis = $this->modelo_inicio->obtener_cuenta_isis();
		#Distrito 4
		$janeth = $this->modelo_inicio->obtener_cuenta_janeth();
		$juanita = $this->modelo_inicio->obtener_cuenta_juanita();
		#Distrito 5
		$lupe = $this->modelo_inicio->obtener_cuenta_lupe();
		#Distrito 6
		$octavio = $this->modelo_inicio->obtener_cuenta_octavio();
		#Distrito 7
		$sara = $this->modelo_inicio->obtener_cuenta_sara();
		$joel = $this->modelo_inicio->obtener_cuenta_joel();
		#Distrito 8
		$meyly = $this->modelo_inicio->obtener_cuenta_meyly();
		$hector = $this->modelo_inicio->obtener_cuenta_hectorM();
		#Distrito 9
		$eusebio = $this->modelo_inicio->obtener_cuenta_eusebio();
		#Distrito 10
		$mesina = $this->modelo_inicio->obtener_cuenta_mesina();
		$pinto = $this->modelo_inicio->obtener_cuenta_pinto();
		#Distrito 11
		$armida = $this->modelo_inicio->obtener_cuenta_armida();
		#Distrito 12
		$amary = $this->modelo_inicio->obtener_cuenta_amary();
		#Distrito 13
		$sergio = $this->modelo_inicio->obtener_cuenta_sergio();
		#Distrito 14
		$martha = $this->modelo_inicio->obtener_cuenta_marthaM();
		#Distrito 15
		$felicitas = $this->modelo_inicio->obtener_cuenta_felicitas();
		#Distrito 16
		$santiago = $this->modelo_inicio->obtener_cuenta_santiago();
		if($hilda != FALSE)
		{
			$datos = array('usuarioh' => $hilda->usuario, 'seguidoresh' => $hilda->seguidores, 
				          'siguiendoh' => $hilda->siguiendo, 'tweetsh' => $hilda->tweets,
				          'usuario_rangel' => $rangel->usuario, 'seguidores_rangel' => $rangel->seguidores, 
				          'siguiendo_rangel' => $rangel->siguiendo, 'tweets_rangel' => $rangel->tweets,
				          'usuario_viviana' => $viviana->usuario, 'seguidores_viviana' => $viviana->seguidores, 
				          'siguiendo_viviana' => $viviana->siguiendo, 'tweets_viviana' => $viviana->tweets,
				          'usuario_crispin' => $crispin->usuario, 'seguidores_crispin' => $crispin->seguidores, 
				          'siguiendo_crispin' => $crispin->siguiendo, 'tweets_crispin' => $crispin->tweets,
				          'usuario_isis' => $isis->usuario, 'seguidores_isis' => $isis->seguidores, 
				          'siguiendo_isis' => $isis->siguiendo, 'tweets_isis' => $isis->tweets,
				          'usuario_janeth' => $janeth->usuario, 'seguidores_janeth' => $janeth->seguidores, 
				          'siguiendo_janeth' => $janeth->siguiendo, 'tweets_janeth' => $janeth->tweets,
				          'usuario_juanita' => $juanita->usuario, 'seguidores_juanita' => $juanita->seguidores, 
				          'siguiendo_juanita' => $juanita->siguiendo, 'tweets_juanita' => $juanita->tweets,
				          'usuario_lupe' => $lupe->usuario, 'seguidores_lupe' => $lupe->seguidores, 
				          'siguiendo_lupe' => $lupe->siguiendo, 'tweets_lupe' => $lupe->tweets,
				          'usuario_octavio' => $octavio->usuario, 'seguidores_octavio' => $octavio->seguidores, 
				          'siguiendo_octavio' => $octavio->siguiendo, 'tweets_octavio' => $octavio->tweets,
				          'usuario_sara' => $sara->usuario, 'seguidores_sara' => $sara->seguidores, 
				          'siguiendo_sara' => $sara->siguiendo, 'tweets_sara' => $sara->tweets,
				          'usuario_joel' => $joel->usuario, 'seguidores_joel' => $joel->seguidores, 
				          'siguiendo_joel' => $joel->siguiendo, 'tweets_joel' => $joel->tweets,
				          'usuario_meyly' => $meyly->usuario, 'seguidores_meyly' => $meyly->seguidores, 
				          'siguiendo_meyly' => $meyly->siguiendo, 'tweets_meyly' => $meyly->tweets,
				          'usuario_hector' => $hector->usuario, 'seguidores_hector' => $hector->seguidores, 
				          'siguiendo_hector' => $hector->siguiendo, 'tweets_hector' => $hector->tweets,
				          'usuario_eusebio' => $eusebio->usuario, 'seguidores_eusebio' => $eusebio->seguidores, 
				          'siguiendo_eusebio' => $eusebio->siguiendo, 'tweets_eusebio' => $eusebio->tweets,
				          'usuario_mesina' => $mesina->usuario, 'seguidores_mesina' => $mesina->seguidores, 
				          'siguiendo_mesina' => $mesina->siguiendo, 'tweets_mesina' => $mesina->tweets,
				          'usuario_pinto' => $pinto->usuario, 'seguidores_pinto' => $pinto->seguidores, 
				          'siguiendo_pinto' => $pinto->siguiendo, 'tweets_pinto' => $pinto->tweets,
				          'usuario_armida' => $armida->usuario, 'seguidores_armida' => $armida->seguidores, 
				          'siguiendo_armida' => $armida->siguiendo, 'tweets_armida' => $armida->tweets,
				          'usuario_amary' => $amary->usuario, 'seguidores_amary' => $amary->seguidores, 
				          'siguiendo_amary' => $amary->siguiendo, 'tweets_amary' => $amary->tweets,
				          'usuario_sergio' => $sergio->usuario, 'seguidores_sergio' => $sergio->seguidores, 
				          'siguiendo_sergio' => $sergio->siguiendo, 'tweets_sergio' => $sergio->tweets,
				          'usuario_martha' => $martha->usuario, 'seguidores_martha' => $martha->seguidores, 
				          'siguiendo_martha' => $martha->siguiendo, 'tweets_martha' => $martha->tweets,
				          'usuario_felicitas' => $felicitas->usuario, 'seguidores_felicitas' => $felicitas->seguidores, 
				          'siguiendo_felicitas' => $felicitas->siguiendo, 'tweets_felicitas' => $felicitas->tweets,
				          'usuario_santiago' => $santiago->usuario, 'seguidores_santiago' => $santiago->seguidores, 
				          'siguiendo_santiago' => $santiago->siguiendo, 'tweets_santiago' => $santiago->tweets
				          );
			$this->load->view('twitter/dip_locales',$datos);	
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
		#Villa de álvarez
		$yulenny = $this->modelo_inicio->obtener_cuenta_yulenny();
		$oswy = $this->modelo_inicio->obtener_cuenta_oswy();
		#Comala
		$salomon = $this->modelo_inicio->obtener_cuenta_salomon();
		$mario = $this->modelo_inicio->obtener_cuenta_mario();
		#Tecomán
		$arturo = $this->modelo_inicio->obtener_cuenta_arturo();
		#Cuahutémoc
		$blanca = $this->modelo_inicio->obtener_cuenta_blanca();
		#Minatitlán
		$manuel = $this->modelo_inicio->obtener_cuenta_manuel();
		#Armería
		$esperanza = $this->modelo_inicio->obtener_cuenta_esperanza();
		#Ixtlahuacán
		$hiram = $this->modelo_inicio->obtener_cuenta_hiram();
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
				          'siguiendomarc' => $marcos->siguiendo, 'tweetsmarc' => $marcos->tweets,
				          'usuario_yulenny' => $yulenny->usuario, 'seguidores_yulenny' => $yulenny->seguidores, 
				          'siguiendo_yulenny' => $yulenny->siguiendo, 'tweets_yulenny' => $yulenny->tweets,
				          'usuario_oswy' => $oswy->usuario, 'seguidores_oswy' => $oswy->seguidores, 
				          'siguiendo_oswy' => $oswy->siguiendo, 'tweets_oswy' => $oswy->tweets,
				          'usuario_salomon' => $salomon->usuario, 'seguidores_salomon' => $salomon->seguidores, 
				          'siguiendo_salomon' => $salomon->siguiendo, 'tweets_salomon' => $salomon->tweets,
				          'usuario_mario' => $mario->usuario, 'seguidores_mario' => $mario->seguidores, 
				          'siguiendo_mario' => $mario->siguiendo, 'tweets_mario' => $mario->tweets,
				          'usuario_arturo' => $arturo->usuario, 'seguidores_arturo' => $arturo->seguidores, 
				          'siguiendo_arturo' => $arturo->siguiendo, 'tweets_arturo' => $arturo->tweets,
				          'usuario_blanca' => $blanca->usuario, 'seguidores_blanca' => $blanca->seguidores, 
				          'siguiendo_blanca' => $blanca->siguiendo, 'tweets_blanca' => $blanca->tweets,
				          'usuario_manuel' => $manuel->usuario, 'seguidores_manuel' => $manuel->seguidores, 
				          'siguiendo_manuel' => $manuel->siguiendo, 'tweets_manuel' => $manuel->tweets,
				          'usuario_esperanza' => $esperanza->usuario, 'seguidores_esperanza' => $esperanza->seguidores, 
				          'siguiendo_esperanza' => $esperanza->siguiendo, 'tweets_esperanza' => $esperanza->tweets,
				          'usuario_hiram' => $hiram->usuario, 'seguidores_hiram' => $hiram->seguidores, 
				          'siguiendo_hiram' => $hiram->siguiendo, 'tweets_hiram' => $hiram->tweets);
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
		//Cuentas de nacho
		//$priColima = $this->modelo_inicio->obtener_cuenta_priColima();
		$jips2015 = $this->modelo_inicio->obtener_cuenta_jips2015();
		$jipsColima = $this->modelo_inicio->obtener_cuenta_jipsColima();
		$jipsVilla = $this->modelo_inicio->obtener_cuenta_jipsVilla();
		$selfieNacho = $this->modelo_inicio->obtener_cuenta_selfieNacho();
		$datos = array('nachoP' => $nacho['positivos'],
					  'nachoNe' => $nacho['negativos'],
					  'nachoN' => $nacho['neutros'],
					  'jorgeP' => $jorge['positivos'],
					  'jorgeNe' => $jorge['negativos'],
					  'jorgeN' => $jorge['neutros'],
					  // 'usuario_priColima' => $priColima->usuario, 'seguidores_priColima' => $priColima->seguidores, 
				   //    'siguiendo_priColima' => $priColima->siguiendo, 'tweets_priColima' => $priColima->tweets,
				      'usuario_jips2015' => $jips2015->usuario, 'seguidores_jips2015' => $jips2015->seguidores, 
				      'siguiendo_jips2015' => $jips2015->siguiendo, 'tweets_jips2015' => $jips2015->tweets,
				      'usuario_jipsColima' => $jipsColima->usuario, 'seguidores_jipsColima' => $jipsColima->seguidores, 
				      'siguiendo_jipsColima' => $jipsColima->siguiendo, 'tweets_jipsColima' => $jipsColima->tweets,
				      'usuario_jipsVilla' => $jipsVilla->usuario, 'seguidores_jipsVilla' => $jipsVilla->seguidores, 
				      'siguiendo_jipsVilla' => $jipsVilla->siguiendo, 'tweets_jipsVilla' => $jipsVilla->tweets,
				      'usuario_selfieNacho' => $selfieNacho->usuario, 'seguidores_selfieNacho' => $selfieNacho->seguidores, 
				      'siguiendo_selfieNacho' => $selfieNacho->siguiendo, 'tweets_selfieNacho' => $selfieNacho->tweets
					  );
		$this->load->view('twitter/valoracionGobernadores',$datos);
	}

	//Como vamos Colima
	public function comoVamos()
	{
		$comoVamos = $this->modelo_inicio->obtener_cuenta_comoVamos();
		$datos = array('usuario_comoVamos' => $comoVamos->usuario, 'seguidores_comoVamos' => $comoVamos->seguidores, 
				      'siguiendo_comoVamos' => $comoVamos->siguiendo, 'tweets_comoVamos' => $comoVamos->tweets
					  );
		$this->load->view('twitter/comoVamos',$datos);
	}
}