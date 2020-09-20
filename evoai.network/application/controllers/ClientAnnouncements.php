<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ClientAnnouncements extends MY_Controller 
{
	function __construct()	
	{
		parent::__construct();
	}	

	/*-------------------------------
		------------------------------------- 	
		*	@Function: Announcements 	*--
		-------------------------------------
	-----------------------------	*/	
	
	function index()
	{
		if($this->checkfrantSession())	
		{	
			$this->data['title'] = 'Announcements';	
			$this->data['menuId'] = 'Announcements';
			$this->data['announcements_details'] = $this->db->get_where('announcements', array('status'=>1))->result();	
			$this->show_viewFrontInner('announcements', $this->data); 
		}
		else
		{
			redirect('home');
		}
	}
}