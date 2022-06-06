<?php 
	class Data_penyewa extends CI_Controller{
		public function index()
		{
			$data['penyewa'] = $this->sewa_model->get_data('penyewa')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/data_penyewa', $data);
		}


		public function tambah()
		{
			$this->_rules();
			if($this->form_validation->run() ==  FALSE){
				$this->tambah_penyewa();
			}else{
				$nama = $this->input->post('nama');
				$username = $this->input->post('username');
				$alamat = $this->input->post('alamat');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$no_telepon = $this->input->post('no_telepon');
				$no_ktp = $this->input->post('no_ktp');
				$password = md5($this->input->post('password'));

				$data = array(
					'nama'  => $nama,
					'username'  => $username,
					'alamat'  => $alamat,
					'jenis_kelamin'  => $jenis_kelamin,
					'no_telepon'  => $no_telepon,
					'no_ktp'  => $no_ktp,
					'password'  => $password
				);
				$this->sewa_model->insert_data($data,'penyewa');
				$this->session->set_flashdata('pesan');
				redirect('admin/data_penyewa');

			}
		}

		public function edit($id){
		$where = array('id_penyewa' => $id);
		$data['penyewa'] = $this->sewa_model->get_data('penyewa')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_penyewa', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
				$id  = $this->input->post('id_penyewa');
				$nama = $this->input->post('nama');
				$username = $this->input->post('username');
				$alamat = $this->input->post('alamat');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$no_telepon = $this->input->post('no_telepon');
				$no_ktp = $this->input->post('no_ktp');
				$password = md5($this->input->post('password'));


			$data = array(
					'nama'  => $nama,
					'username'  => $username,
					'alamat'  => $alamat,
					'jenis_kelamin'  => $jenis_kelamin,
					'no_telepon'  => $no_telepon,
					'no_ktp'  => $no_ktp,
					'password'  => $password
			);

			$where = array (
				'id_penyewa' => $id
			);

			$this->sewa_model->update_data('penyewa', $data, $where);
			$this->session->set_flashdata('pesan');
			redirect('admin/data_penyewa');
		}

	public function hapus($id){
		$where = array(
			'id_penyewa' => $id);
		$this->sewa_model->hapus_data($where, 'penyewa');
		redirect('admin/data_penyewa');
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