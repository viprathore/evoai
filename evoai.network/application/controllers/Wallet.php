<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Wallet extends MY_Controller {
	function __construct()
	{
		parent::__construct();
    }	
	
	/*--------------------------------------------------------------------
 	*	@Function: Wallet
 	*---------------------------------------------------------------------
	*/
	function index()
	{
		if($this->checkfrantSession())
		{
			$this->data['title'] = 'Wallet';	
			$this->data['menuId'] = 'Wallet';		
			$this->show_viewFrontInner('wallet', $this->data); 
		}
		else
		{
			redirect('login');
		}
 	}		
}
