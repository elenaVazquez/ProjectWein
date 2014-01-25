<?php

class WineCellar_model extends CI_Model {

    public $id = array();
    public $name = array();
    public $telefon = array();
    public $description = array();
    public $email = array(); 
    public $place = array();

//echo date("jS F, Y", strtotime("11.12.10")); 

	function __construct()
    {
        parent::__construct();
    }


    function add_WineCellar($name, $telefon, $description, $email, $place){
        
        $insert_data = array(
                'name' => $name,
                'telefon' => $telefon,
                'description' => $description,
                'email' => $email,
                'place' => $place
        );
                
        $this->db->insert('WineCellar', $insert_data);

    }

    function delete_WineCellar($id){
        
        $sqlQuery = "
                DELETE 
                FROM WineCellar
                WHERE id = ?
                ";
                
        $query = $this->db->query($sqlQuery, array($id));

    }

    function edit_WineCellar($id, $name, $telefon, $description, $email, $place){
        
        $update_data = array(
                'name' => $name,
                'telefon' => $telefon,
                'description' => $description,
                'email' => $email,
                'place' => $place
        );
                
        $where = "id = $id";
        
        $this->db->update('WineCellar', $update_data, $where);

    }

    function get_WineCellar($id){
        
        $sqlQuery = "
                SELECT 
                FROM WineCellar
                WHERE id = ?
                ";
                
        $query = $this->db->query($sqlQuery, array($id));

        $data = array();
                
        if($query->num_rows() > 0) {

                $row = $query->row();            
                $data['id'] = $row->id;
                $data['name'] = $row->name;
                $data['telefon'] = $row->telefon;
                $data['description'] = $row->description;
                $data['email'] = $row->email;
                $data['place'] = $row->place;                                        
        }
        
        
        return $data;


    }

    

}

?>