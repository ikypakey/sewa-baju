<?php 
	class Kategori extends CI_Controller{
		public function baju_adat()
		{
			$data['baju_adat'] = $this->model_kategori->data_baju_adat()->result();
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/baju_adat', $data);
		}

		public function baju_nikah()
		{
			$data['baju_nikah'] = $this->model_kategori->data_baju_nikah()->result();
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/baju_nikah', $data);
		}

		public function baju_pesta()
		{
			$data['baju_pesta'] = $this->model_kategori->data_baju_pesta()->result();
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/baju_pesta', $data);
		}

		public function baju_kostum()
		{
			$data['baju_kostum'] = $this->model_kategori->data_baju_kostum()->result();
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/baju_kostum', $data);
		}
		
	}
 ?>