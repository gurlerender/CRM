<?php

class AddSalon extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('SalonModel');

}
function index() {
//Including validation library
$this->load->helper('form');
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[2]|max_length[15]');
//Validating Name Field
$this->form_validation->set_rules('dcapacity', 'Subject', 'required|min_length[2]|max_length[15]');
if ($this->form_validation->run() == FALSE) {
$this->load->view('AddNewSalon');
} else {
//Setting values for tabel columns
$data = array(
'NAME' => $this->input->post('dname'),
'CAPACITY' => $this->input->post('dcapacity')
);

//Transfering data to Model
$this->SalonModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
$this->load->view('AddNewSalon', $data);
}
}

}

?>