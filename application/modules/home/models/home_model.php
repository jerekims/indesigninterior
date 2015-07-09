<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function send_comment($email, $subject, $message)
	{
		$comment = array(
						'comm_email'   => $email,
						'comm_subject' => $subject,
						'comm_message' => $message
						);

		$insert = $this->db->insert('comments', $comment);
		return $insert;

	}

	// function get_all_estates()
	// {
	// 	$sql = "SELECT 
	// 				estate_id as 'Estate ID',
	// 				estate_name as 'Estate Name',
	// 				estate_location as 'Estate Location',
	// 				estate_status as 'Estate Status',
	// 				date_registered as 'Date Registered'
	// 			FROM
	// 				`estates`";
	// 	$result = $this->db->query($sql);
	// 	return $result->result_array();
	// }
	// 
	// 
	


  
   
}