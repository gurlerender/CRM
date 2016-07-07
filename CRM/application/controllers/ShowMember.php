<?php

class ShowMember extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('MemberModel');
$this->load->model('ProductModel');
}
function index() {
 $this->data['posts'] = $this->MemberModel->getAllValue(); 
 $this->load->view('ShowMemberView', $this->data);
}

function memberInfo($id){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('dname', 'Username', 'required|min_length[2]|max_length[25]');
    $this->data['id'] = $id;
    $this->data['posts'] =$this->MemberModel->getMemberInfo($id);
    if ($this->form_validation->run() == FALSE) {
    $this->load->view('MemberInfoView', $this->data);
    } else {
    //Setting values for tabel columns
    $data = array(
    'NAME' => $this->input->post('dname'),
    'SURNAME' => $this->input->post('dsurname'),
    'GENDER' => $this->input->post('dgender'),
    'PHONE' => $this->input->post('dphone'),
    'EMAIL' => $this->input->post('dmail'),
    'ADDRESS' => $this->input->post('daddress'),
    'JOB' => $this->input->post('djob')
    );
    $this->MemberModel->updateMemberInfo($id,$data);
    $data['message'] = 'Data Inserted Successfully';
    $this->load->view('MemberInfoView',$this->data);
     
    }
}
function paymentInfo($id){
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('dpayment', 'Username', 'required|min_length[1]|max_length[25]');
    $this->data['posts'] =$this->MemberModel->getMemberInfo($id);
    $this->data['payposts'] =$this->MemberModel->paymentInfo($id);  
    $this->data['products'] = $this->ProductModel->showProducts();
    $this->data['id'] = $id;
    if ($this->form_validation->run() == FALSE) {
 
    $this->load->view('PaymentInfoView', $this->data);
    } else {
    $data1 = array(
    'GIVEN' => $this->input->post('dpayment')
    );
    $this->MemberModel->updateMemberPayment($id,$data1);
    $data['message'] = 'Ödeme İşlemi Tamamlandı';
    $this->load->view('PaymentInfoView',$this->data);
    }
}
function AddNewProduct($id){
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('dpayment', 'Username', 'required|min_length[1]|max_length[25]'); 
    $this->data['products'] = $this->ProductModel->showProducts();
    $this->data['posts'] =$this->MemberModel->getMemberInfo($id);
    $this->data['id'] = $id;
    if ($this->form_validation->run() == FALSE) {
    $this->load->view('AddProductView', $this->data);
    } else {
    $data1 = array(
    'PRODUCTID' => $this->input->post('dproduct')
    );
    $this->MemberModel->updateNewProduct($id,$data1);
    $data['message'] = 'Ödeme İşlemi Tamamlandı';
    $this->load->view('PaymentInfoView',$this->data);
    }
}
}

?>