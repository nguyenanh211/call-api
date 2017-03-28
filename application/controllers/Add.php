<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
    public function __construct() {
		parent::__construct();
        
		$this->load->library('callapi');
        $this->load->helper('url');
        $this->load->library('session');
	}
	public function index()
	{
		$this->load->view('add');
        
	}
    public function submit(){
        $data = array(
          "name" => $this->input->post("name"),
          "type" => $this->input->post("type"),
          "code" => $this->input->post("code"),
        );
        $respone = $this->callapi->post_api($this->config->item('api_url')."/Counties", $data);
        $this->session->set_flashdata("flash_mess", "Add Success");
        redirect(base_url().'index.php/county');
    }
}
