<?php 
	class Pria extends CI_Controller{
		public function index()
		{
			$data['baju'] = $this->sewa_model->get_data('baju')->result();
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/pria', $data);
		}
		
	}
 ?>