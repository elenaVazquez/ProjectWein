<?php

class Event_model extends CI_Model {

	public $id = array();
    public $name = array();
    public $date;
    public $description = array();


	function __construct() {
	        
	    parent::__construct();
	}


	function add_Event($name, $date, $description){

		$insert_data = array(
            'name' => $name,
            'date' => $date,
            'description' => $description
    	);
                
        $this->db->insert('Event', $insert_data);
	}

	function delete_Event($id){

        $sqlQuery = "
        DELETE 
        FROM Event
        WHERE id = ?
        ";
        
        $query = $this->db->query($sqlQuery, array($id));
	}

	function edit_Event($id, $name, $description, $date){

		$update_data = array(
                'name' => $name,
                'description' => $description,
                'date' => $date
        );
                
        $where = "id = $id";
        
        $this->db->update('Event', $update_data, $where);
	}

	function get_Event($id){
		$sqlQuery = "
        SELECT *
        FROM Event
        WHERE id = ?";
        
        $query = $this->db->query($sqlQuery, array($id));
        
        $data = array();
        
        if($query->num_rows() > 0) {

            $row = $query->row();      
            $data['id'] = $row->id;
            $data['name'] = $row->name;
            $data['date'] = $row->date;
            $data['description'] = $row->description;
        
        }
        
        return $data;

	}

	function getAll_Events($id_wineCellar){
		$sqlQuery = "
        SELECT *
        FROM Event
        WHERE id_wineCellar = ?";
        
        $query = $this->db->query($sql_query);
        $data = array();
        if($query->num_rows() > 0) {
            $row = $query->result();
            $i = 0;
            foreach($row as $item) {

                $data[$i]['id'] = $item->id;
                $data[$i]['name'] = $item->name;
                $data[$i]['date'] = $item->date;
                $data[$i]['description'] = $item->description;
                $i++;
            }                        
        }
        
        return $data; 

	}

}

?>




