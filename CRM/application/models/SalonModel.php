<?php
class SalonModel extends CI_Model{
    function __construct() {
         parent::__construct();
    }
    function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('salon', $data);
}
    function getEmployee(){
    $this->db->select("name,surname");
    $this->db->from("employee");
    $query = $this->db->get();
    return $query->result();
    }
    function getSeance(){
    $this->db->select("name");
    $this->db->from("seance");
    $query = $this->db->get();
    return $query->result();
    }
    function getSalon(){
    $this->db->select("name");
    $this->db->from("salon");
    $query = $this->db->get();
    return $query->result();
    }
    
    function search($name) {
        
        $this->db->like('name',$name,'both');
        return $this->db->get('seance')->result();//table name
    }
    
    function showSeances(){
    $query = $this->db->get('seance');
    $query_result = $query->result();
    return $query_result;
    }
    
    function showSalons(){
    $query = $this->db->get('salon');
    $query_result = $query->result();
    return $query_result;
    }
    
    function showCoaches(){
    $query = $this->db->get('employee');
    $query_result = $query->result();
    return $query_result;
    }
    
    function showDays(){
    $query = $this->db->get('days');
    $query_result = $query->result();
    return $query_result;
    }
    function showHours(){
    $query = $this->db->get('hours');
    $query_result = $query->result();
    return $query_result;
    }
    public function get_companies($name)
    {
    //$this->db->_compile_select(); 
    $this->db->like('name', $name, 'after'); 

    //$this->db->where('id', $name);

    $query = $this->db->get('member');

    //echo $this->db->last_query(); 
    //echo $query->num_rows();
    $companies = array();
    $i = 0;
    if($query->num_rows() > 0)
    {
        foreach ($query->result() as $row)
        {
            $companies[$i]['id'] = $row->ID;
            $companies[$i]['name'] = $row->NAME;
            $i++;
        }


    }

    //print_r($companies);
    return $companies;


}
}
?>