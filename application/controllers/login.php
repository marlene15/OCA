<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
    {
     
        public function __construct()
        {
        parent:: __construct();
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('security');
        }
       
        public function index()
        {
     
            if(!isset($_POST['username']))
            {
            $this->load->view('comunes/login');
            }
            else
            {
            $this->form_validation->set_rules('username','Usuario','required|min_lenght[5]|max_lenght[20]');
            $this->form_validation->set_rules('password','Password','required');
           
                if($this->form_validation->run() == FALSE) //si no supera las reglas de validación se recarga la vista del formulario
                {
                $this->load->view('comunes/login');
                }
                else
                {
                $isValidLogin = $this->login_model->getLogin($_POST['username'],$_POST['password']); //pasamos los valores al modelo para que compruebe si existe el usuario con ese password
               
                    if($isValidLogin)
                    {
                        $sesion_data = array(
                                        'username' => $_POST['username'],
                                        'password' => $_POST['password']
                                            );
                        $this->session->set_userdata($sesion_data);
                     
                    $this->load->view('inicio');

                    }
                    else
                    {
                    // si es erroneo, devolvemos un mensaje de error
                    $this->load->view('comunes/login');
                    }
                }
            }  
        }
     
        public function data()
        {
            if($this->session->userdata['username'] == TRUE)
            {
            echo $this->session->userdata['username'];
            echo " ";
            echo $this->session->userdata['password'];
            }
        }
       
       
        public function destroy()
        {
        $this->login_model->close();
     
            $this->load->view('comunes/login');
        }
        
        public function logout()
        {
             $this->session->sess_destroy();
             redirect('login');
        }

       
        public function perfil()
        {
        $logged = $this->login_model->isLogged();
           
            if($logged == TRUE)
            {
            echo "BIENVENIDO";
            }
            else
            {
            $this->load->view('comunes/login');
            }
        }
       
    }
?>