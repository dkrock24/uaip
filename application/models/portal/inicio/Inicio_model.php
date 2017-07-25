<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class inicio_model extends CI_Model
{
    const home_menu_entradas = 'home_menu_entradas';
    
    public function __construct()
    {
        parent::__construct();
    }

    //Obtener toda las notas de entradas
    //Carrusel
    public function getEntradas($id)
    {
        $this->db->select('*');
        $this->db->from(self::home_menu_entradas);            
        $this->db->where('estado',1);                
        $this->db->where('id_submenu',$id);
        $this->db->order_by('id_entrada', "asc");             
        $query = $this->db->get();      
        //echo $this->db->queries[0];   
        //exit();
        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }  
    }

}
/*
 * end of application/models/consultas_model.php
 */
