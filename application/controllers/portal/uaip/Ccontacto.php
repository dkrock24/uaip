<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccontacto extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->helper('url');		
		$this->load->database('default');	
		$this->load->model('portal/uaip/Mcontacto_model');					
	}

	public function index()
	{					
		//$data['inicio'] =  $this->inicio_model->getEntradas($id);							
		$this->load->view('portal/uaip/contacto/Vindex.php');
	}
	public function saveContacto()
	{	
		$this->Mcontacto_model->saveContacto($_POST);							
		//$this->load->view('portal/uaip/inicio/Vvalores.php',$data);
	}

	public function getContactos($paginacion)
	{			
		$limit = 10;		
		if ($paginacion!=0)
		{
			$page  = $paginacion; 
		}
		else
		{
			$page=1; 
		} 
		
		$start_from = ($page-1) * $limit; 
		
		$valor['entradas'] = $this->Mcontacto_model->getContactos($start_from,$limit);
		$valor['cont_entradas'] = $this->Mcontacto_model->getCountEntradas();
		$valor['paginacion'] = $page;							
		$this->load->view('portal/uaip/contacto/VlistaContactos.php',$valor);
	}

	public function getContactosByID($idContacto)
	{					
		$data['contacto'] = $this->Mcontacto_model->getContactosByID($idContacto);
		$data['respuestas'] = $this->Mcontacto_model->getContactosRespuestasByID($idContacto);		
		$this->load->view('portal/uaip/contacto/VContactoEdit.php',$data);
	}

	public function cambiarEstado(){
		var_dump($_POST);
		$this->Mcontacto_model->cambiarEstado($_POST);
	}

	public function saveRespuestaContacto()
	{		
		$this->Mcontacto_model->saveRespuestaContacto($_POST);							
		//$this->load->view('portal/uaip/inicio/Vvalores.php',$data);
	}

	

}
