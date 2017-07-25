<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clock extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->helper('url');		
		
		
		$this->load->database('default');	
		$this->load->model('backend/animacion/animacion_model');			
	}

	public function lock()
	{	
		//$sistema['info'] =  $this->info_model->getInfo();
		$this->load->view('backend/lockscreen/Vlook.php');
	}	
}
