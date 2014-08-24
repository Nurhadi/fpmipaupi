<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Home3 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	function index()
	{
		$this->load->view('home3_view');
	}
}

/* End of File : home3.php */
/* Location : ./controllers/home3.php */