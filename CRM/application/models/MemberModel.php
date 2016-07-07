<?php
class MemberModel extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(member) of Database(college)
$this->db->insert('member', $data);
}

function getAllValue(){
    $this->db->select("ID,name,surname,product,status");
    $this->db->from("member");
    $query = $this->db->get();
    return $query->result();

}
function getMemberInfo($id){
    $this->db->select('ID,name,surname,status,gender,phone,email,address,job,product,tcno');
    $this->db->from("member");
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->result();
}
function payment($payment){
    $this->db->select('duration,entrytime,price');
    $this->db->from("products");
    $this->db->where('id',$payment["PRODUCTID"]);
    $query = $this->db->get();
    foreach ($query->result() as $row)
{
    $payment['PRODUCTTIME'] =$row->duration;
    $payment['PRODUCTENTRY'] =$row->entrytime;
    $payment['TOTALPRICE'] =$row->price;
}
    $today =date("d-m-Y");
    $finishdate = strtotime($payment['PRODUCTTIME'].'day',strtotime($today));
    $finishdate = date('Y-m-j' ,$finishdate );
    $payment['FINISHTIME'] = $finishdate;
    
    $this->db->select_max('id');
    $idquery = $this->db->get("member");
      foreach ($idquery->result() as $row)
     {
    $payment['MEMBERID'] =$row->id;
     }
    $this->db->insert('membersign',$payment);
    $paymenttable['MEMBERID'] = $payment['MEMBERID'];
    $paymenttable['TOTALPAYMENT'] = $payment['TOTALPRICE'];
    $paymenttable['GIVEN'] = $payment['PAYMENT'];
    $this->db->insert('payment',$paymenttable);
}
function paymentInfo($id){
    $this->db->select('salestime,finishtime,totalprice,payment');
    $this->db->from("membersign");
    $this->db->where('memberid',$id);
    $query = $this->db->get();
    return $query->result();
}
function updateMemberPayment($id,$data){
    
    $this->db->select('GIVEN');
    $this->db->from("payment");
    $this->db->where('memberid',$id);
    $query = $this->db->get();
    foreach ($query->result() as $row)
    {
    $data['GIVEN'] =$row->GIVEN+$data['GIVEN'];
    }
    $this->db->where('memberid', $id);
    $this->db->update('payment', $data);
    
    
    $data2['PAYMENT'] =$data['GIVEN'];

    $this->db->where('memberid', $id);
    $this->db->update('membersign', $data2);
}

function updateMemberInfo($id,$data){
    
    $this->db->where('id', $id);
    $this->db->update('member', $data);
}
function updateNewProduct($id,$data){
     $this->db->select('productid,producttime,productentry,totalprice,payment,finishtime');
    $this->db->from("membersign");
    $this->db->where('memberid',$id);
    $query = $this->db->get();
    foreach ($query->result() as $row)
    {
    $data['PRODUCTID'] =$row->productid;
    $data['PRODUCTTIME'] =$row->producttime;
    $data['PRODUCTENTRY'] =$row-> productentry;
    $data['TOTALPRICE'] =$row-> totalprice;
    $data['PAYMENT'] =$row-> payment;
    $data['FINISHTIME'] =$row-> finishtime;
    }
    $today =date("d-m-Y");
    $finishdate = strtotime($data['PRODUCTTIME'].'day',strtotime($today));
    $finishdate = date('Y-m-j' ,$finishdate );
}
}
?>
