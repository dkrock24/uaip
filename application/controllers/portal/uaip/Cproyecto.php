<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cproyecto extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->helper('url');		
		$this->load->database('default');	
		$this->load->model('portal/uaip/index_model');					
	}

	public function index($id)
	{	
		$notas['entradas'] =  $this->index_model->getEntradas($id);
		$this->load->view('portal/uaip/proyecto/v_index.php',$notas);
	}
	public function dos($id)
	{	
		$leyes['leyes'] =  $this->index_model->getEntradas($id);
		$this->load->view('portal/uaip/proyecto/v_dos.html',$leyes);
	}
}
