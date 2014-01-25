<?php

class User_model extends CI_Model {

	public $id = array();
	public $username = array();


	function __construct() {
	        
	    parent::__construct();
	}


	function add_User($username, $nameCellar){
		
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


}


?>