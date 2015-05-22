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
		$this->load->model('facebook/modelo_inicio');
		$this->load->database('facebook');
		$this->verificar_sesion();
	}

	public function index()
	{		
		$consulta = $this->modelo_inicio->consulta();
		if($consulta != FALSE)
		{
			$data = array('partido' => $consulta->Partido, 'nombre' => $consulta->Nombre);
			$this->load->view('facebook/prueba',$data);
		}
	}
	public function verificar_sesion()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if (!isset($is_logged_in) || $is_logged_in != TRUE) {
			redirect('login');
			die();
		}
	}

//CANDIDATOS A GOBERNADOR
	public function gobernadores()
	{
		$ignacioperalta = $this->modelo_inicio->Obtener_CGIgnacioPeralta();
		$jorgepreciado = $this->modelo_inicio->Obtener_CGJorgeLuis();
		$leonciomoran = $this->modelo_inicio->Obtener_CGLeoncioMoran();
		$marthazepeda = $this->modelo_inicio->Obtener_CGMarthaZepeda();
		$davidmunro = $this->modelo_inicio->Obtener_CGDavidMunro();
		$franciscogallardo = $this->modelo_inicio->Obtener_CGFranciscoGallardo();
		$gerardogalvan = $this->modelo_inicio->Obtener_CGGerardoGalvan();
		$carlosbarbazan = $this->modelo_inicio->Obtener_CGCarlosBarbazan();

		if($ignacioperalta != FALSE and $jorgepreciado != FALSE and $leonciomoran != FALSE and $marthazepeda != FALSE and $davidmunro != FALSE and $franciscogallardo != FALSE and $gerardogalvan != FALSE and $carlosbarbazan != FALSE)
		{
			$data = array('megustaci' => $ignacioperalta->Megusta, 'seguidoresci' => $ignacioperalta->PersonasHablan, 
				          'megustacj' => $jorgepreciado->Megusta, 'seguidorescj' => $jorgepreciado->PersonasHablan,
				          'megustacm' => $marthazepeda->Megusta, 'seguidorescm' => $marthazepeda->PersonasHablan,
				          'megustacd' => $davidmunro->Megusta, 'seguidorescd' => $davidmunro->PersonasHablan,
				          'megustacl' => $leonciomoran->Megusta, 'seguidorescl' => $leonciomoran->PersonasHablan,				          
				          'megustacf' => $franciscogallardo->Megusta, 'seguidorescf' => $franciscogallardo->PersonasHablan,
				          'megustacg' => $gerardogalvan->Megusta, 'seguidorescg' => $gerardogalvan->PersonasHablan,
				          'megustacc' => $carlosbarbazan->Megusta, 'seguidorescc' => $carlosbarbazan->PersonasHablan);
			$this->load->view('facebook/gobernador',$data);
		}
	}

//CANDIDATO A DIPUTADOS FEDERAL DISTRITIO I y DITRITO II
	public function DFDistritoI()
		{
			//Distrito I
			$josemanuel = $this->modelo_inicio->Obtener_CDFDIJosemanuel();
			$enriquerojas = $this->modelo_inicio->Obtener_CDFDIEnriquerojas();
			$indiravizcaino = $this->modelo_inicio->Obtener_CDFDIIndiravizcaino();
			$silviadias = $this->modelo_inicio->Obtener_CDFDISilviaDias();
			$angelesmarquez = $this->modelo_inicio->Obtener_CDFDIAngelesMarquez();
			$rosalinagarcia = $this->modelo_inicio->Obtener_CDFDIRosalindaGarcia();
			$claudiaibarra = $this->modelo_inicio->Obtener_CDFDIClaudiaIbarra();

			//Distrito II
			$normagalindo = $this->modelo_inicio->Obtener_CDFDIINormagalindo();
			$pedrofernandez = $this->modelo_inicio->Obtener_CDFDIIPedrofernandez();
			$eliasvalencia = $this->modelo_inicio->Obtener_CDFDIIEliasvalencia();
			$juancarlos = $this->modelo_inicio->Obtener_CDFDIIJuancarlos();
			$marisamesina = $this->modelo_inicio->Obtener_CDFDIIMarisamesina();			

			if($josemanuel != FALSE and $enriquerojas != FALSE and $indiravizcaino != FALSE and $silviadias != FALSE and $angelesmarquez != FALSE and $rosalinagarcia != FALSE and $claudiaibarra  != FALSE and $normagalindo != FALSE and $pedrofernandez != FALSE and $eliasvalencia != FALSE and $juancarlos != FALSE and $marisamesina != FALSE)
			{
				$data = array('megustaci' => $josemanuel->Megusta, 'seguidoresci' => $josemanuel->PersonasHablan,
					          'megustacj' => $enriquerojas->Megusta, 'seguidorescj' => $enriquerojas->PersonasHablan,
					          'megustacl' => $indiravizcaino->Megusta, 'seguidorescl' => $indiravizcaino->PersonasHablan,
					          'megustacm' => $silviadias->Megusta, 'seguidorescm' => $silviadias->PersonasHablan,
					          'megustacd' => $angelesmarquez->Megusta, 'seguidorescd' => $angelesmarquez->PersonasHablan,
					          'megustacf' => $rosalinagarcia->Megusta, 'seguidorescf' => $rosalinagarcia->PersonasHablan,
					          'megustacg' => $claudiaibarra->Megusta, 'seguidorescg' => $claudiaibarra->PersonasHablan,
					          'megustacdn' => $normagalindo->Megusta, 'seguidorescdn' => $normagalindo->PersonasHablan,
					          'megustacdp' => $pedrofernandez->Megusta, 'seguidorescdp' => $pedrofernandez->PersonasHablan,
					          'megustacde' => $eliasvalencia->Megusta, 'seguidorescde' => $eliasvalencia->PersonasHablan,
					          'megustacdj' => $juancarlos->Megusta, 'seguidorescdj' => $juancarlos->PersonasHablan,
					          'megustacdm' => $marisamesina->Megusta, 'seguidorescdm' => $marisamesina->PersonasHablan);
				$this->load->view('facebook/diputadofederal',$data);
			}
		}

//CANDIDATO A PRESIDENTE MUNICIPAL (ALCALDIA)
	public function CAlcaldias()
		{
			//PRESIDENTE MUNICIPAL COLIMA
			$hectorinsua = $this->modelo_inicio->Obtener_CPMColimaHectorinsua();
			$oscarvaldovinos = $this->modelo_inicio->Obtener_CPMColimaOscarvaldovinos();
			$esmeraldacardenas = $this->modelo_inicio->Obtener_CPMColimaEsmeraldacardenas();
			$juanvazquez = $this->modelo_inicio->Obtener_CPMColimaJuanvazquez();
			$paulovelazquez = $this->modelo_inicio->Obtener_CPMColimaPaulovelazquez();
			$elenaabaroa = $this->modelo_inicio->Obtener_CPMColimaElenaabaroa();
			$brendamayoral = $this->modelo_inicio->Obtener_CPMColimaBrendamayoral();

			// //PRESIDENTE MUNICIPAL MANZANILLO
			$gabrielabenavides = $this->modelo_inicio->Obtener_CPMManzanilloGB();
			$franciscozepeda = $this->modelo_inicio->Obtener_CPMManzanilloFZ();
			$marthaleal = $this->modelo_inicio->Obtener_CPMManzanilloML();
			$marcosbarajas = $this->modelo_inicio->Obtener_CPMManzanilloMB();
			$rubenromo = $this->modelo_inicio->Obtener_CPMManzanilloRR();
			$hectorlara = $this->modelo_inicio->Obtener_CPMManzanilloHL();
			$victorgranados = $this->modelo_inicio->Obtener_CPMManzanilloVG();

			// //PRESIDENTE MUNICIPAL VILLA DE ALVAREZ
			$yulennycortes = $this->modelo_inicio->Obtener_CPMVilladeAlvarezYC();
			$oswydelgado = $this->modelo_inicio->Obtener_CPMVilladeAlvarezOD();
			$jaimesotelo = $this->modelo_inicio->Obtener_CPMVilladeAlvarezJS();
			$berenicegonzalez = $this->modelo_inicio->Obtener_CPMVilladeAlvarezBG();
			$hectoranaya = $this->modelo_inicio->Obtener_CPMVilladeAlvarezHA();
			$melchorarroyo = $this->modelo_inicio->Obtener_CPMVilladeAlvarezMA();
			$edgargonzalez = $this->modelo_inicio->Obtener_CPMVilladeAlvarezEG();			

			// //PRESIDENTE MUNICIPAL COMALA
			$salomonsalazar = $this->modelo_inicio->Obtener_CPMComalaSS();
			$mariopena = $this->modelo_inicio->Obtener_CPMComalaMP();
			$zenaidavicente = $this->modelo_inicio->Obtener_CPMComalaZV();
			$mariocarrillo = $this->modelo_inicio->Obtener_CPMComalaMC();

			// //PRESIDENTE MUNICIPAL TECOMAN
			$arturogarcia = $this->modelo_inicio->Obtener_CPMTecomanAG();
			$rubensantos = $this->modelo_inicio->Obtener_CPMTecomanRS();
			$angelvenegas = $this->modelo_inicio->Obtener_CPMTecomanAV();

			// //PRESIDENTE MUNICIPAL COQUIMATLAN
			$orlandolino = $this->modelo_inicio->Obtener_CPMCoquimatlanOL();
			$enriquepreciado = $this->modelo_inicio->Obtener_CPMCoquimatlanEP();
			$sergiopolanco = $this->modelo_inicio->Obtener_CPMCoquimatlanSP();

			// //PRESIDENTE MUNICIPAL CUAHUTEMOC
			$rafaelmendoza = $this->modelo_inicio->Obtener_CPMCuahutemocRM();
			$blancarocha = $this->modelo_inicio->Obtener_CPMCuahutemocBR();
			$anazamora = $this->modelo_inicio->Obtener_CPMCuahutemocAZ();
			$gilbertoascencio = $this->modelo_inicio->Obtener_CPMCuahutemocGA();
			$blancaursua = $this->modelo_inicio->Obtener_CPMCuahutemocBU();

			// //PRESIDENTE MUNICIPAL MINATITLAN
			$manuelpalacio = $this->modelo_inicio->Obtener_CPMMinatitlanMP();
			$berthapicasso = $this->modelo_inicio->Obtener_CPMMinatitlanBP();
			$normacampos = $this->modelo_inicio->Obtener_CPMMinatitlanNC();	

			// //PRESIDENTE MUNICIPAL IXTLAHUACAN
			$crispingutierrez = $this->modelo_inicio->Obtener_CPMIxtlahuacanCG();
			$hiramamador = $this->modelo_inicio->Obtener_CPMIxtlahuacanHA();
			$germanruelas = $this->modelo_inicio->Obtener_CPMIxtlahuacanGR();	
			$ignaciagutierrez = $this->modelo_inicio->Obtener_CPMIxtlahuacanIG();	


			// //PRESIDENTE MUNICIPAL ARMERIA
			$esperanzaalcaraz = $this->modelo_inicio->Obtener_CPMArmeriaEA();
			$miguelruelas = $this->modelo_inicio->Obtener_CPMArmeriaMR();
			$salvadorbueno = $this->modelo_inicio->Obtener_CPMArmeriaSB();


			if($hectorinsua != FALSE and $oscarvaldovinos != FALSE and $esmeraldacardenas != FALSE and $juanvazquez != FALSE and $paulovelazquez != FALSE and $elenaabaroa != FALSE and $brendamayoral != FALSE) 
				// and
				// $gabrielabenavides != FALSE and $franciscozepeda != FALSE and $marthaleal != FALSE and $marcosbarajas != FALSE and $rubenromo != FALSE and $hectorlara != FALSE and $victorgranados != FALSE and
				// $yulennycortes != FALSE and $oswydelgado != FALSE and $jaimesotelo != FALSE and $berenicegonzalez != FALSE and $hectoranaya != FALSE and $melchorarroyo != FALSE and $edgargonzalez != FALSE and
				// $salomonsalazar != FALSE and $mariopena != FALSE and $zenaidavicente != FALSE and $mariocarrillo != FALSE and $arturogarcia != FALSE and $rubensantos != FALSE and $angelvenegas != FALSE and 
				// $orlandolino != FALSE and $enriquepreciado != FALSE and $sergiopolanco != FALSE and $rafaelmendoza != FALSE and $blancarocha != FALSE and $anazamora != FALSE and $gilbertoascencio != FALSE and
				// $blancaursua != FALSE and $manuelpalacio != FALSE and $berthapicasso != FALSE and $normacampos != FALSE and $esperanzaalcaraz != FALSE and $miguelruelas != FALSE and $salvadorbueno != FALSE and
				// $crispingutierrez != FALSE and $hiramamador != FALSE and $germanruelas != FALSE and $ignaciagutierrez != FALSE)
			{
				$data = array(
							  //COLIMA
							  'megustac1' => $hectorinsua->Megusta, 'seguidoresc1' => $hectorinsua->PersonasHablan,
					          'megustac2' => $oscarvaldovinos->Megusta, 'seguidoresc2' => $oscarvaldovinos->PersonasHablan,
					          'megustac3' => $esmeraldacardenas->Megusta, 'seguidoresc3' => $esmeraldacardenas->PersonasHablan,
					          'megustac4' => $juanvazquez->Megusta, 'seguidoresc4' => $juanvazquez->PersonasHablan,
					          'megustac5' => $paulovelazquez->Megusta, 'seguidoresc5' => $paulovelazquez->PersonasHablan,
					          'megustac6' => $elenaabaroa->Megusta, 'seguidoresc6' => $elenaabaroa->PersonasHablan,
					          'megustac7' => $brendamayoral->Megusta, 'seguidoresc7' => $brendamayoral->PersonasHablan,
					          // //MANZANILLO	
					          'megustac8' => $gabrielabenavides->Megusta, 'seguidoresc8' => $gabrielabenavides->PersonasHablan,
					          // 'megustacn9' => $franciscozepeda->Megusta, 'seguidorescn9' => $franciscozepeda->PersonasHablan,
					          'megustac10' => $marthaleal->Megusta, 'seguidoresc10' => $marthaleal->PersonasHablan,
					          'megustac11' => $marcosbarajas->Megusta, 'seguidoresc11' => $marcosbarajas->PersonasHablan,
					          'megustac12' => $rubenromo->Megusta, 'seguidoresc12' => $rubenromo->PersonasHablan,
					          'megustac13' => $hectorlara->Megusta, 'seguidoresc13' => $hectorlara->PersonasHablan,					          					          
					          'megustac14' => $victorgranados->Megusta, 'seguidoresc14' => $victorgranados->PersonasHablan,
					          // //VILLA DE ALVAREZ
					          'megustac15' => $yulennycortes->Megusta, 'seguidoresc15' => $yulennycortes->PersonasHablan,
					          'megustac16' => $oswydelgado->Megusta, 'seguidoresc16' => $oswydelgado->PersonasHablan,					          
					          'megustac17' => $jaimesotelo->Megusta, 'seguidoresc17' => $jaimesotelo->PersonasHablan,
					          'megustac18' => $berenicegonzalez->Megusta, 'seguidoresc18' => $berenicegonzalez->PersonasHablan,
					          'megustac19' => $hectoranaya->Megusta, 'seguidoresc19' => $hectoranaya->PersonasHablan,
					          'megustac20' => $melchorarroyo->Megusta, 'seguidoresc20' => $melchorarroyo->PersonasHablan,
					          'megustac21' => $edgargonzalez->Megusta, 'seguidoresc21' => $edgargonzalez->PersonasHablan,
					          //COMALA
					          'megustac22' => $salomonsalazar->Megusta, 'seguidoresc22' => $salomonsalazar->PersonasHablan,
					          'megustac23' => $mariopena->Megusta, 'seguidoresc23' => $mariopena->PersonasHablan,					          
					          'megustac24' => $zenaidavicente->Megusta, 'seguidoresc24' => $zenaidavicente->PersonasHablan,
					          'megustac25' => $mariocarrillo->Megusta, 'seguidoresc25' => $mariocarrillo->PersonasHablan,
					          // //TECOMAN
					          'megustac26' => $arturogarcia->Megusta, 'seguidoresc26' => $arturogarcia->PersonasHablan,
					          'megustac27' => $rubensantos->Megusta, 'seguidoresc27' => $rubensantos->PersonasHablan,
					          'megustac28' => $angelvenegas->Megusta, 'seguidoresc28' => $angelvenegas->PersonasHablan,
					          //COQUIMATLAN
					          'megustac29' => $orlandolino->Megusta, 'seguidoresc29' => $orlandolino->PersonasHablan,					          					          
					          'megustac30' => $enriquepreciado->Megusta, 'seguidoresc30' => $enriquepreciado->PersonasHablan,
					          'megustac31' => $sergiopolanco->Megusta, 'seguidoresc31' => $sergiopolanco->PersonasHablan,
					          // //CUAHUTEMOC
					          'megustac32' => $rafaelmendoza->Megusta, 'seguidoresc32' => $rafaelmendoza->PersonasHablan,					          
					          'megustac33' => $blancarocha->Megusta, 'seguidoresc33' => $blancarocha->PersonasHablan,
					          'megustac34' => $anazamora->Megusta, 'seguidoresc34' => $anazamora->PersonasHablan,					          
					          'megustac35' => $gilbertoascencio->Megusta, 'seguidoresc35' => $gilbertoascencio->PersonasHablan,
					          'megustac36' => $blancaursua->Megusta, 'seguidoresc36' => $blancaursua->PersonasHablan,					          					          
					          // //IXTLAHUACAN
					          'megustac43' => $crispingutierrez->Megusta, 'seguidoresc43' => $crispingutierrez->PersonasHablan,					          
					          'megustac44' => $hiramamador->Megusta, 'seguidoresc44' => $hiramamador->PersonasHablan,
					          'megustac45' => $germanruelas->Megusta, 'seguidoresc45' => $germanruelas->PersonasHablan,					          
					          'megustac46' => $ignaciagutierrez->Megusta, 'seguidoresc46' => $ignaciagutierrez->PersonasHablan,
					          // //MINATITLAN
					          'megustac37' => $manuelpalacio->Megusta, 'seguidoresc37' => $manuelpalacio->PersonasHablan,
					          'megustac38' => $berthapicasso->Megusta, 'seguidoresc38' => $berthapicasso->PersonasHablan,
					          'megustac39' => $normacampos->Megusta, 'seguidoresc39' => $normacampos->PersonasHablan,					          
					          // //ARMERIA
					          'megustac40' => $esperanzaalcaraz->Megusta, 'seguidoresc40' => $esperanzaalcaraz->PersonasHablan,
					          'megustac41' => $miguelruelas->Megusta, 'seguidoresc41' => $miguelruelas->PersonasHablan,					          
					          'megustac42' => $salvadorbueno->Megusta, 'seguidoresc42' => $salvadorbueno->PersonasHablan);

				$this->load->view('facebook/alcaldias',$data);	
			}
		}
//CANDIDATO A DIPUTADO LOCAL DISTRITO I al XVI
	public function CDLDISTRITOIALXVI()
		{
			//Distrito I
			$Hildaceballos = $this->modelo_inicio->Obtener_CDLDIHC();
			$Josecardenas = $this->modelo_inicio->Obtener_CDLDIJC();
			$Leonardogutierrez = $this->modelo_inicio->Obtener_CDLDILG();
			//Distrito II
			$nicolascontreras = $this->modelo_inicio->Obtener_CDLDIINC();
			$guillermorangel = $this->modelo_inicio->Obtener_CDLDIIGR();
			$SandraRammirez = $this->modelo_inicio->Obtener_CDLDIISR();
			$joseGarcia = $this->modelo_inicio->Obtener_CDLDIIJG();
			$arturogarcia = $this->modelo_inicio->Obtener_CDLDIIAG();
			$lilianarodriguez = $this->modelo_inicio->Obtener_CDLDIILR();
			//Distrito III
			$crispinguerra = $this->modelo_inicio->Obtener_CDLDIIICG();
			$almaarreola = $this->modelo_inicio->Obtener_CDLDIIIAA();
			$marthafarias = $this->modelo_inicio->Obtener_CDLDIIIMF();
			$isisvillasernor = $this->modelo_inicio->Obtener_CDLDIIIIV();
			$octavioaguilar = $this->modelo_inicio->Obtener_CDLDIIIOA();
			$patriciaperegrina = $this->modelo_inicio->Obtener_CDLDIIIPP();
			$gloriaarceo = $this->modelo_inicio->Obtener_CDLDIIIGA();
			//Distrito IV
			$janethpaz = $this->modelo_inicio->Obtener_CDLDIVJP();
			$juanaandres = $this->modelo_inicio->Obtener_CDLDIVJA();
			$sergioricardo = $this->modelo_inicio->Obtener_CDLDIVSR();
			$andresorozco = $this->modelo_inicio->Obtener_CDLDIVAO();
			//Distrito V
			$ramirotoscano = $this->modelo_inicio->Obtener_CDLDVRT();
			$josebenavides = $this->modelo_inicio->Obtener_CDLDVJB();
			$yulianaaguilar = $this->modelo_inicio->Obtener_CDLDVYA();
			//Distrito VI
			$SandrayolandaRammirez = $this->modelo_inicio->Obtener_CDLDVISYR();
			$octaviotintos = $this->modelo_inicio->Obtener_CDLDVIOT();
			$sergiosilva = $this->modelo_inicio->Obtener_CDLDVISS();
			$leticiamendoza = $this->modelo_inicio->Obtener_CDLDVILM();
			$getzemaniibarra = $this->modelo_inicio->Obtener_CDLDVIGI();
			//Distrito VII
			$franciscoceballo = $this->modelo_inicio->Obtener_CDLDVIIFC();
			$alfredohernandez = $this->modelo_inicio->Obtener_CDLDVIIAH();
			$saracernas = $this->modelo_inicio->Obtener_CDLDVIISC();
			$jooelpadilla = $this->modelo_inicio->Obtener_CDLDVIIJP();
			$socorrobayardo = $this->modelo_inicio->Obtener_CDLDVIISB();
			$erendiraandrade = $this->modelo_inicio->Obtener_CDLDVIIEA();
			//Distrito VIII
			$meylypastora = $this->modelo_inicio->Obtener_CDLDVIIIMP();
			$hectormagana = $this->modelo_inicio->Obtener_CDLDVIIIHM();
			$alfredoherrera = $this->modelo_inicio->Obtener_CDLDVIIIAH();
			$adelaidafernandez = $this->modelo_inicio->Obtener_CDLDVIIIAF();
			$juanjuarez = $this->modelo_inicio->Obtener_CDLDVIIIJJ();
			//Distrito IX
			$eusebiomesina = $this->modelo_inicio->Obtener_CDLDIXEM();
			$beatrizinsunza = $this->modelo_inicio->Obtener_CDLDIXBI();
			$selenelopez = $this->modelo_inicio->Obtener_CDLDIXSL();
			$angelicaochoa = $this->modelo_inicio->Obtener_CDLDIXAO();
			$mauriciobarreto = $this->modelo_inicio->Obtener_CDLDIXMB();
			//Distrito X
			$juanpinto = $this->modelo_inicio->Obtener_CDLDXJP();
			$ricardosevilla = $this->modelo_inicio->Obtener_CDLDXRS();
			$raquelcardenas = $this->modelo_inicio->Obtener_CDLDXRC();
			$marcorodarte = $this->modelo_inicio->Obtener_CDLDXMR();
			$salvadorjuarez = $this->modelo_inicio->Obtener_CDLDXSJ();
			//Distrito XI
			$miguelgarcia = $this->modelo_inicio->Obtener_CDLDXIMG();
			$armidanunes = $this->modelo_inicio->Obtener_CDLDXIAN();
			$aldovega = $this->modelo_inicio->Obtener_CDLDXIAV();
			$sebastianesparza = $this->modelo_inicio->Obtener_CDLDXISE();
			$teresahernandez = $this->modelo_inicio->Obtener_CDLDXITH();
			$dianatopete = $this->modelo_inicio->Obtener_CDLDXIDT();
			//Distrito XII
			$marthasosa = $this->modelo_inicio->Obtener_CDLDXIIMS();
			$rosarioyeme = $this->modelo_inicio->Obtener_CDLDXIIRY();
			$noraayala = $this->modelo_inicio->Obtener_CDLDXIINA();
			$sarahinoriega = $this->modelo_inicio->Obtener_CDLDXIISN();
			//Distrito XIII
			$sergiosanchez = $this->modelo_inicio->Obtener_CDLDXIIISS();
			$carlosvilla = $this->modelo_inicio->Obtener_CDLDXIIICV();
			//Distrito XIV
			$luisayala = $this->modelo_inicio->Obtener_CDLDXIVLA();
			$lilafigueroa = $this->modelo_inicio->Obtener_CDLDXIVLF();
			$marthameza = $this->modelo_inicio->Obtener_CDLDXIVMM();
			$veronicatorres = $this->modelo_inicio->Obtener_CDLDXIVVT();
			$gustavorerenteria =$this->modelo_inicio->Obtener_CDLDXIVGR();
			$josefinaroblada = $this->modelo_inicio->Obtener_CDLDXIVJR();
			$eliasnunez = $this->modelo_inicio->Obtener_CDLDXIVEN();
			//Distrito XV
			$felicitaspena = $this->modelo_inicio->Obtener_CDLDXVFP();
			$hildamoreno = $this->modelo_inicio->Obtener_CDLDXVHM();
			$almarincon = $this->modelo_inicio->Obtener_CDLDXVAR();
			//Distrito XVI
			$santiagochavez = $this->modelo_inicio->Obtener_CDLDXVISC();
			$judithgodinez = $this->modelo_inicio->Obtener_CDLDXVIJG();
			$sergiomendoza = $this->modelo_inicio->Obtener_CDLDXVISM();
			$angelesrodriguez = $this->modelo_inicio->Obtener_CDLDXVIAR();

			
			if($Hildaceballos != FALSE and $Josecardenas != FALSE and $Leonardogutierrez != FALSE)
			{
				$data = array(
							  //Distrito I
							  'megustac1' => $Hildaceballos->Megusta, 'seguidoresc1' => $Hildaceballos->PersonasHablan,
					          'megustac2' => $Josecardenas->Megusta, 'seguidoresc2' => $Josecardenas->PersonasHablan,
					          'megustac3' => $Leonardogutierrez->Megusta, 'seguidoresc3' => $Leonardogutierrez->PersonasHablan,
					          //Distrito II
							  'megustac4' => $nicolascontreras->Megusta, 'seguidoresc4' => $nicolascontreras->PersonasHablan,
					          'megustac5' => $guillermorangel->Megusta, 'seguidoresc5' => $guillermorangel->PersonasHablan,
					          'megustac6' => $SandraRammirez->Megusta, 'seguidoresc6' => $SandraRammirez->PersonasHablan,
							  'megustac7' => $joseGarcia->Megusta, 'seguidoresc7' => $joseGarcia->PersonasHablan,
					          'megustac8' => $arturogarcia->Megusta, 'seguidoresc8' => $arturogarcia->PersonasHablan,
					          'megustac9' => $lilianarodriguez->Megusta, 'seguidoresc9' => $lilianarodriguez->PersonasHablan,
					          //Distrito III
							  'megustac10' => $crispinguerra->Megusta, 'seguidoresc10' => $crispinguerra->PersonasHablan,
					          'megustac11' => $almaarreola->Megusta, 'seguidoresc11' => $almaarreola->PersonasHablan,
					          'megustac12' => $marthafarias->Megusta, 'seguidoresc12' => $marthafarias->PersonasHablan,
							  'megustac13' => $isisvillasernor->Megusta, 'seguidoresc13' => $isisvillasernor->PersonasHablan,
					          'megustac14' => $octavioaguilar->Megusta, 'seguidoresc14' => $octavioaguilar->PersonasHablan,
					          'megustac15' => $patriciaperegrina->Megusta, 'seguidoresc15' => $patriciaperegrina->PersonasHablan,
					          'megustac16' => $gloriaarceo->Megusta, 'seguidoresc16' => $gloriaarceo->PersonasHablan,
					          //Distrito IV
							  'megustac17' => $janethpaz->Megusta, 'seguidoresc17' => $janethpaz->PersonasHablan,
					          'megustac18' => $juanaandres->Megusta, 'seguidoresc18' => $juanaandres->PersonasHablan,
					          'megustac19' => $sergioricardo->Megusta, 'seguidoresc19' => $sergioricardo->PersonasHablan,
					          'megustac20' => $andresorozco->Megusta, 'seguidoresc20' => $andresorozco->PersonasHablan,
					          //Distrito V
					          'megustac21' => $ramirotoscano->Megusta, 'seguidoresc21' => $ramirotoscano->PersonasHablan,
					          'megustac22' => $josebenavides->Megusta, 'seguidoresc22' => $josebenavides->PersonasHablan,
					          'megustac23' => $yulianaaguilar->Megusta, 'seguidoresc23' => $yulianaaguilar->PersonasHablan,
					          //Distrito VI		         
							  'megustac24' => $SandrayolandaRammirez->Megusta, 'seguidoresc24' => $SandrayolandaRammirez->PersonasHablan,
					          'megustac25' => $octaviotintos->Megusta, 'seguidoresc25' => $octaviotintos->PersonasHablan,
					          'megustac26' => $sergiosilva->Megusta, 'seguidoresc26' => $sergiosilva->PersonasHablan,
					          'megustac27' => $leticiamendoza->Megusta, 'seguidoresc27' => $leticiamendoza->PersonasHablan,
					          'megustac28' => $getzemaniibarra->Megusta, 'seguidoresc28' => $getzemaniibarra->PersonasHablan,
					          //Distrito VII		         
							  'megustac29' => $franciscoceballo->Megusta, 'seguidoresc29' => $franciscoceballo->PersonasHablan,
					          'megustac30' => $alfredohernandez->Megusta, 'seguidoresc30' => $alfredohernandez->PersonasHablan,
					          'megustac31' => $saracernas->Megusta, 'seguidoresc31' => $saracernas->PersonasHablan,
					          'megustac32' => $jooelpadilla->Megusta, 'seguidoresc32' => $jooelpadilla->PersonasHablan,
					          'megustac33' => $socorrobayardo->Megusta, 'seguidoresc33' => $socorrobayardo->PersonasHablan,
     			      		  'megustac34' => $erendiraandrade->Megusta, 'seguidoresc34' => $erendiraandrade->PersonasHablan,
							  //Distrito VIII	         
							  'megustac35' => $meylypastora->Megusta, 'seguidoresc35' => $meylypastora->PersonasHablan,
					          'megustac36' => $hectormagana->Megusta, 'seguidoresc36' => $hectormagana->PersonasHablan,
					          'megustac37' => $alfredoherrera->Megusta, 'seguidoresc37' => $alfredoherrera->PersonasHablan,
					          'megustac38' => $adelaidafernandez->Megusta, 'seguidoresc38' => $adelaidafernandez->PersonasHablan,
					          'megustac39' => $juanjuarez->Megusta, 'seguidoresc39' => $juanjuarez->PersonasHablan,
					          //Distrito IX
							  'megustac40' => $eusebiomesina->Megusta, 'seguidoresc40' => $eusebiomesina->PersonasHablan,
					          'megustac41' => $beatrizinsunza->Megusta, 'seguidoresc41' => $beatrizinsunza->PersonasHablan,
					          'megustac42' => $selenelopez->Megusta, 'seguidoresc42' => $selenelopez->PersonasHablan,
					          'megustac43' => $angelicaochoa->Megusta, 'seguidoresc43' => $angelicaochoa->PersonasHablan,
					          'megustac44' => $mauriciobarreto->Megusta, 'seguidoresc44' => $mauriciobarreto->PersonasHablan,
					          //Distrito X
							  'megustac45' => $juanpinto->Megusta, 'seguidoresc45' => $juanpinto->PersonasHablan,
					          'megustac46' => $ricardosevilla->Megusta, 'seguidoresc46' => $ricardosevilla->PersonasHablan,
					          'megustac47' => $raquelcardenas->Megusta, 'seguidoresc47' => $raquelcardenas->PersonasHablan,
					          'megustac48' => $marcorodarte->Megusta, 'seguidoresc48' => $marcorodarte->PersonasHablan,
					          'megustac49' => $salvadorjuarez->Megusta, 'seguidoresc49' => $salvadorjuarez->PersonasHablan,
					          //Distrito XI
							  'megustac50' => $miguelgarcia->Megusta, 'seguidoresc50' => $miguelgarcia->PersonasHablan,
					          'megustac51' => $armidanunes->Megusta, 'seguidoresc51' => $armidanunes->PersonasHablan,
					          'megustac52' => $aldovega->Megusta, 'seguidoresc52' => $aldovega->PersonasHablan,
					          'megustac53' => $sebastianesparza->Megusta, 'seguidoresc53' => $sebastianesparza->PersonasHablan,
					          'megustac54' => $teresahernandez->Megusta, 'seguidoresc54' => $teresahernandez->PersonasHablan,
					          'megustac55' => $dianatopete->Megusta, 'seguidoresc55' => $dianatopete->PersonasHablan,
					          //Distrito XII
					          'megustac56' => $marthasosa->Megusta, 'seguidoresc56' => $marthasosa->PersonasHablan,
					          'megustac57' => $rosarioyeme->Megusta, 'seguidoresc57' => $rosarioyeme->PersonasHablan,
					          'megustac58' => $noraayala->Megusta, 'seguidoresc58' => $noraayala->PersonasHablan,
					          'megustac59' => $sarahinoriega->Megusta, 'seguidoresc59' => $sarahinoriega->PersonasHablan,
					          //Distrito XIII
					          'megustac60' => $sergiosanchez->Megusta, 'seguidoresc60' => $sergiosanchez->PersonasHablan,
					          'megustac61' => $carlosvilla->Megusta, 'seguidoresc61' => $carlosvilla->PersonasHablan,					          
					          //Distrito XIV
							  'megustac62' => $luisayala->Megusta, 'seguidoresc62' => $luisayala->PersonasHablan,
					          'megustac63' => $lilafigueroa->Megusta, 'seguidoresc63' => $lilafigueroa->PersonasHablan,
					          'megustac64' => $marthameza->Megusta, 'seguidoresc64' => $marthameza->PersonasHablan,
					          'megustac65' => $veronicatorres->Megusta, 'seguidoresc65' => $veronicatorres->PersonasHablan,
					          'megustac66' => $gustavorerenteria->Megusta, 'seguidoresc66' => $gustavorerenteria->PersonasHablan,
					          'megustac67' => $josefinaroblada->Megusta, 'seguidoresc67' => $josefinaroblada->PersonasHablan,
					          'megustac68' => $eliasnunez->Megusta, 'seguidoresc68' => $eliasnunez->PersonasHablan,
					          //Distrito XV
					          'megustac69' => $felicitaspena->Megusta, 'seguidoresc69' => $felicitaspena->PersonasHablan,
					          'megustac70' => $hildamoreno->Megusta, 'seguidoresc70' => $hildamoreno->PersonasHablan,
					          'megustac71' => $almarincon->Megusta, 'seguidoresc71' => $almarincon->PersonasHablan,
					          //Distrito XVI
					          'megustac72' => $santiagochavez->Megusta, 'seguidoresc72' => $santiagochavez->PersonasHablan,
					          'megustac73' => $judithgodinez->Megusta, 'seguidoresc73' => $judithgodinez->PersonasHablan,
					          'megustac74' => $sergiomendoza->Megusta, 'seguidoresc74' => $sergiomendoza->PersonasHablan,
					          'megustac75' => $angelesrodriguez->Megusta, 'seguidoresc75' => $angelesrodriguez->PersonasHablan					          
					          );

				$this->load->view('facebook/diputadolocal',$data);
			}
		}
	//CANDIDATOS POR PARTIDO
	public function partidost()
	{
		//1ra Fecha
		$pan = $this->modelo_inicio->Obtener_CPAN();
		$pri = $this->modelo_inicio->Obtener_CPRI();
		$pna = $this->modelo_inicio->Obtener_CPNA();
		$pv = $this->modelo_inicio->Obtener_CPV();
		$prd = $this->modelo_inicio->Obtener_CPRD();
		$pt = $this->modelo_inicio->Obtener_CPT();
		$pmc = $this->modelo_inicio->Obtener_CPMC();
		$pm = $this->modelo_inicio->Obtener_CPM();
		$pes = $this->modelo_inicio->Obtener_CPES();
		$ph = $this->modelo_inicio->Obtener_CPH();		
		//2da Fecha
		$pan2 = $this->modelo_inicio->Obtener_CPAN2();
		$pri2 = $this->modelo_inicio->Obtener_CPRI2();
		$pna2 = $this->modelo_inicio->Obtener_CPNA2();
		$pv2 = $this->modelo_inicio->Obtener_CPV2();
		$prd2 = $this->modelo_inicio->Obtener_CPRD2();
		$pt2 = $this->modelo_inicio->Obtener_CPT2();
		$pmc2 = $this->modelo_inicio->Obtener_CPMC2();
		$pm2 = $this->modelo_inicio->Obtener_CPM2();
		$pes2 = $this->modelo_inicio->Obtener_CPES2();
		$ph2 = $this->modelo_inicio->Obtener_CPH2();
		
		if($pan != FALSE and $pri != FALSE and $pna != FALSE and $pv != FALSE and $prd != FALSE and $pt != FALSE and $pmc != FALSE and $pm != FALSE and $pes != FALSE and $ph != FALSE)
		{
			$data = array('megustac1' => $pri->Megusta, 'seguidoresc1' => $pri->PersonasHablan, 
				          'megustac2' => $pan->Megusta, 'seguidoresc2' => $pan->PersonasHablan,
				          'megustac3' => $pna->Megusta, 'seguidoresc3' => $pna->PersonasHablan,
				          'megustac4' => $pv->Megusta, 'seguidoresc4' => $pv->PersonasHablan,
				          'megustac5' => $prd->Megusta, 'seguidoresc5' => $prd->PersonasHablan,				          
				          'megustac6' => $pt->Megusta, 'seguidoresc6' => $pt->PersonasHablan,
				          'megustac7' => $pmc->Megusta, 'seguidoresc7' => $pmc->PersonasHablan,
				          'megustac8' => $pm->Megusta, 'seguidoresc8' => $pm->PersonasHablan,
				          'megustac9' => $pes->Megusta, 'seguidoresc9' => $pes->PersonasHablan,
				          'megustac10' => $ph->Megusta, 'seguidoresc10' => $ph->PersonasHablan,
				          //2da Fecha
				          'megustacc1' => $pri2->Megusta, 'seguidorescc1' => $pri2->PersonasHablan, 
				          'megustacc2' => $pan2->Megusta, 'seguidorescc2' => $pan2->PersonasHablan,
				          'megustacc3' => $pna2->Megusta, 'seguidorescc3' => $pna2->PersonasHablan,
				          'megustacc4' => $pv2->Megusta, 'seguidorescc4' => $pv2->PersonasHablan,
				          'megustacc5' => $prd2->Megusta, 'seguidorescc5' => $prd2->PersonasHablan,				          
				          'megustacc6' => $pt2->Megusta, 'seguidorescc6' => $pt2->PersonasHablan,
				          'megustacc7' => $pmc2->Megusta, 'seguidorescc7' => $pmc2->PersonasHablan,
				          'megustacc8' => $pm2->Megusta, 'seguidorescc8' => $pm2->PersonasHablan,
				          'megustacc9' => $pes2->Megusta, 'seguidorescc9' => $pes2->PersonasHablan,
				          'megustacc10' => $ph2->Megusta, 'seguidorescc10' => $ph2->PersonasHablan
				          );
			$this->load->view('facebook/partidos',$data);
		}
	}		
	//Valoracion de comentarios para gobernador
	public function valoracion_gobernadores()
	{
		$nacho = $this->modelo_inicio->valoracion_nacho();
		$jorge = $this->modelo_inicio->valoracion_jorge();

		$datos = array(
					  'nachoP' => $nacho['positivos'],
					  'nachoNe' => $nacho['negativos'],
					  'nachoN' => $nacho['neutros'],
					  'jorgeP' => $jorge['positivos'],
					  'jorgeNe' => $jorge['negativos'],
					  'jorgeN' => $jorge['neutros']
					  );
		$this->load->view('facebook/valoracionGobernadores',$datos);
	}		
	//Rumbo al 7 de Junio
	public function rumbo()
	{
		$resultado = $this->modelo_inicio->obtener_cuenta_rumboal7dejunio();	
		$datos = array(
						"rumbo" => $resultado['rumbo']
	            	  );
		$this->load->view('facebook/rumbo',$datos);
	}	
}