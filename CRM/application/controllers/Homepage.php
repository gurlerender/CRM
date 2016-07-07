<?php
class Homepage extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('SeanceModel');
        }
       /*
    public function index(){
        $room = $this->input->post('room');

        if($room =='Diet'){
            $this->data['posts'] = $this->SeanceModel->getDiet();
            
        }
        else if($room =='Macro'){
            $this->data['posts'] = $this->SeanceModel->getMacro();
           
        }
        else {
            $this->data['posts'] = $this->SeanceModel->getJoseph();
            
        }
        $this->load->view('Homepage',$this->data);
       
    }
    
    */
    public function index(){
        $this->data['posts_diet'] = $this->SeanceModel->getDiet();
        $this->data['posts_macro'] = $this->SeanceModel->getMacro();
        $this->data['posts_joseph'] = $this->SeanceModel->getJoseph();
        $this->load->view('Homepage', $this->data);
    }
   
    
}
?>