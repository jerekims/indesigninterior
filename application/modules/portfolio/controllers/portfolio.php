<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {

	public $logged_in;

	function __construct()
    {

        $this->load->library('form_validation');

        parent::__construct();

        if ($this->session->userdata('logged_in')) {
          $this->logged_in = TRUE;
         } else {
          //$this->logged_in = FASLE;
         }
          
    }

    function page()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'portfolio/pppp';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }

	





	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */