<?php 
	class Dashboard extends CI_Controller{
		
		public function index()
	{
			$data['baju'] = $this->sewa_model->get_data('baju')->result();
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/dashboard', $data);
	}

		public function detail_baju($id)
		{
			$data['detail'] = $this->sewa_model->ambil_id_baju($id);
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/detail_baju', $data);
		}

	}
 ?>