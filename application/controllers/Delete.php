<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
    public function __construct() {
		parent::__construct();
        
	}
	public function index()
	{
        $id = ($_GET['id']) ? $_GET['id'] :'';
        $respone = $this->callapi->delete_api($this->config->item('api_url')."/Counties/".$id);
        $this->session->set_flashdata("flash_mess", "Delete Success");
        redirect(base_url().'index.php/county');
	}
}
