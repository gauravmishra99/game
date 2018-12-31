<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller{
  
    public function index() {
        //echo "Hello home controller";
        $this->load->view('game');
        
    }
    
}
?>


