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
			$Hildaceballos = $this->modelo_inicio->Obtener_CDLDIHildaceballos();
			$Josecardenas = $this->modelo_inicio->Obtener_CDLDIJosecardenas();
			$Leonardogutierrez = $this->modelo_inicio->Obtener_CDLDILeonardogutierrez();
			
			if($Hildaceballos != FALSE and $Josecardenas != FALSE and $Leonardogutierrez != FALSE)
			{
				$data = array('megustacdn' => $Hildaceballos->Megusta, 'seguidorescdn' => $Hildaceballos->PersonasHablan,
					          'megustacdp' => $Josecardenas->Megusta, 'seguidorescdp' => $Josecardenas->PersonasHablan,
					          'megustacde' => $Leonardogutierrez->Megusta, 'seguidorescde' => $Leonardogutierrez->PersonasHablan);
				$this->load->view('facebook/diputadolocal',$data);
			}
		}		
}