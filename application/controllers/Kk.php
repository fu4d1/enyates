<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Validasi NIK';
		$data['pengurus'] = $this->db->get('pengurus')->result_array();
		$this->load->view('kk/index',$data);
	}

    public function tambah($id_pengurus=null)
	{
		$data['judul'] = 'Validasi NIK';
		$data['pengurus'] = $this->db->get_where('pengurus',['id_pengurus'=>$id_pengurus])->row_array();
		$data['art'] = $this->db->get_where('art',['nopes_id'=>$data['pengurus']['no_pes'] ])->result_array();
		$this->load->view('kk/tambah',$data);
	}

	public function ubahArt($id_art=null,$id_pengurus)
	{
		$data['id_pengurus'] = $id_pengurus;
		$data['art'] = $this->db->get_where('art',['id_art'=>$id_art])->row_array();
		$this->load->view('kk/ubah_art',$data);
	}

	public function hapusArt($id_art,$id_pengurus)
	{
		$this->db->delete('art', array('id_art' => $id_art));
		redirect('kk/tambah/'.$id_pengurus);
	}

	public function simpanArt($id_pengurus)
	{
		$daput = $this->input->post();

		$this->db->select('no_pes');
		$nopes_id = $this->db->get_where('pengurus',['id_pengurus' => $id_pengurus])->row_array();
		$nopes_id = $nopes_id['no_pes'];

		if ($daput['id_art'] == 0) {
			$object = [
				'nama_art' => $daput['nama_kk'],
				'nama_kk' => $daput['nama_kk'],
				'nik' => $daput['nik'],
				'ibu_kandung' => $daput['ibu_kandung'],
				'nopes_id' => $nopes_id
			];
			$this->db->insert('art',$object);
		}else{
			$this->db->where('id_art',$daput['id_art']);
			$this->db->update('art',$daput);
		}
		redirect('kk/tambah/'.$id_pengurus);
	}


}
