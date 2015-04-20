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
			$data = array('megustaci' => $ignacioperalta->Megusta, 
				          'megustacj' => $jorgepreciado->Megusta,
				          'megustacl' => $leonciomoran->Megusta,
				          'megustacm' => $marthazepeda->Megusta,
				          'megustacd' => $davidmunro->Megusta, 
				          'megustacf' => $franciscogallardo->Megusta,
				          'megustacg' => $gerardogalvan->Megusta, 
				          'megustacc' => $carlosbarbazan->Megusta);
			$this->load->view('facebook/gobernador',$data);
		}
	}
}