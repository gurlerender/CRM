<?php
class ProductModel extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('products', $data);
}
function getAllValue(){
    $this->db->select("productname,duration,entrytime,price,status");
    $this->db->from("products");
    $query = $this->db->get();
    return $query->result();

}
function getPrice(){
    $this->db->select("price,id");
    $this->db->from("products");
    $query = $this->db->get();
    return $query->result();
}

function showProducts(){
    $query = $this->db->get('products');
    $query_result = $query->result();
    return $query_result;
    }

}
?>