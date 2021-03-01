<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk extends CI_Controller {

	public function index()
	{
		$this->load->view('kk/index');
	}

    public function tambah()
	{
		$this->load->view('kk/tambah');
	}


}
