<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
class Kategoricontroller extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Panggil model kategori.
		$this->load->model('kategori');

		// Panggil library form validation.
		$this->load->library('form_validation');
	}

	/**
	 *
	 * Method Index
	 *
	 */

	public function index() {
		$data['title'] = "Daftar Kategori";

		// Panggil data dari model kategori untuk ditampilkan pada table di view.
		$data_kategori['data'] = $this->kategori->getkategori()
			->result();
		// print_r($data_lokasi);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/index', $data_kategori);
		$this->load->view('templates/footer');
	}

	/**
	 *
	 * Method tambah
	 *
	 */

	public function tambah() {
		$data['title'] = "Tambah Kategori";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/tambah');
		$this->load->view('templates/footer');
	}

	/**
	 *
	 * Method untuk simpan data ke database.
	 *
	 */

	public function simpandata() {

		// Cek apakah inputan kolom nama kosong atau tidak.

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE) {

			// Jika inputan kosong maka di redirect kembali.
			redirect('kategori/tambah');
			// print_r($_POST);
		} else {
			// Jika inputan tidak kosong, inputan akan di push ke array data
			$data = array(
				'nama' => $this->input->post('nama'),
			);
			// Memanggil method dari model kategori untuk insert data.
			$this->kategori->insert($data);
			redirect('kategori/index');
		}
	}

	public function delete() {
		// Mengambil data dari url segmen ke 3
		// Contoh url localhost/lokasi/edit/3
		// angka 3 adalah segmen nya.
		$id = $this->uri->segment(3);
		// Memanggil method delete dari model kategori
		$this->kategori->delete($id);
		redirect('kategori/index');
	}

	public function edit() {
		// Mengambil data dari url segmen ke 3
		// Contoh url localhost/lokasi/edit/3
		// angka 3 adalah segmen nya
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Kategori";

		// Memanggil data dengan id yang telah di tentukan, jadi hanya dengan id x saja yang keluar data nya.
		$data_kategori['data'] = $this->kategori->getkategori_by_id($id);
		// print_r($data_lokasi);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/edit', $data_kategori);
		$this->load->view('templates/footer');
	}

	public function doupdate() {
		// Menangkap inputan id dari kolom dengan tipe hidden.
		$id = $this->input->post('id');

		// Cek kembali apakah kolom nama kosong atau tidak.
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('kategori/edit/' . $id);
			// print_r($_POST);
		} else {
			// Jika kolom nama tidak kosong, maka inputan akan di push ke array data.
			$data = array(
				'nama' => $this->input->post('nama'),
			);

			// Melakukan proses update dengan memanggil method doupdate dari model kategori.
			$this->kategori->doupdate($id, $data);

			redirect('kategori/index');
		}
	}
}