<?php 


class Mahasiswa extends CI_Controller{

	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');


		if (!$this->form_validation->run()==false) {
			$this->Mmahasiswa->tambah_mhs();
			redirect('Cmahasiswa/');
		}else {
			redirect('Cmahasiswa/tambahmhs');
		}
	}
	public function editmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');

		if ($this->form_validation->run()!=false) {
			$this->Mmahasiswa->edit_mhs();
			redirect('Cmahasiswa');
		}else{
			redirect('Cmahasiswa/editmhs');
		}
	}

	public function hapusmhs($id) {
		if ($id != ""){
			$this->Mmahasiswa->hapus_mhs($id);
			redirect('Cmahasiswa');
		}else{
			redirect('Cmahasiswa');
		}
	}
	
}

