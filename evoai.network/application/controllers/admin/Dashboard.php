<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MY_Controller 
{
	function __construct()
	{
		parent::__construct();		
	}
	
	/* Dashboard Show */
	public function index()
	{		
		if($this->checkSessionAdmin())
		{			
			$this->data['valueBonus_details'] = $this->db->get_where('value_and_bonus', array('id'=>1))->row();
			$this->show_viewAdmin('admin/dashboard', $this->data);
		}
		else
		{
			$this->load->view('admin/login');
		}
    }
	
	public function notPermitted()
	{
		if($this->checkSessionAdmin())
		{			
			$this->show_viewAdmin('admin/dashboard_2', $this->data);
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
}

/* End of file */?>