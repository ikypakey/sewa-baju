<?php 
	class Sewa extends CI_Controller{
		public function tambah_sewa($id)
		{
			$data['detail'] = $this->sewa_model->ambil_id_baju($id);
			$this->load->view('templates_penyewa/header');
			$this->load->view('templates_penyewa/footer');
			$this->load->view('templates_penyewa/sidebar');
			$this->load->view('penyewa/tambah_sewa', $data);
		}

		public function tambah_sewa_aksi()
		{
		
			$id_penyewa = $this->session->userdata('id_penyewa');
			if($id_penyewa == FALSE){
					$this->session->set_flashdata('pesan2', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Login Dulu Yaaa
						<button type="button" class="close" data-dismissible="alert" aria-label="Close" >
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('penyewa/dashboard');

					}else{
						$id_penyewa = $this->session->userdata('id_penyewa');
						$id_baju = $this->input->post('id_baju');
						$tanggal_sewa = $this->input->post('tanggal_sewa');
						$tanggal_kembali = $this->input->post('tanggal_kembali');
						$denda = $this->input->post('denda');
						$harga = $this->input->post('harga');

						$data = array(

							'id_penyewa' => $id_penyewa,
							'id_baju' => $id_baju,
							'tanggal_sewa' => $tanggal_sewa,
							'tanggal_kembali' => $tanggal_kembali,
							'denda' => $denda,
							'harga' => $harga,
							'tanggal_pengembalian' => '-',
							'status_sewa' => 'Belum Selesai',
							'status_pengembalian' => 'Belum Kembali',
							'total_denda' => '0'
						);

						$this->sewa_model->insert_data($data, 'transaksi');

						$status = array(
							'status' => '0'
						);

						$id = array(
							'id_baju' => $id_baju
						);

						$this->sewa_model->update_data('baju', $status, $id);
						$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Transaksi ANda Berhasil
									<button type="button" class="close" data-dismissible="alert" aria-label="Close" >
									<span aria-hidden="true">&times;</span>
									</button>
									</div>');
						redirect('penyewa/dashboard');
					}
			}
				


			
		
	}
 ?>