<?php
class EmployeeModel extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('employee', $data);
}
function getAllValue(){
    $this->db->select("name,surname,job");
    $this->db->from("employee");
    $query = $this->db->get();
    return $query->result();

}
}
?>