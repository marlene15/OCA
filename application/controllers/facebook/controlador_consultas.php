<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_consultas extends CI_Controller {

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
		$this->load->model('facebook/modelo_consultas');		
		$this->load->model('facebook/modelo_inicio');
		$this->load->database('facebook');
		$this->verificar_sesion();
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
		$this->load->library('fechas');
		//Colocar nuevo formato a la fecha para guardar en la base como date
		$fecha = $this->input->post('fecha');	
		$vtab = $this->input->post('vtab');
		$fecha_nueva="";
		if($fecha!=null)
		{
			$fecha_nueva=$this->fechas->fecha_dd_mes_aaaa($fecha);
		}
		else{
			$fecha_nueva='NULL';
		}
		$ExisteFecha = $this->modelo_consultas->ExisteFecha($fecha_nueva);
		$existe = 0;
		if ($ExisteFecha==1) 
		{ //Si existe la fecha consultada 
			$gobernadores = $this->modelo_consultas->obtener_cuenta_gobernadores($fecha_nueva); 
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente
			$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
			$ultima_fecha = $ultima_fecha->ultima_fecha;
			$gobernadores = $this->modelo_consultas->obtener_cuenta_gobernadores($ultima_fecha); 		
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}		
		$datos = array(
	                "megustaci" => $gobernadores['nacho']->Megusta,
	                "seguidoresci" => $gobernadores['nacho']->PersonasHablan,
	                
	                "megustacj" => $gobernadores['jorge']->Megusta,
	                "seguidorescj" => $gobernadores['jorge']->PersonasHablan,

	                "megustacm" => $gobernadores['martha']->Megusta,
	                "seguidorescm" => $gobernadores['martha']->PersonasHablan,

	                "megustacd" => $gobernadores['david']->Megusta,
	                "seguidorescd" => $gobernadores['david']->PersonasHablan,
	                
	                "megustacl" => $gobernadores['locho']->Megusta,
	                "seguidorescl" => $gobernadores['locho']->PersonasHablan,
	                
	                "megustacf" => $gobernadores['francisco']->Megusta,
	                "seguidorescf" => $gobernadores['francisco']->PersonasHablan,

	                "megustacg" => $gobernadores['gerardo']->Megusta,
	                "seguidorescg" => $gobernadores['gerardo']->PersonasHablan,

	                "megustacc" => $gobernadores['carlos']->Megusta,
	                "seguidorescc" => $gobernadores['carlos']->PersonasHablan,	
	                
	                'ultima_fecha' => $fecha,
	                'existe' => $existe,
	                "vtab" => $vtab
	            );
		$this->load->view('facebook/chars/char_gobernadores',$datos);
	}

	public function DFDistritoI()
	{
		$this->load->library('fechas');
		//Colocar nuevo formato a la fecha para guardar en la base como date
		$fecha = $this->input->post('fecha');	
		$vtab = $this->input->post('vtab');
		$fecha_nueva="";
		if($fecha!=null)
		{
			$fecha_nueva=$this->fechas->fecha_dd_mes_aaaa($fecha);
		}
		else{
			$fecha_nueva='NULL';
		}
		$ExisteFecha = $this->modelo_consultas->ExisteFecha($fecha_nueva);
		$existe = 0;
		if ($ExisteFecha==1) 
		{ //Si existe la fecha consultada 
			$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($fecha_nueva); 
			$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($fecha_nueva);
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente
			$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
			$ultima_fecha = $ultima_fecha->ultima_fecha;
			$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($ultima_fecha); 
			$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($ultima_fecha); 			
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}
		
		$datos = array(
	                "megustacj" => $dip1['josemanuel']->Megusta,
	                "seguidorescj" => $dip1['josemanuel']->PersonasHablan,
	                
	                "megustace" => $dip1['enriquerojas']->Megusta,
	                "seguidoresce" => $dip1['enriquerojas']->PersonasHablan,

	                "megustaci" => $dip1['indiravizcaino']->Megusta,
	                "seguidoresci" => $dip1['indiravizcaino']->PersonasHablan,

	                "megustacs" => $dip1['silviadias']->Megusta,
	                "seguidorescs" => $dip1['silviadias']->PersonasHablan,
	                
	                "megustaca" => $dip1['angelesmarquez']->Megusta,
	                "seguidoresca" => $dip1['angelesmarquez']->PersonasHablan,
	                
	                "megustacr" => $dip1['rosalinagarcia']->Megusta,
	                "seguidorescr" => $dip1['rosalinagarcia']->PersonasHablan,

	                "megustacc" => $dip1['claudiaibarra']->Megusta,
	                "seguidorescc" => $dip1['claudiaibarra']->PersonasHablan,

	                //Distrito II
	                "megustacn" => $dip2['normagalindo']->Megusta,
	                "seguidorescn" => $dip2['normagalindo']->PersonasHablan,			                

	                "megustacp" => $dip2['pedrofernandez']->Megusta,
	                "seguidorescp" => $dip2['pedrofernandez']->PersonasHablan,

	                "megustacev" => $dip2['eliasvalencia']->Megusta,
	                "seguidorescev" => $dip2['eliasvalencia']->PersonasHablan,	

	                "megustacju" => $dip2['juancarlos']->Megusta,
	                "seguidorescju" => $dip2['juancarlos']->PersonasHablan,		

	                "megustacm" => $dip2['marisamesina']->Megusta,
	                "seguidorescm" => $dip2['marisamesina']->PersonasHablan,							                					
	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab
	            );
		$this->load->view('facebook/chars/char_dipFederales',$datos);
	}

	public function dip_locales()
	{
		$this->load->library('fechas');
		//Colocar nuevo formato a la fecha para guardar en la base como date
		$fecha = $this->input->post('fecha');	
		$vtab = $this->input->post('vtab');

		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;

		if($fecha!=null)
		{
			$fecha_nueva=$this->fechas->fecha_dd_mes_aaaa($fecha);
		}
		else{
			$fecha_nueva='NULL';
		}
		$ExisteFecha = $this->modelo_consultas->ExisteFecha($fecha_nueva);
		$existe = 0;
		if ($ExisteFecha==1) 
		{ //Si existe la fecha consultada 
			$resultado = $this->modelo_consultas->obtener_cuenta_dip_locales($fecha_nueva); 
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente			
			$resultado = $this->modelo_consultas->obtener_cuenta_dip_locales($ultima_fecha); 			
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}

		$ultima_fecha=$this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);

		if($resultado['isis']=='FALSO'){
			$seguidores_isis=0;
			$siguiendo_isis=0;
			$tweets_isis=0;
		}
		else{
			$seguidores_isis=$resultado['isis']->seguidores;
			$siguiendo_isis=$resultado['isis']->siguiendo;
			$tweets_isis=$resultado['isis']->tweets;
		}

		if($resultado['felicitas']=='FALSO'){
			$seguidores_felicitas=0;
			$siguiendo_felicitas=0;
			$tweets_felicitas=0;
		}
		else{
			$seguidores_felicitas=$resultado['felicitas']->seguidores;
			$siguiendo_felicitas=$resultado['felicitas']->siguiendo;
			$tweets_felicitas=$resultado['felicitas']->tweets;
		}
		
		if($resultado['yadira']=='FALSO'){
			$seguidores_yadira=0;
			$siguiendo_yadira=0;
			$tweets_yadira=0;
		}
		else{
			$seguidores_yadira=$resultado['yadira']->seguidores;
			$siguiendo_yadira=$resultado['yadira']->siguiendo;
			$tweets_yadira=$resultado['yadira']->tweets;
		}

		if($resultado['alma']=='FALSO'){
			$seguidores_alma=0;
			$siguiendo_alma=0;
			$tweets_alma=0;
		}
		else{
			$seguidores_alma=$resultado['alma']->seguidores;
			$siguiendo_alma=$resultado['alma']->siguiendo;
			$tweets_alma=$resultado['alma']->tweets;
		}

		if($resultado['marthaS']=='FALSO'){
			$seguidores_marthaS=0;
			$siguiendo_marthaS=0;
			$tweets_marthaS=0;
		}
		else{
			$seguidores_marthaS=$resultado['marthaS']->seguidores;
			$siguiendo_marthaS=$resultado['marthaS']->siguiendo;
			$tweets_marthaS=$resultado['marthaS']->tweets;
		}
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

	                "seguidores_isis" => $seguidores_isis,
	                "siguiendo_isis" => $siguiendo_isis,
	                "tweets_isis" => $tweets_isis,

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

	                "seguidores_felicitas" => $seguidores_felicitas,
	                "siguiendo_felicitas" => $siguiendo_felicitas,
	                "tweets_felicitas" => $tweets_felicitas,

	                "seguidores_santiago" => $resultado['santiago']->seguidores,
	                "siguiendo_santiago" => $resultado['santiago']->siguiendo,
	                "tweets_santiago" => $resultado['santiago']->tweets,

	                "seguidores_yadira" => $seguidores_yadira,
	                "siguiendo_yadira" => $siguiendo_yadira,
	                "tweets_yadira" => $tweets_yadira,

	                "seguidores_alma" => $seguidores_alma,
	                "siguiendo_alma" => $siguiendo_alma,
	                "tweets_alma" => $tweets_alma,

	                "seguidores_marthaS" => $seguidores_marthaS,
	                "siguiendo_marthaS" => $siguiendo_marthaS,
	                "tweets_marthaS" => $tweets_marthaS,

	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab,
	                'ultima_fecha' => $ultima_fecha
	            );
		$this->load->view('twitter/chars/char_dipLocales',$datos);
	}

	public function alcaldias()
	{
		$this->load->library('fechas');
		//Colocar nuevo formato a la fecha para guardar en la base como date
		$fecha = $this->input->post('fecha');	
		$vtab = $this->input->post('vtab');

		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;

		if($fecha!=null)
		{
			$fecha_nueva=$this->fechas->fecha_dd_mes_aaaa($fecha);
		}
		else{
			$fecha_nueva='NULL';
		}
		$ExisteFecha = $this->modelo_consultas->ExisteFecha($fecha_nueva);
		$existe = 0;
		if ($ExisteFecha==1) 
		{ //Si existe la fecha consultada 
			$resultado = $this->modelo_consultas->obtener_cuenta_alcaldias($fecha_nueva); 
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente			
			$resultado = $this->modelo_consultas->obtener_cuenta_alcaldias($ultima_fecha); 			
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}

		$ultima_fecha=$this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);

		if($resultado['oscar']=='FALSO'){
			$seguidores_oscar=0;
			$siguiendo_oscar=0;
			$tweets_oscar=0;
		}
		else{
			$seguidores_oscar=$resultado['oscar']->seguidores;
			$siguiendo_oscar=$resultado['oscar']->siguiendo;
			$tweets_oscar=$resultado['oscar']->tweets;
		}	

		if($resultado['jaime']=='FALSO'){
			$seguidores_jaime=0;
			$siguiendo_jaime=0;
			$tweets_jaime=0;
		}
		else{
			$seguidores_jaime=$resultado['jaime']->seguidores;
			$siguiendo_jaime=$resultado['jaime']->siguiendo;
			$tweets_jaime=$resultado['jaime']->tweets;
		}

		if($resultado['ruben']=='FALSO'){
			$seguidores_ruben=0;
			$siguiendo_ruben=0;
			$tweets_ruben=0;
		}
		else{
			$seguidores_ruben=$resultado['ruben']->seguidores;
			$siguiendo_ruben=$resultado['ruben']->siguiendo;
			$tweets_ruben=$resultado['ruben']->tweets;
		}

		if($resultado['blancaU']=='FALSO'){
			$seguidores_blancaU=0;
			$siguiendo_blancaU=0;
			$tweets_blancaU=0;
		}
		else{
			$seguidores_blancaU=$resultado['blancaU']->seguidores;
			$siguiendo_blancaU=$resultado['blancaU']->siguiendo;
			$tweets_blancaU=$resultado['blancaU']->tweets;
		}	
		
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

	                "seguidores_oscar" => $seguidores_oscar,
	                "siguiendo_oscar" => $siguiendo_oscar,
	                "tweets_oscar" => $tweets_oscar,

	                "seguidores_jaime" => $seguidores_jaime,
	                "siguiendo_jaime" => $siguiendo_jaime,
	                "tweets_jaime" => $tweets_jaime,

	                "seguidores_ruben" => $seguidores_ruben,
	                "siguiendo_ruben" => $siguiendo_ruben,
	                "tweets_ruben" => $tweets_ruben,

	                "seguidores_blancaU" => $seguidores_blancaU,
	                "siguiendo_blancaU" => $siguiendo_blancaU,
	                "tweets_blancaU" => $tweets_blancaU,	                

	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab,
	                'ultima_fecha' => $ultima_fecha
	            );
		$this->load->view('twitter/chars/char_Alcaldias',$datos);	
	}

	public function nube_gobernadores()
	{
		$mes = $this->input->post('mes');	
		$hashtags = $this->modelo_inicio->obtener_hashtags_gobernadores($mes);
		$datos = array(
	                "hashtags" => $hashtags,
	                "mes" => $mes
	            );
		$this->load->view('twitter/chars/char_nube',$datos);
	}
}