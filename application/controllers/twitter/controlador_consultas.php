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
		$this->load->model('twitter/modelo_consultas');
		$this->load->database('twitter');
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
	public function dip_federales()
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
		$hoy = date('Y-m-d');
		$ExisteFecha = $this->modelo_consultas->ExisteFecha($fecha_nueva);
		$existe = 0;
		if ($ExisteFecha==1) { //Si existe la fecha consultada 
			$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($fecha_nueva); 
			$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($fecha_nueva);
			$existe = 1;
		}
		else{//Si no existe la fecha consultada se cargan los datos de el día anterior
			$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($hoy); 
			$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($hoy); 
			$existe = 2;
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($hoy);
		}
		
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
	                'fecha' => $fecha,
	                'vtab' => $vtab,
	                'existe' => $existe
	            );
		$this->load->view('twitter/dip_federales',$datos);
	}
}