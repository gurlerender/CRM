<?php
class AddSeance extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->helper('form');
$this->load->model('SeanceModel');
$this->load->model('SalonModel');
}
function index() {
$this->load->helper('form');
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
$this->form_validation->set_rules('dseancename', 'Username', 'required|max_length[40]');
if ($this->form_validation->run() == FALSE) {
$data['seances'] = $this->SalonModel->showSeances();
$data['salons'] =  $this->SalonModel->showSalons();
$data['coaches'] =  $this->SalonModel->showCoaches();
$data['days'] =  $this->SalonModel->showDays();
$data['hours'] =  $this->SalonModel->showHours();
$this->load->view('AddNewSeance',$data);
} else {
//Setting values for tabel columns
$data = array(
'SEANCENAME' => $this->input->post('dseancename'),
'SEANCESALON' => $this->input->post('dsalonname'),
'SEANCEDAY' => $this->input->post('dday'),
'SEANCEHOUR' => $this->input->post('dhour'),
'SEANCECOACH' => $this->input->post('dcoachname'),
'STATUS' => 1
);

//Transfering data to Model
$this->SeanceModel->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
$this->load->view('AddNewSeance', $data);
}
}
function search() {
      $this->load->model('SalonModel');
    if(isset($_GET['term'])){
    $result = $this->SalonModel->search($_GET['term']);
    if(count($result) >0){
        foreach ($result as $pr)
            $arr_result[] = $pr->name;
        echo json_encode($arr_result);
    }
    }
}

function autocomplete($a)
{
  $i = 0;
  $this->load->model('SalonModel');
  $companyList = $this->SalonModel->get_companies($a);

  if(count($companyList) > 0):
    echo "<ul>";
    foreach($companyList as $comp):
      echo "<li id='".$companyList[$i]['id']."'><a href='#'>".$companyList[$i]['name']."</a></li>";
      $i++;
    endforeach;
    echo "</ul>";
  endif;
}
}

?>