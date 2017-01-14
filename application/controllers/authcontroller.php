<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Authcontroller extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Panggil Model Auth
		$this->load->model('auth');

	}

	public function auth() {
		// Cek apakah session sudah menyimpan id user
		// Jika sudah maka di redirect ke dashboard
		if (!empty($this->session->userdata('id'))) {
			redirect('dashboard');
		}

		// Jika Session Kosong, maka lakukan proses Authentikasi
		if ($_POST) {
			$auth = $this->auth->login($_POST);
			if (!empty($auth)) {
				// Menyimpan id dan nama pengguna ke dalam array
				// Array akan dimasukkan ke dalam session
				$data = [
					'id' => $auth->id,
					'nama' => $auth->nama,
				];
				// Setting session dengan data dari array yang telah dibuat
				$this->session->set_userdata($data);
				redirect('dashboard');
			} else {
				// Jika email / password tidak sesuai, maka akan diarahkan kembali ke halaman login.
				$this->session->set_flashdata('error', 'Email / Password Salah');
				redirect('welcome');
			}
		}
		$this->load->view('welcome_message');
	}

	public function logout() {
		// Pada saat logout, seluruh session milik user dihapus lalu diarahkan ke halaman login.
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		session_destroy();
		redirect('welcome');
	}
}
