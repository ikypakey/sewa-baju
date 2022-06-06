<?php 
	class Data_baju extends CI_Controller{
		public function index()
		{
			$data['baju'] = $this->sewa_model->get_data('baju')->result();
			$data['kategori'] = $this->sewa_model->get_data('kategori')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/data_baju', $data);
		}


	public function tambah(){
				$nama_kategori = $this->input->post('nama_kategori');
				$nama_baju = $this->input->post('nama_baju');
				$ukuran = $this->input->post('ukuran');
				$status = $this->input->post('status');
				$harga = $this->input->post('harga');
				$denda = $this->input->post('denda');
				$foto = $_FILES['foto']['name'];
				if($foto=''){}else{
					$config ['upload_path'] = './uploads';
					$config ['allowed_types'] = 'jpg|jpeg|png';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('foto')){
						echo "Gagal";
					}else{
						$foto = $this->upload->data('file_name');
					}
				}


			$data = array(
				'nama_kategori' => $nama_kategori,
				'nama_baju' => $nama_baju,
				'ukuran' => $ukuran,
				'status' => $status,
				'harga' => $harga,
				'denda' => $denda,
				'foto' => $foto
			);

			$this->sewa_model->insert_data($data,'baju');
			$this->session->set_flashdata('pesan');
			redirect('admin/data_baju');
			}	






	public function edit($id){
		$where = array('id_baju' => $id);
		$data['baju'] = $this->db->query("SELECT * FROM baju bj, kategori kt WHERE bj.nama_kategori = kt.nama_kategori AND bj.id_baju='$id' ")->result();
		$data['kategori'] = $this->sewa_model->get_data('kategori')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_baju', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){

				$id  = $this->input->post('id_baju');
				$nama_kategori = $this->input->post('nama_kategori');
				$nama_baju = $this->input->post('nama_baju');
				$ukuran = $this->input->post('ukuran');
				$status = $this->input->post('status');
				$harga = $this->input->post('harga');
				$denda = $this->input->post('denda');
				$foto = $_FILES['foto']['name'];
				if($foto){
					$config ['upload_path'] = './uploads';
					$config ['allowed_types'] = 'jpg|jpeg|png';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('foto')){
						$foto = $this->upload->data('file_name');
						$this->db->set('foto', $foto);
					}else{
						echo $this->upload->display_errors();
					}
				}


			$data = array(
				'nama_kategori' => $nama_kategori,
				'nama_baju' => $nama_baju,
				'ukuran' => $ukuran,
				'status' => $status,
				'harga' => $harga,
				'denda' => $denda,
			);

			$where = array (
				'id_baju' => $id
			);

			$this->sewa_model->update_data('baju', $data, $where);
			$this->session->set_flashdata('pesan');
			redirect('admin/data_baju');
		}

	public function hapus($id){
		$where = array(
			'id_baju' => $id);
		$this->sewa_model->hapus_data($where, 'baju');
		redirect('admin/data_baju');
	}

		public function _rules(){
		$this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required');
		$this->form_validation->set_rules('nama_baju', 'Nama Baju', 'required');
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	}

	}
?>