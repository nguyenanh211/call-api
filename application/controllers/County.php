<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class County extends CI_Controller {

    public function __construct() {
		parent::__construct();
        
		$this->load->library('callapi');
        $this->load->helper('url');
        $this->load->library('session');
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
        if (!empty($_SESSION['id'])) {
            $data = array(
                "access_token" => $_SESSION['id'],
            );
            $respone = $this->callapi->post_api($this->config->item('api_url')."/Customers/logout", $data);
            unset($_SESSION['id']);
            unset($_SESSION['username']);
            redirect(base_url());
        }
    }
}
