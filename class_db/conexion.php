<?php

	


function getID($id_menu){

	$usuario = "root";
	$password = "uaip2017!";
	$host = "23.92.17.186";
	$db="db_systema_integrado";
	$db = new PDO("mysql:host=$host;dbname=$db",$usuario,$password);

	$query = $db->prepare("select * from sr_submenu where id_menu='".$id_menu."' && estado_submen = 1");
	
    $query->execute();
    $data['data'] = $query->fetch(); 
    var_dump($data);
    return   $data;  
}

function login(){

	$usuario = "root";
	$password = "uaip2017!";
	$host = "23.92.17.186";
	$db="db_systema_integrado";
	$db = new PDO("mysql:host=$host;dbname=$db",$usuario,$password);
}



