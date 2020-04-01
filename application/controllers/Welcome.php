<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('landingPage/header');
		$this->load->view('landingPage/main');
		$this->load->view('landingPage/footer');
	}

	public function challenge()
	{
		$this->load->view('landingPage/header');
		$this->load->view('landingPage/challenge');
		$this->load->view('landingPage/footer');
	}

	public function read($blogName="")
	{
		$this->load->view('landingPage/header');
		$this->load->view('blogs/'.$blogName);
		$this->load->view('landingPage/footer');
	}

	public function blog()
	{
		$this->load->view('landingPage/header');
		$this->load->view('blogs/blog_main');

		/*$this->load->view('blogs/template');
		$this->load->view('landingPage/footer');*/

	}
}

?>
