<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		//$this->load->view('login');
		$this->load->view('panel_control');
	}



	public function userLogin(){

		$this->load->view('panel_control');
	}
}
