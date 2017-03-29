<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class County extends CI_Controller {

    public function __construct() {
		parent::__construct();
	}
    
	public function index()
	{
        $respone = $this->callapi->get_api($this->config->item('api_url')."/Counties");
        $data['counties'] = $respone;
        $data['mess'] = $this->session->flashdata('flash_mess');
        $data['username'] = $_SESSION['username'];
		$this->load->view('county', $data);
	}
    public function logout() {
        unset($_SESSION['username']);
        redirect(base_url());
    }
}
