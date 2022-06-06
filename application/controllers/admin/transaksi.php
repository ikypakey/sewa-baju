<?php 
	class Transaksi extends CI_Controller{
		public function index()
		{
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, penyewa py, baju  bj  WHERE tr.id_baju=bj.id_baju AND tr.id_penyewa=py.id_penyewa")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/footer');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_transaksi', $data);
		}

		public function pembayaran($id)
		{
			$where = array('id_sewa' => $id);
			$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_sewa='$id'")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/footer');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/konfirmasi_pembayaran', $data);
		}	

		public function cek_pembayaran()
		{
			$id = $this->input->post('id_sewa');
			$status_pembayaran = $this->input->post('status_pembayaran');

			$data = array(
				'status_pembayaran' => $status_pembayaran,
			);

			$where = array(
				'id_sewa' => $id
			);

			$this->sewa_model->update_data('transaksi', $data, $where);
			redirect('admin/transaksi');


		}

		public function download_pembayaran($id)
		{
			$this->load->helper('download');
			$filePembayaran = $this->sewa_model->downloadPembayaran($id);
			$file = 'uploads/'.$filePembayaran['bukti_pembayaran'];
			force_download($file, NULL);
		}	

		public function transaksi_selesai($id)
		{
			$where = array('id_sewa' => $id);
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_sewa='$id' ")->result();
			
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/footer');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/transaksi_selesai', $data);
		}

		public function transaksi_selesai_aksi()
		{

			$id = $this->input->post('id_sewa');
			$tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
			$status_sewa = $this->input->post('status_sewa');
			$tanggal_kembali = $this->input->post('tanggal_kembali');
			$denda = $this->input->post('denda');
			$status_pengembalian = $this->input->post('status_pengembalian');

			$x = strtotime($tanggal_pengembalian);
			$y = strtotime($tanggal_kembali);
			$selisih = abs($x - $y)/(60*60*24);
			$total_denda = $selisih * $denda;




			$data = array(
				'tanggal_pengembalian' => $tanggal_pengembalian,
				'status_sewa' => $status_sewa,
				'status_pengembalian' => $status_pengembalian,
				'total_denda' => $total_denda
			);

			$where = array(
				'id_sewa' => $id
			);

			$dataku = $this->sewa_model->get_where($where, 'transaksi')->row();

			$where2 = array('id_baju' => $dataku->id_baju);
			$data2 = array('status' => '1');

			$this->sewa_model->update_data('baju', $data2, $where2);



			$this->sewa_model->update_data('transaksi', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Transaksi Berhasil Di Update
						<button type="button" class="close" data-dismissible="alert" aria-label="Close" >
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('admin/transaksi');
		}

		public function transaksi_batal($id){
			$where = array('id_sewa' => $id);
			$data = $this->sewa_model->get_where($where, 'transaksi')->row();

			$where2 = array('id_baju' => $data->id_baju);
			$data2 = array('status' => '1');

			$this->sewa_model->update_data('baju', $data2, $where2);
			$this->sewa_model->hapus_data($where, 'transaksi');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Anda Berhasil membatalkan Transaksi!
						<button type="button" class="close" data-dismissible="alert" aria-label="Close" >
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('admin/transaksi');
		}
	}
 ?>