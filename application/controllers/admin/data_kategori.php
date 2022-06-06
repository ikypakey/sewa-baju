<?php 
	class Data_kategori extends CI_Controller{
		public function index()
		{
			$data['kategori'] = $this->sewa_model->get_data('kategori')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/data_kategori', $data);
		}

		public function tambah(){
			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->tambah_kategori();
			}else{
				$kode_kategori = $this->input->post('kode_kategori');
				$nama_kategori = $this->input->post('nama_kategori');


			$data = array(
				'kode_kategori' => $kode_kategori,
				'nama_kategori' => $nama_kategori,
			);

			$this->sewa_model->insert_data($data,'kategori');
			$this->session->set_flashdata('pesan');
			redirect('admin/data_kategori');
			}	
	}

	public function _rules(){
		$this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required');
		$this->form_validation->set_rules('nama_kategori', 'Nama kategori', 'required');

}

public function edit($id){
		$where = array('id_kategori' => $id);
		$data['kategori'] = $this->db->query("SELECT * FROM kategori WHERE id_kategori = '$id' ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_kategori', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$this->_rules();
		if ($this->form_validation->run() == FALSE )
		{
			$this->update_kategori();
		}else{
				$id  = $this->input->post('id_kategori');
				$kode_kategori = $this->input->post('kode_kategori');
				$nama_kategori = $this->input->post('nama_kategori');


			$data = array(
				'kode_kategori' => $kode_kategori,
				'nama_kategori' => $nama_kategori,
			);

			$where = array (
				'id_kategori' => $id
			);

			$this->sewa_model->update_data('kategori', $data, $where);
			$this->session->set_flashdata('pesan');
			redirect('admin/data_kategori');
		}
		}

	public function hapus($id){
		$where = array(
			'id_kategori' => $id);
		$this->sewa_model->hapus_data($where, 'kategori');
		redirect('admin/data_kategori');
	}

	}

?>