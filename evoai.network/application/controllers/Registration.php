<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Registration extends MY_Controller {
	function __construct()
	{
		parent::__construct();
    }	
	
	/*--------------------------------------------------------------------
 	*	@Function: Registration
 	*---------------------------------------------------------------------
	*/
	function index()
	{
		$this->data['title'] = 'Registration';
		$referral_code = $_GET['e'];
		if($referral_code)
		{
			$this->data['referral_code'] = $referral_code;
		}
		else
		{
			$this->data['referral_code'] = '';
		}
 		$this->show_viewFrontInner('registration', $this->data);
 	}		
}
