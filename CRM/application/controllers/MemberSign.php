<?php

class AddMember extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('MemberModel');
$this->load->model('ProductModel');
}

function index($data){
    
  $sales = array(
 'MEMBERID' =>$data['ID'],
 'PRODUCTID'=>$data['products']->ID,
 'PRODUCTTIME'=>$data['products']->DURATION,
 'PRODUCTENTRY'=>$data['products']->ENTRYTIME,
 'SALESTIME'=>date('Y-m-j'),
 'TOTALPRICE'=>$data['products']->PRICE,
 'PAYMENT'=>  $this->input->post('dprice')
);
}
}
?>


