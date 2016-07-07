<?php

class AddEmployee extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('EmployeeModel');

}
function index() {
$this->load->helper('form');
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[2]|max_length[15]');
if ($this->form_validation->run() == FALSE) {
$this->load->view('AddNewEmployee');
} else {
$data = array(
'NAME' => $this->input->post('dname'),
'SURNAME' => $this->input->post('dsurname'),
'JOB' => $this->input->post('djob'),
'STATUS' => $this->input->post('dstatus')
);
$this->EmployeeModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
$this->load->view('AddNewEmployee', $data);
}
}
}
?>