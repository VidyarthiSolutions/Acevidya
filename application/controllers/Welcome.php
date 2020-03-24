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

	public function registration()
	{
		$data = array(	'studentName' 		=> $this->input->post('studentName'),
						'emailAddress'		=> $this->input->post('emailAddress'),
						'password'			=> $this->input->post('password'),
						'type'				=> 'placement');
		$this->db->insert('studentdata',$data);
		$data = array(	'status'			=>	'Success');
		$this->load->view('landingPage/header');
		$this->load->view('landingPage/challenge',$data);
		$this->load->view('landingPage/footer');
	}

	public function signin()
	{
		echo $this->input->post('emailAddress');
		echo "<br>";
		echo $this->input->post('password');
	}

	public function read($blogName="")
	{
		$this->load->view('landingPage/header');
		$this->load->view('blogs/'.$blogName);
		$this->load->view('landingPage/footer');
	}

	/*public function index()
	{
		$this->load->view('landingPage/header');
		$this->load->view('blogs/blog_main');
		$this->load->view('landingPage/footer');
	}*/
}

?>