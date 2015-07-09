<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public $logged_in;

	function __construct()
    {

        
        $this->load->model('home/home_model');
        
        parent::__construct();
          
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

<<<<<<< HEAD

    function portfolio(){
        $data['']='';
        $data['top_navbar1']='home/navbar_view1';
        $data['content_page']='home/v_portfolio';
        $data['main_footer']='home/footer_view1';

        $this->template->call_template($data);
    }
	
    function account(){
        $data['']='';
        $data['top_navbar1']='home/navbar_view1';
        $data['content_page']='home/v_account';
        $data['main_footer']='home/footer_view1';

=======
    function contact()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/contacts';
        $data['main_footer'] = 'home/footer_view1';
        
        
>>>>>>> 90444482a6d0c726e86d6443b1845482c274b709
        $this->template->call_template($data);
    }

    function sendcomment()
    {
        
        $email = $this->input->post('useremail');
        $subject = $this->input->post('usersubject');
        $message = $this->input->post('usermessage');

        $sent = $this->home_model->send_comment($email, $subject, $message);

        return $sent;
   
    }

	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */