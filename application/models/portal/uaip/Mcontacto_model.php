<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mcontacto_model extends CI_Model
{
    const home_contactos          = 'home_contactos';
    const home_contactos_respuestas= 'home_contactos_respuestas';
    const sr_usuarios               = 'sr_usuarios';

    

    
    
    
    public function __construct()
    {
        parent::__construct();
        
    }

    public function saveContacto($info){        
        $data = array(
            'nombre'    => $info['nombre'],
            'email'     => $info['email'],
            'mensaje'   => $info['mensaje'],
            'estado'    => 1
        );
        $this->db->insert(self::home_contactos,$data);
    }

    public function getContactos($start_from,$limit){
             $this->db->select('*');
        $this->db->from(self::home_contactos);   

        $this->db->limit($limit,$start_from);
        $this->db->order_by(self::home_contactos.'.estado', "desc");                    


        $query = $this->db->get();

        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }   

    public function getCountEntradas(){
        $this->db->select('count(*) as total');
        $this->db->from(self::home_contactos);                    
        //$this->db->where('estado',1);
        $query = $this->db->get();

        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function getContactosByID($idContacto){
        $this->db->select('*');
        $this->db->from(self::home_contactos);                    
        $this->db->where('id_contacto',$idContacto);

        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function getContactosRespuestasByID($idContacto){
        $this->db->select('*');
        $this->db->from(self::home_contactos_respuestas);                               
        $this->db->join(self::sr_usuarios,'on '. self::home_contactos_respuestas .'.id_usuario = '.self::sr_usuarios.'.id_usuario');
        $this->db->where('id_mensaje',$idContacto);

        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function cambiarEstado($info){
        $data = array(
            'estado' => $info['estado']
        );
        $this->db->where('id_contacto', $_POST['id_contacto']);
        $this->db->update(self::home_contactos, $data);   
    }

    public function saveRespuestaContacto($info){        
        $data = array(
            'id_mensaje'    => $info['id_contacto'],
            'id_usuario'     => $info['usuario'],
            'respuesta'   => $info['mensaje']
            
        );
        $this->db->insert(self::home_contactos_respuestas,$data);
    }

}
/*
 * end of application/models/consultas_model.php
 */
