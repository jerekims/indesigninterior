<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {

	public $logged_in;

	function __construct()
    {

        
        $this->load->model('home/home_model');
        
        $this->load->library('form_validation');

        parent::__construct();

        if ($this->session->userdata('logged_in')) {
          $this->logged_in = TRUE;
         } else {
          //$this->logged_in = FASLE;
         }
          
    }
	
}

/* End of file welcome.php */.
/* Location: ./application/controllers/welcome.php */