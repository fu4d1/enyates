<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function ajax()
	{

		$data = $this->input->post('text');
		echo json_encode($data);
		// echo '<strong class="text-uppercase text-success">'.substr($data,-1).'<strong>';
	}
}
