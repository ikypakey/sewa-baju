<?php 

class Auth extends CI_Controller{
	public function login()
	{

		$this->_rules();


		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('form_login');
			$this->load->view('templates_admin/header');
			}else{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));

				$cek = $this->sewa_model->cek_login($username, $password);

				if($cek == FALSE)
				{					
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Anda Salah!
						<button type="button" class="close" data-dismissible="alert" aria-label="Close" >
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('auth/login');
				}else{
					$this->session->set_userdata('id_penyewa', $cek->id_penyewa);
					$this->session->set_userdata('useramne', $cek->username);
					$this->session->set_userdata('pilihan_id', $cek->pilihan_id);
					$this->session->set_userdata('nama', $cek->nama);

					switch ($cek->pilihan_id) {
						case 1 : redirect('admin/dashboard');
							break;
						case 2 : redirect('penyewa/dashboard');
							break;

					}
				}
			}

	}

	public function _rules(){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Passowrd', 'required');

		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('penyewa/dashboard');
		}

}
?>