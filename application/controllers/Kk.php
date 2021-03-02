<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Validasi NIK';
		$data['pengurus'] = $this->db->get('pengurus')->result_array();
		$this->load->view('kk/index',$data);
	}

    public function tambah($id_pengurus)
	{
		$data['judul'] = 'Validasi NIK';
		$data['pengurus'] = $this->db->get_where('pengurus',['id_pengurus'=>$id_pengurus])->row_array();
		$data['art'] = $this->db->get_where('art',['nopes_id'=>$data['pengurus']['no_pes'] ])->result_array();
		$this->load->view('kk/tambah',$data);
	}


}
