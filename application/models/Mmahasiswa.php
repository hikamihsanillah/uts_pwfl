<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Mmahasiswa extends CI_Model
{
	public function ambilmhs(){
		$query = $this->db->get('baru');
		return $query->result_array();
	}
	public function editambilmhs($id){
		$this->db->where('id',$id);
		$query = $this->db->get('baru');
		return $query->result_array();
	}
	public function tambah_mhs()
	{
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nama_mhs' => $this->input->post('nama'),
		'jenis_kelamin' => $this->input->post('jk'),
		'alamat' => $this->input->post('alamat'),
		'no_hp' => $this->input->post('no_hp'));

	return $this->db->insert('baru',$data);
	}

	public function edit_mhs()
	{
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nama_mhs' => $this->input->post('nama'),
		'jenis_kelamin' => $this->input->post('jk'),
		'alamat' => $this->input->post('alamat'),
		'no_hp' => $this->input->post('no_hp'));

		$id_lama = $this->input->post('id');
		$this->db->where('id', $id_lama);
		return $this->db->update('baru',$data);
	}

	public function jumlah(){
		$hasil ="SELECT count(nim) as jumlah FROM baru";
		$tampil = $this->db->query($hasil);
		return $tampil->row()->jumlah;
	}

	public function log(){
		$hasil ="SELECT count(nim) as jumlah FROM log";
		$tampil = $this->db->query($hasil);
		return $tampil->row()->jumlah;
	}

	public function hapus_mhs($id){
		return $this->db->delete('baru',array('id' =>$id));
	}
}

