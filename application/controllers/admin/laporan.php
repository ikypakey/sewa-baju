<?php 
	class Laporan extends CI_Controller{
		public function index()
		{
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$this->_rules();

			if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/filter_laporan');
		}else{
			$data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, baju bj, penyewa py WHERE tr.id_baju=bj.id_baju AND tr.id_penyewa=py.id_penyewa AND date(tanggal_sewa) >= '$dari' AND date(tanggal_sewa) <= '$sampai' ")->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/tampilkan_laporan', $data);
		}
		}

		public function _rules()
		{
			$this->form_validation->set_rules('dari','Dari Tanggal','required');
			$this->form_validation->set_rules('sampai','Sampai Tanggal','required');
		}

		public function print_laporan()
		{
			$dari = $this->input->get('dari');
			$sampai = $this->input->get('sampai');
			$data['tittle'] = "Print Laporan Transaksi";
			$data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, baju bj, penyewa py WHERE tr.id_baju=bj.id_baju AND tr.id_penyewa=py.id_penyewa AND date(tanggal_sewa) >= '$dari' AND date(tanggal_sewa) <= '$sampai' ")->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/footer');
			$this->load->view('admin/print_laporan', $data);
		}
	}
 ?>