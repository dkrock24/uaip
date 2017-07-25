<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class index_model extends CI_Model
{
    const menu          = 'home_menu';
    const home_submenu  = 'home_submenu';    
    const home_carrusel = 'home_carrusel';
    const home_menu_entradas = 'home_menu_entradas';
    
    public function __construct()
    {
        parent::__construct();
        
    }
    //Get Menu
    public function getMenuUAIP()
    {
        $this->db->select('*');
        $this->db->from(self::menu);
             
        $this->db->where('estado_menu',1);        
        $this->db->where(self::menu.'.pages','uaip');
        $this->db->where(self::menu.'.seccion','superior');
        $this->db->order_by(self::menu.'.id_menu', "asc");             
        $query = $this->db->get();      
        //echo $this->db->queries[0];   
        //exit();
        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }  
    }
    //Get Submenu 
    public function getSubMenuUAIP()
    {
        $this->db->select('*');
        $this->db->from(self::home_submenu);        
        $this->db->where('estado_submen',1);                
        $this->db->order_by('id_submenu', "asc");             
        $query = $this->db->get();      
        //echo $this->db->queries[0];   
        //exit();
        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }  
    }

    //Carrusel
    public function getCarrusel()
    {
        /*
        $this->db->select('*');
        $this->db->from(self::home_carrusel);            
        $this->db->where('estado',1);                
        $this->db->order_by('id_info', "asc");             
        $query = $this->db->get();      
        //echo $this->db->queries[0];   
        //exit();
        */
        $this->db->select('*');
        $this->db->from(self::menu);
        $this->db->join(self::home_submenu,'on '. self::menu .'.id_menu = '.self::home_submenu.'.id_menu');
        $this->db->join(self::home_menu_entradas,'on '.self::home_submenu.'.id_submenu = '.self::home_menu_entradas.'.id_submenu');
        $this->db->where(self::menu.'.estado_menu',1);        
        $this->db->where(self::menu.'.pages','uaip');
        $this->db->where(self::menu.'.seccion','centro');
        $this->db->order_by(self::menu.'.id_menu', "asc");  

        $query = $this->db->get();       
        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }  
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

    public function getFooter()
    {
        $this->db->select('*');
        $this->db->from(self::menu);
        $this->db->join(self::home_submenu,'on '. self::menu .'.id_menu = '.self::home_submenu.'.id_menu');
        $this->db->join(self::home_menu_entradas,'on '.self::home_submenu.'.id_submenu = '.self::home_menu_entradas.'.id_submenu');
        $this->db->where(self::menu.'.estado_menu',1);        
        $this->db->where(self::menu.'.pages','uaip');
        $this->db->where(self::menu.'.seccion','inferior');
        $this->db->order_by(self::menu.'.id_menu', "asc");  

        $query = $this->db->get();       
        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }  
    }

}
/*
 * end of application/models/consultas_model.php
 */
