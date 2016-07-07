<?php

class AddProduct extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('ProductModel');

}
function index() {
//Including validation library
$this->load->helper('form');
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//Validating Name Field
$this->form_validation->set_rules('dproductname', 'Username', 'required|min_length[2]|max_length[80]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('AddNewProduct');
} else {
//Setting values for tabel columns
$data = array(
'PRODUCTNAME' => $this->input->post('dproductname'),
'DURATION' => $this->input->post('dtime'),
'ENTRYTIME' => $this->input->post('dentryright'),
'TYPE' => $this->input->post('dtype'),
'PRICE' => $this->input->post('dprice'),
'STATUS' => $this->input->post('dstatus')
);

//Transfering data to Model
$this->ProductModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
$this->load->view('AddNewProduct', $data);
}
}

}

?>