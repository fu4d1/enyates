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

	public function ubahArt($id_art)
	{
		$data['art'] = $this->db->get_where('art',['id_art'=>$id_art])->row_array();
		$this->load->view('kk/ubah_art',$data);
	}

	public function simpanArt()
	{
		$daput = $this->input->post();
		var_dump($daput);
		die();
		$data['art'] = $this->db->get_where('art',['id_art'=>$id_art])->row_array();
		$this->load->view('kk/ubah_art',$data);
	}


}
