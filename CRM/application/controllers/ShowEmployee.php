<?php

class ShowEmployee extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('EmployeeModel');
}
function index() {
 $this->data['posts'] = $this->EmployeeModel->getAllValue(); 
 $this->load->view('ShowEmployeeView', $this->data);
}

}

?>