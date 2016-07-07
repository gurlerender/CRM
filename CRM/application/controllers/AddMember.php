<?php

class AddMember extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('MemberModel');
$this->load->model('ProductModel');
}

function index() {
//Including validation library
$this->load->helper('form');
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[2]|max_length[15]');
//Validating Name Field
$this->form_validation->set_rules('dsurname', 'Subject', 'required|min_length[3]|max_length[15]');
if ($this->form_validation->run() == FALSE) {
$data['products'] = $this->ProductModel->showProducts();
$this->load->view('AddNewMember',$data);
} else {
 //Setting values for tabel columns
$data = array(
'NAME' => $this->input->post('dname'),
'SURNAME' => $this->input->post('dsurname'),
'GENDER' => $this->input->post('dgender'),
'PHONE' => $this->input->post('dphone'),
'EMAIL' => $this->input->post('dmail'),
'ADDRESS' => $this->input->post('daddress'),
'JOB' => $this->input->post('djob'),
'STATUS' => 1,
'HEIGTH' => $this->input->post('dheigth'),
'WEIGTH' => $this->input->post('dweigth'),
'FOOTNUMBER' => $this->input->post('dfoot'),
'PRODUCT' => $this->input->post('dproduct'),
 'TCNO'=>  $this->input->post('dtc')
);

$payment = array(
 'PRODUCTID'=>$this->input->post('dproduct'),
 'SALESTIME'=>date('Y-m-j'),
 'PAYMENT'=>  $this->input->post('dprice')
);

//Transfering data to Model
$this->MemberModel->form_insert($data);
$this->MemberModel->payment($payment);
$data['message'] = 'Data Inserted Successfully';
$this->load->view('AddNewMember', $data);
}
}

}
?>
