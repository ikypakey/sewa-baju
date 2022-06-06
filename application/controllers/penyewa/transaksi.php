<?php 
	class Transaksi extends CI_Controller{
		public function index()
		{
			$penyewa = $this->session->userdata('id_penyewa');
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, penyewa py, baju  bj  WHERE tr.id_baju=bj.id_baju AND tr.id_penyewa=py.id_penyewa AND py.id_penyewa='$penyewa' ORDER BY id_sewa DESC ")->result();
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/transaksi', $data);
		}

		public function pembayaran($id){
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, penyewa py, baju  bj  WHERE tr.id_baju=bj.id_baju AND tr.id_penyewa=py.id_penyewa AND tr.id_sewa='$id' ORDER BY id_sewa DESC ")->result();

			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/pembayaran', $data);
		}

		public function pembayaran_aksi(){
			$id = $this->input->post('id_sewa');
			$bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
				if($bukti_pembayaran){
					$config ['upload_path'] = './uploads';
					$config ['allowed_types'] = 'pdf|jpg|jpeg|png';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('bukti_pembayaran')){
						$bukti_pembayaran = $this->upload->data('file_name');
						$this->db->set('bukti_pembayaran', $bukti_pembayaran);
					}else{
						echo $this->upload->display_errors();
					}
				}

				$data = array(
					'bukti_pembayaran' => $bukti_pembayaran,
				);

				$where = array(
					'id_sewa' => $id
				);

				$this->sewa_model->update_data('transaksi', $data, $where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Bukti Pembayaran Anda Berhasil DiUpload
						<button type="button" class="close" data-dismissible="alert" aria-label="Close" >
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
				redirect('penyewa/transaksi');
		}

		public function cetak_invoice($id){
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, penyewa py, baju  bj  WHERE tr.id_baju=bj.id_baju AND tr.id_penyewa=py.id_penyewa AND tr.id_sewa='$id' ")->result();
			$this->load->view('penyewa/cetak_invoice', $data);
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
		}

		public function batal_transaksi($id){
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
			redirect('penyewa/transaksi');
		}


	}
 ?>