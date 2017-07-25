<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class usuarios_model extends CI_Model
{
    const cargos = 'sr_cargos';
    const roles = 'sr_roles';
    const avatar = 'sr_avatar';
    const usuarios = 'sr_usuarios';
    

    
    public function __construct()
    {
        parent::__construct();
        
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function cargos()
    {
        $this->db->select('*');
        $this->db->from(self::cargos);
        $query = $this->db->get();
        //echo $this->db->queries[0];
        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }        
        
    }
    public function roles()
    {
        $this->db->select('*');
        $this->db->from(self::roles);     
        $query = $this->db->get();         
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }         
    }
    public function avatar()
    {
        $this->db->select('*');
        $this->db->from(self::avatar);     
        $query = $this->db->get();         
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }         
    }
    public function save_user($user){
        $n1 =explode(" ", $user['nombres']);
        $n2 =explode(" ", $user['apellidos']);
        $nickname = $n1[0].".".$n2[0];
        $usuario = array(
             'nombres'      => $user['nombres'],
             'apellidos'    => $user['apellidos'],
             'telefono'     => $user['telefono'],
             'celular'      => $user['celular'],
             'direccion'    => $user['direccion'],
             'dui'          => $user['dui'],
             'usuario'      => $user['usuario'],
             'password'     => sha1($user['password']),
             'nickname'     => $nickname,
             'fecha'        => $user['fecha'],
             'genero'       => $user['genero'],
             'cargo'        => $user['cargo'],
             'rol'          => $user['rol'],
             'avatar'       => $user['avatar'],
             'fecha_creacion'=> "",
             'estado'       =>1
             );
        
        $this->db->insert(self::usuarios,$usuario);
    }

    public function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from(self::usuarios);
        $this->db->join(self::cargos,' on '. self::usuarios .'.cargo = id_cargo');
        $this->db->join(self::roles,' on '. self::usuarios .'.rol = id_rol');
        $query = $this->db->get();
        //echo $this->db->queries[0];        
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }        
        
    }

    public function eliminar_usuario($id_usuario){
         $data = array(
            'id_usuario' => $id_usuario
        );
        $this->db->delete(self::usuarios, $data); 
    }
}
/*
 * end of application/models/consultas_model.php
 */
