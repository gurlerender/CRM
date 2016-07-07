<?php
class ShowIncome extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('ProductModel');
}
function index() {
 $this->data['posts'] = $this->ProductModel->getPrice(); 
 $this->load->view('ShowIncomeView', $this->data);
}

}

?>