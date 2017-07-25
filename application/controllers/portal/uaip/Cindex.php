<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cindex extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->helper('url');		
		$this->load->database('default');	
		$this->load->model('portal/uaip/index_model');					
	}

	public function index()
	{	
		$menu['menu'] 		=  $this->index_model->getMenuUAIP();
		$menu['submenu'] 	=  $this->index_model->getSubMenuUAIP();
		$menu['footer'] 	=  $this->index_model->getFooter();
		$this->load->view('portal/uaip/v_index.php',$menu);
	}

	public function carrusel(){
		$menu['carrusel'] =  $this->index_model->getCarrusel();
		$this->load->view('portal/uaip/v_carrusel.php',$menu);	
	}
}
