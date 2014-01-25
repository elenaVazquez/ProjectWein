<?php

class Wine_model extends CI_Model {

	public $id = array();
    public $name = array();
    public $proof;
    public $price;
    public $year; 
    public $composition = array();
    public $origin_place = array();
    public $soil = array();
    public $climate = array();
    public $type = array();
    public $do = array();


	function __construct() {
	        
	    parent::__construct();
	}

	function add_Wine($name, $proof, $price, $year, $composition, $soil, $climate, $type, $do){
		
		$insert_data = array(
            'name' => $name,
            'proof' => $proof,
            'price' => $price,
            'year' => $year,
            'composition' => $composition,
            'soil' => $soil,
            'climate' => $climate,
            'type' => $type,
            'do' => $do
    	);
                
        $this->db->insert('Wine', $insert_data);
	}

	function delete_Wine($id){

		$sqlQuery = "
        DELETE 
        FROM Wine
        WHERE id = ?
        ";
                
        $query = $this->db->query($sqlQuery, array($id));

	}

	function edit_Wine($id, $name, $proof, $price, $year, $composition, $soil, $climate, $type, $do){

		$update_data = array(
                'name' => $name,
                'proof' => $proof,
                'price' => $price,
                'year' => $year,
                'composition' => $composition,
                'soil' => $soil,
                'climate' => $climate,
                'type' => $type,
                'do' => $do
        );
                
        $where = "id = $id";
        
        $this->db->update('Wine', $update_data, $where);

	}

	function get_Wine($id){
		$sqlQuery = "
        SELECT *
        FROM Wine
        WHERE id = ?";
        
        $query = $this->db->query($sqlQuery, array($id));
        
        $data = array();
        
        if($query->num_rows() > 0)
        {
                $row = $query->row();      
                $data['id'] = $row->id;
                $data['name'] = $row->name;
                $data['proof'] = $row->proof;
                $data['price'] = $row->price;
                $data['year'] = $row->year;
                $data['composition'] = $row->composition;
                $data['soil'] = $row->soil;
                $data['climate'] = $row->climate;
                $data['type'] = $row->type;
                $data['do'] = $row->do;
        }
        
        return $data;
	}

	function getAll_Wines($id_wineCellar){
		$sqlQuery = "
        SELECT *
        FROM Wine
        WHERE id_wineCellar = ?";
      
     	$query = $this->db->query($sql_query);
        $data = array();
        if($query->num_rows() > 0) {
            $row = $query->result();
            $i = 0;
            foreach($row as $item) {

                $data[$i]['id'] = $item->id;
                $data[$i]['name'] = $item->name;
                $data[$i]['proof'] = $item->proof;
                $data[$i]['price'] = $item->price;
                $data[$i]['year']=$item->year;
                $data[$i]['composition'] = $item->composition;
                $data[$i]['soil'] = $item->soil;
                $data[$i]['climate'] = $item->climate;
                $data[$i]['type'] = $item->type;
                $data[$i]['do']=$item->do;
                $i++;
            }                        
        }
        
        return $data;      

	}

}


?>