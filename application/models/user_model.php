<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $id = array();
	public $username = array();


	function __construct() {
	        
	    parent::__construct();
	    $this->load->database();
	}


	function add_User($username, $nameCellar){

		
		//INSERT INTO usuarios VALUES('usuario',MD5('contraseña'));
		$insert_data = array(
            'username' => $username
    	);
                
        $this->db->insert('UserWeb', $insert_data);

	}

	function edit_User($id, $username){

	}

	function delete_User($id){

		$sqlQuery = "
        DELETE 
        FROM UserWeb
        WHERE id = ?
        ";
                
        $query = $this->db->query($sqlQuery, array($id));
	}

	function get_User($id){
		//aquesta funció l'he de revisar perquè nose si vull tornar el celler
		$sqlQuery = "
        SELECT *
        FROM UserWeb
        WHERE id = ?";
        
        $query = $this->db->query($sqlQuery, array($id));
        
        $data = array();
        
        if($query->num_rows() > 0)
        {
                $row = $query->row();      
                $data['username'] = $row->id;
        }
        
        return $data;

	}

	function exists($username, $password){
		
		/*$sqlQuery = "
        SELECT *
        FROM `UserWeb`";
        $query = $this->db->query($sqlQuery);*/
        
        //$query = $this->db->where("username","test");
		$query = $this->db->get("UserWeb");
        
        var_dump($query); 
        //$row = $query->row();     
        //$pass = $row->password;

        //if($pass == $password) return true;
        return true;


	}




}


?>