<?php
class SeanceModel extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('seances', $data);
}

function getDiet(){
    $this->db->select("seancename,seancesalon,seanceday,seancehour,seancecoach,status");
    $this->db->from("seances");
    $this->db->where("seancesalon like 'Diet Room'");
    $query = $this->db->get();
    return $query->result();
}
function getJoseph(){
    $this->db->select("seancename,seancesalon,seanceday,seancehour,seancecoach,status");
    $this->db->from("seances");
    $this->db->where("seancesalon like 'Joseph Room'");
    $query = $this->db->get();
    return $query->result();
}
function getMacro(){
    $this->db->select("seancename,seancesalon,seanceday,seancehour,seancecoach,status");
    $this->db->from("seances");
    $this->db->where("seancesalon like 'Macro Lounge'");
    $query= $this->db->get();
    return $query->result();
}
}
?>