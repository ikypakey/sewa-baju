<?php 

class Register extends CI_Controller{
	public function index()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('register_form');
			$this->load->view('templates_admin/header');
		}else{
			$nama = $this->input->post('nama');
				$username = $this->input->post('username');
				$alamat = $this->input->post('alamat');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$no_telepon = $this->input->post('no_telepon');
				$no_ktp = $this->input->post('no_ktp');
				$password = md5($this->input->post('password'));
				$pilihan_id = '2';

				$data = array(
					'nama'  => $nama,
					'username'  => $username,
					'alamat'  => $alamat,
					'jenis_kelamin'  => $jenis_kelamin,
					'no_telepon'  => $no_telepon,
					'no_ktp'  => $no_ktp,
					'password'  => $password,
					'pilihan_id'  => $pilihan_id
				);
				$this->sewa_model->insert_data($data,'penyewa');
				$this->session->set_flashdata('pesan');
				redirect('auth/login');
		}

		
	}

	public function _rules(){
			$this->form_validation->set_rules('nama', 'Nama Penyewa', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
			$this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
			$this->form_validation->set_rules('password', 'Passowrd', 'required');

		}
}
 ?>
