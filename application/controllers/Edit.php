<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
    public function __construct() {
		parent::__construct();
        
		$this->load->library('callapi');
        $this->load->helper('url');
        $this->load->library('session');
	}
	public function index() {
        $id = ($_GET['id']) ? $_GET['id'] :'';
        $respone = $this->callapi->get_api($this->config->item('api_url')."/Counties/".$id);
        $data['county'] = $respone;
		$this->load->view('edit', $data);
	}
    public function submit($id){
        $data_update = array(
          "name" => $this->input->post("name"),
          "type" => $this->input->post("type"),
          "code" => $this->input->post("code"),
        );
        $respone = $this->callapi->put_api($this->config->item('api_url')."/Counties/".$id, $data_update);
        $this->session->set_flashdata("flash_mess", "Update Success");
        redirect(base_url().'index.php/county');
    }
}
