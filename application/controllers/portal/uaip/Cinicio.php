<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->helper('url');		
		$this->load->database('default');	
		$this->load->model('portal/inicio/inicio_model');					
	}

	public function index($id)
	{					
		$data['inicio'] =  $this->inicio_model->getEntradas($id);							
		$this->load->view('portal/uaip/inicio/Vmensaje.php',$data);
	}
	public function valores($id)
	{					
		//Retorna los Valores en las Entradas Existentes
		$data['valores'] =  $this->inicio_model->getEntradas($id);							
		$this->load->view('portal/uaip/inicio/Vvalores.php',$data);
	}
	public function dibujo($id)
	{					
		//Retorna los Valores en las Entradas Existentes
		$data['valores'] =  $this->inicio_model->getEntradas($id);							
		$this->load->view('portal/uaip/inicio/Vdibujos.php',$data);
	}

}
