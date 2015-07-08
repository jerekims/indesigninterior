<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

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


    function index()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/v_home';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }


    function services()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/services';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }

    function about()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/about';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }

    function contact()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/contacts';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }

	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */