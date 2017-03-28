<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class District extends CI_Controller {
	public function index()
	{
        $this->load->library('callapi');
        $this->load->helper('url');
        $id = ($_GET['id']) ? $_GET['id'] :'';
        
        $respone = $this->callapi->get_api($this->config->item('api_url')."/Districts/getbyCountyId?id=". $id);
        $data['districts'] = $respone->Districts;
		$this->load->view('district', $data);
	}
}
