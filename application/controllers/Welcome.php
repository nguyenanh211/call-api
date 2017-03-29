<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
		parent::__construct();

	}
    
	public function index($msg = NULL)
	{
        $data['msg'] = $msg;
		$this->load->view('welcome_message', $data);
	}
    public function login() {
        $data = array(
          "username" => $this->input->post("username"),
          "password" => $this->input->post("password"),
        );
        $respone = $this->callapi->post_api($this->config->item('api_url')."/Customers/login", $data);
        if (!$respone->error) {
            $this->session->set_userdata('username',$this->input->post("username"));
            $this->session->set_userdata('id',$respone->id);
            redirect(base_url().'index.php/county');
        }
        else {
            $msg = "Invalid username and/or password";
            $this->index($msg);
        }
        
    }
}
