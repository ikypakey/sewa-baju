<?php 
	class Dashboard extends CI_Controller{
		public function index()
		{
			$data['total_transaksi'] = $this->sewa_model->jumlah_transaksi();
			$data['total_disewa'] = $this->sewa_model->jumlah_disewa();
			$data['total_free'] = $this->sewa_model->jumlah_free();
			$data['total_penyewa'] = $this->sewa_model->jumlah_penyewa();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/dashboard', $data);
		}



	}
 ?>