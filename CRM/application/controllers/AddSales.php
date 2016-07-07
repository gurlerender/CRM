<?php

class AddSales extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('SalesModel');

}
function index() {
//Including validation library
$this->load->helper('form');
$this->load->library('form_validation');


if ($this->form_validation->run() == FALSE) {
$this->load->view('AddSalesView');
} else {
//Setting values for tabel columns
$data = array(
'NAME' => $this->input->post('dname'),
'CAPACITY' => $this->input->post('dnumber')
);

//Transfering data to Model
$this->SalesModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
$this->load->view('AddNewSales', $data);
}
}

}

?>