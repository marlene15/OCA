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
		$this->load->model('twitter/modelo_consultas');
		$this->load->database('twitter');
		$this->verificar_sesion();
	}

	public function index()
	{
		$this->load->view('twitter/gobernadores');
	}
	public function verificar_sesion()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		

		if (!isset($is_logged_in) || $is_logged_in != TRUE) {
			redirect('login');
			die();
		}
	}
	
	public function gobernadores()
	{
		$this->load->library('fechas'); //Cargar la librería que convierte las fechas			
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;
		$gobernadores = $this->modelo_consultas->obtener_cuenta_gobernadores($ultima_fecha); 	
		//echo "Ultima fecha: ".$ultima_fecha;	
		$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
		$mes='03';
		$hashtags = $this->modelo_inicio->obtener_hashtags_gobernadores($mes);

		$datos = array(
	                "seguidoresn" => $gobernadores['nacho']->seguidores,
	                "siguiendon" => $gobernadores['nacho']->siguiendo,
	                "tweetsn" => $gobernadores['nacho']->tweets,
	                "seguidoresj" => $gobernadores['jorge']->seguidores,
	                "siguiendoj" => $gobernadores['jorge']->siguiendo,
	                "tweetsj" => $gobernadores['jorge']->tweets,
	                "seguidoresl" => $gobernadores['locho']->seguidores,
	                "siguiendol" => $gobernadores['locho']->siguiendo,
	                "tweetsl" => $gobernadores['locho']->tweets,
	                "seguidoresm" => $gobernadores['martha']->seguidores,
	                "siguiendom" => $gobernadores['martha']->siguiendo,
	                "tweetsm" => $gobernadores['martha']->tweets,
	                'ultima_fecha' => $fecha,
	                'hashtags' => $hashtags
	            );
		$this->load->view('twitter/gobernadores',$datos);
	}

	public function dip_federales()
	{
		$this->load->library('fechas'); //Cargar la librería que convierte las fechas			
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;
		$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($ultima_fecha); 
		$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($ultima_fecha); 			
		$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
		$hashtags = $this->modelo_inicio->obtener_hashtags_dip_federales();
		
		$datos = array(
	                "seguidoresjm" => $dip1['jose']->seguidores,
	                "siguiendojm" => $dip1['jose']->siguiendo,
	                "tweetsjm" => $dip1['jose']->tweets,
	                "seguidoresk" => $dip1['kike']->seguidores,
	                "siguiendok" => $dip1['kike']->siguiendo,
	                "tweetsk" => $dip1['kike']->tweets,
	                "seguidoresi" => $dip1['indira']->seguidores,
	                "siguiendoi" => $dip1['indira']->siguiendo,
	                "tweetsi" => $dip1['indira']->tweets,
	                "seguidoresn" => $dip2['norma']->seguidores,
	                "siguiendon" => $dip2['norma']->siguiendo,
	                "tweetsn" => $dip2['norma']->tweets,
	                "seguidoresj" => $dip2['juan']->seguidores,
	                "siguiendoj" => $dip2['juan']->siguiendo,
	                "tweetsj" => $dip2['juan']->tweets,
	                'ultima_fecha' => $fecha,
	                'hashtags' => $hashtags
	            );
		$this->load->view('twitter/dip_federales',$datos);	
	}

	public function dip_locales()
	{
		$this->load->library('fechas'); //Cargar la librería que convierte las fechas			
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;
		$resultado = $this->modelo_consultas->obtener_cuenta_dip_locales($ultima_fecha); 	
		$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
		$hashtags = $this->modelo_inicio->obtener_hashtags_dip_locales();
		
		$datos = array(
	                "seguidoresh" => $resultado['hilda']->seguidores,
	                "siguiendoh" => $resultado['hilda']->siguiendo,
	                "tweetsh" => $resultado['hilda']->tweets,

	                "seguidores_rangel" => $resultado['rangel']->seguidores,
	                "siguiendo_rangel" => $resultado['rangel']->siguiendo,
	                "tweets_rangel" => $resultado['rangel']->tweets,

	                "seguidores_viviana" => $resultado['viviana']->seguidores,
	                "siguiendo_viviana" => $resultado['viviana']->siguiendo,
	                "tweets_viviana" => $resultado['viviana']->tweets,

	                "seguidores_crispin" => $resultado['crispin']->seguidores,
	                "siguiendo_crispin" => $resultado['crispin']->siguiendo,
	                "tweets_crispin" => $resultado['crispin']->tweets,

	                "seguidores_isis" => $resultado['isis']->seguidores,
	                "siguiendo_isis" => $resultado['isis']->siguiendo,
	                "tweets_isis" => $resultado['isis']->tweets,

	                "seguidores_janeth" => $resultado['janeth']->seguidores,
	                "siguiendo_janeth" => $resultado['janeth']->siguiendo,
	                "tweets_janeth" => $resultado['janeth']->tweets,

	                "seguidores_juanita" => $resultado['juanita']->seguidores,
	                "siguiendo_juanita" => $resultado['juanita']->siguiendo,
	                "tweets_juanita" => $resultado['juanita']->tweets,

	                "seguidores_lupe" => $resultado['lupe']->seguidores,
	                "siguiendo_lupe" => $resultado['lupe']->siguiendo,
	                "tweets_lupe" => $resultado['lupe']->tweets,

	                "seguidores_octavio" => $resultado['octavio']->seguidores,
	                "siguiendo_octavio" => $resultado['octavio']->siguiendo,
	                "tweets_octavio" => $resultado['octavio']->tweets,

	                "seguidores_sara" => $resultado['sara']->seguidores,
	                "siguiendo_sara" => $resultado['sara']->siguiendo,
	                "tweets_sara" => $resultado['sara']->tweets,

	                "seguidores_joel" => $resultado['joel']->seguidores,
	                "siguiendo_joel" => $resultado['joel']->siguiendo,
	                "tweets_joel" => $resultado['joel']->tweets,

	                "seguidores_meyly" => $resultado['meyly']->seguidores,
	                "siguiendo_meyly" => $resultado['meyly']->siguiendo,
	                "tweets_meyly" => $resultado['meyly']->tweets,

	                "seguidores_hector" => $resultado['hector']->seguidores,
	                "siguiendo_hector" => $resultado['hector']->siguiendo,
	                "tweets_hector" => $resultado['hector']->tweets,

	                "seguidores_eusebio" => $resultado['eusebio']->seguidores,
	                "siguiendo_eusebio" => $resultado['eusebio']->siguiendo,
	                "tweets_eusebio" => $resultado['eusebio']->tweets,

	                "seguidores_mesina" => $resultado['mesina']->seguidores,
	                "siguiendo_mesina" => $resultado['mesina']->siguiendo,
	                "tweets_mesina" => $resultado['mesina']->tweets,

	                "seguidores_pinto" => $resultado['pinto']->seguidores,
	                "siguiendo_pinto" => $resultado['pinto']->siguiendo,
	                "tweets_pinto" => $resultado['pinto']->tweets,

	                "seguidores_armida" => $resultado['armida']->seguidores,
	                "siguiendo_armida" => $resultado['armida']->siguiendo,
	                "tweets_armida" => $resultado['armida']->tweets,

	                "seguidores_amary" => $resultado['amary']->seguidores,
	                "siguiendo_amary" => $resultado['amary']->siguiendo,
	                "tweets_amary" => $resultado['amary']->tweets,

	                "seguidores_sergio" => $resultado['sergio']->seguidores,
	                "siguiendo_sergio" => $resultado['sergio']->siguiendo,
	                "tweets_sergio" => $resultado['sergio']->tweets,

	                "seguidores_martha" => $resultado['martha']->seguidores,
	                "siguiendo_martha" => $resultado['martha']->siguiendo,
	                "tweets_martha" => $resultado['martha']->tweets,

	                "seguidores_felicitas" => $resultado['felicitas']->seguidores,
	                "siguiendo_felicitas" => $resultado['felicitas']->siguiendo,
	                "tweets_felicitas" => $resultado['felicitas']->tweets,

	                "seguidores_santiago" => $resultado['santiago']->seguidores,
	                "siguiendo_santiago" => $resultado['santiago']->siguiendo,
	                "tweets_santiago" => $resultado['santiago']->tweets,

	                "seguidores_yadira" => $resultado['yadira']->seguidores,
	                "siguiendo_yadira" => $resultado['yadira']->siguiendo,
	                "tweets_yadira" => $resultado['yadira']->tweets,

	                "seguidores_alma" => $resultado['alma']->seguidores,
	                "siguiendo_alma" => $resultado['alma']->siguiendo,
	                "tweets_alma" => $resultado['alma']->tweets,

	                "seguidores_marthaS" => $resultado['marthaS']->seguidores,
	                "siguiendo_marthaS" => $resultado['marthaS']->siguiendo,
	                "tweets_marthaS" => $resultado['marthaS']->tweets,

	                'ultima_fecha' => $fecha,
	                'hashtags' => $hashtags
	            );
		$this->load->view('twitter/dip_locales',$datos);	
	}
	
	public function alcaldias()
	{
		$this->load->library('fechas'); //Cargar la librería que convierte las fechas			
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;
		$resultado = $this->modelo_consultas->obtener_cuenta_alcaldias($ultima_fecha); 	
		$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
		$hashtags = $this->modelo_inicio->obtener_hashtags_alcaldes();
		
		$datos = array(
	                "seguidoresh" => $resultado['hector']->seguidores,
	                "siguiendoh" => $resultado['hector']->siguiendo,
	                "tweetsh" => $resultado['hector']->tweets,

	                "seguidoresma" => $resultado['maria']->seguidores,
	                "siguiendoma" => $resultado['maria']->siguiendo,
	                "tweetsma" => $resultado['maria']->tweets,

	                "seguidoreses" => $resultado['esmeralda']->seguidores,
	                "siguiendoes" => $resultado['esmeralda']->siguiendo,
	                "tweetses" => $resultado['esmeralda']->tweets,

	                "seguidoresp" => $resultado['pico']->seguidores,
	                "siguiendop" => $resultado['pico']->siguiendo,
	                "tweetsp" => $resultado['pico']->tweets,

	                "seguidoresmarc" => $resultado['marcos']->seguidores,
	                "siguiendomarc" => $resultado['marcos']->siguiendo,
	                "tweetsmarc" => $resultado['marcos']->tweets,

	                "seguidores_yulenny" => $resultado['yulenny']->seguidores,
	                "siguiendo_yulenny" => $resultado['yulenny']->siguiendo,
	                "tweets_yulenny" => $resultado['yulenny']->tweets,

	                "seguidores_oswy" => $resultado['oswy']->seguidores,
	                "siguiendo_oswy" => $resultado['oswy']->siguiendo,
	                "tweets_oswy" => $resultado['oswy']->tweets,

	                "seguidores_salomon" => $resultado['salomon']->seguidores,
	                "siguiendo_salomon" => $resultado['salomon']->siguiendo,
	                "tweets_salomon" => $resultado['salomon']->tweets,

	                "seguidores_mario" => $resultado['mario']->seguidores,
	                "siguiendo_mario" => $resultado['mario']->siguiendo,
	                "tweets_mario" => $resultado['mario']->tweets,

	                "seguidores_arturo" => $resultado['arturo']->seguidores,
	                "siguiendo_arturo" => $resultado['arturo']->siguiendo,
	                "tweets_arturo" => $resultado['arturo']->tweets,

	                "seguidores_blanca" => $resultado['blanca']->seguidores,
	                "siguiendo_blanca" => $resultado['blanca']->siguiendo,
	                "tweets_blanca" => $resultado['blanca']->tweets,

	                "seguidores_manuel" => $resultado['manuel']->seguidores,
	                "siguiendo_manuel" => $resultado['manuel']->siguiendo,
	                "tweets_manuel" => $resultado['manuel']->tweets,

	                "seguidores_esperanza" => $resultado['esperanza']->seguidores,
	                "siguiendo_esperanza" => $resultado['esperanza']->siguiendo,
	                "tweets_esperanza" => $resultado['esperanza']->tweets,

	                "seguidores_hiram" => $resultado['hiram']->seguidores,
	                "siguiendo_hiram" => $resultado['hiram']->siguiendo,
	                "tweets_hiram" => $resultado['hiram']->tweets,

	                "seguidores_oscar" => $resultado['oscar']->seguidores,
	                "siguiendo_oscar" => $resultado['oscar']->siguiendo,
	                "tweets_oscar" => $resultado['oscar']->tweets,

	                "seguidores_jaime" => $resultado['jaime']->seguidores,
	                "siguiendo_jaime" => $resultado['jaime']->siguiendo,
	                "tweets_jaime" => $resultado['jaime']->tweets,

	                "seguidores_ruben" => $resultado['ruben']->seguidores,
	                "siguiendo_ruben" => $resultado['ruben']->siguiendo,
	                "tweets_ruben" => $resultado['ruben']->tweets,

	                "seguidores_blancaU" => $resultado['blancaU']->seguidores,
	                "siguiendo_blancaU" => $resultado['blancaU']->siguiendo,
	                "tweets_blancaU" => $resultado['blancaU']->tweets,	                

	                'ultima_fecha' => $fecha,
	                'hashtags' => $hashtags
	            );
		$this->load->view('twitter/alcaldias',$datos);	
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

	public function mapa_coordenadas()
	{	
		$colima = $this->modelo_inicio->obtener_coordenadasC(); 
		$datos = array(
						"pri" => $colima['gobernadores'],
						"jips_2015" => $colima['dipFederales'],
						"JIPSColima" => $colima['dipLocales'],
						"jipsvdea" => $colima['presidentes'],
						"coordenadasV" => $this->modelo_inicio->obtener_coordenadasV()
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

		$resultado = $this->modelo_consultas->obtener_cuenta_partidos(); 
		$menciones = $this->modelo_consultas->menciones_gobernadores();

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
				      'siguiendo_selfieNacho' => $selfieNacho->siguiendo, 'tweets_selfieNacho' => $selfieNacho->tweets,
				      "jips_2015" => $resultado['jips_2015'],
				      "nacho" => $menciones['nacho']
					  );
		$this->load->view('twitter/valoracionGobernadores',$datos);
	}

	public function partidos()
	{
		$resultado = $this->modelo_consultas->obtener_cuenta_partidos(); 
		$datos = array(
						"pri" => $resultado['pri'],
						"jips_2015" => $resultado['jips_2015'],
						"JIPSColima" => $resultado['JIPSColima'],
						"jipsvdea" => $resultado['jipsvdea'],
						"MiSelfiecoNacho" => $resultado['MiSelfiecoNacho'],
						"PANDColima" => $resultado['PANDColima'],
						"cdepancolima" => $resultado['cdepancolima'],
						"PRDcolima" => $resultado['PRDcolima'],
						"MovCiudadanoCol" => $resultado['MovCiudadanoCol'],
						"ColPartidoVerde" => $resultado['ColPartidoVerde'],
						"PT_Colima" => $resultado['PT_Colima'],
						"MorenaColima1" => $resultado['MorenaColima1']
	            	  );
		$this->load->view('twitter/partidos',$datos);
	}
}