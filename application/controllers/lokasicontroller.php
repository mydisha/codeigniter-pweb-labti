<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Lokasicontroller extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Panggil Model Lokasi
		$this->load->model('lokasi');
		// Panggil Model Kategori
		$this->load->model('kategori');
		// Panggil Library Form Validation
		$this->load->library('form_validation');
	}

	public function index() {
		$data['title'] = "Daftar Lokasi";
		// Mengambil data lokasi yang telah di input untuk ditampilkan dalam bentuk tabel pada view lokasi.
		$data_lokasi['data'] = $this->lokasi->getlokasi()
			->result();
		// print_r($data_lokasi);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('lokasi/index', $data_lokasi);
		$this->load->view('templates/footer');
	}

	public function tambah() {
		// Method untuk memanggil view tambah
		$data['title'] = "Tambah Lokasi";

		// Ambil data kategori untuk di tampilkan pada select box.
		$data_kategori['list_kategori'] = $this->kategori->getkategori()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('lokasi/tambah', $data_kategori);
		$this->load->view('templates/footer');
	}

	public function simpandata() {
		// Lakukan validasi dari inputan untuk kolom nama, latitude, longitude, alamat, waktu buka, waktu tutup
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('latitude', 'Latitude', 'required');
		$this->form_validation->set_rules('longitude', 'Longitude', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('waktu_buka', 'Waktu Buka', 'required');
		$this->form_validation->set_rules('waktu_tutup', 'Waktu Tutup', 'required');

		if ($this->form_validation->run() == FALSE) {
			// Jika validasi gagal, akan diarahkan kembali ke form input.
			redirect('lokasi/tambah');
			// print_r($_POST);
		} else {
			// Array untuk konfigurasi upload gambar
			// Lokasi penyimpanan gambar ada pada folder uploads
			// Ukuran maksimum gambar adalah 2MB
			// Extensi yang diterima adalah gif, jpg, png, jpeg
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Maksimal 2MB
			);

			// Panggil library upload dan setting sesuai dengan array config yang telah dibuat.
			$this->load->library('upload', $config);

			// Jika ada file yang di input, maka akan di upload
			if ($this->upload->do_upload('image')) {
				// Ambil array informasi hasil upload
				$upload = $this->upload->data();
				// Ambil nama file dari array informasi hasil upload.

				// Set variable file_upload dengan nama file yang di upload
				$file_upload = $upload['file_name'];
			} else {
				// Jika tidak ada file yg di upload, maka set variable dengan nama gambar default
				$file_upload = 'default.png';
			}

			// Array data diisi oleh inputan pengguna yang telah lolos validasi.
			$data = array(
				'user_id' => $this->session->userdata('id'),
				'kategori_id' => $this->input->post('kategori'),
				'nama' => $this->input->post('nama'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'alamat' => $this->input->post('alamat'),
				'jam_buka' => $this->input->post('waktu_buka'),
				'jam_tutup' => $this->input->post('waktu_tutup'),
				'image' => $file_upload,
			);

			// Panggil method insert untuk memasukkan data.
			$this->lokasi->insert($data);
			redirect('lokasi/index');

		}

	}

	public function delete() {
		// Mengambil data dari url segmen ke 3
		// Contoh url localhost/lokasi/edit/3
		// angka 3 adalah segmen nya
		$id = $this->uri->segment(3);
		// Memanggil method delete dari model kategori
		$this->lokasi->delete($id);
		redirect('lokasi/index');
	}

	public function edit() {
		// Mengambil data dari url segmen ke 3
		// Contoh url localhost/lokasi/edit/3
		// angka 3 adalah segmen nya
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Lokasi";
		// Memanggil data dengan id yang telah di tentukan, jadi hanya dengan id x saja yang keluar data nya.
		$data_lokasi['data'] = $this->lokasi->getlokasi_by_id($id);

		// Memanggil data list kategori untuk ditampilkan lagi pada form edit.
		$data_lokasi['list_kategori'] = $this->kategori->getkategori()->result();

		// print_r($data_lokasi);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('lokasi/edit', $data_lokasi);
		$this->load->view('templates/footer');
	}

	public function doupdate() {
		// Menangkap inputan id dari kolom dengan tipe hidden.
		// Jadi hanya id yang telah ditentukan saja yang terupdate datanya.
		$id = $this->input->post('id');

		// Cek kembali apakah kolom nama, latitude, longitude, alamat, waktu buka, waktu tutup kosong atau tidak.
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('latitude', 'Latitude', 'required');
		$this->form_validation->set_rules('longitude', 'Longitude', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('waktu_buka', 'Waktu Buka', 'required');
		$this->form_validation->set_rules('waktu_tutup', 'Waktu Tutup', 'required');

		if ($this->form_validation->run() == FALSE) {
			redirect('lokasi/edit/' . $id);
			// print_r($_POST);
		} else {
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Maksimal 2MB
			);

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$upload = $this->upload->data();
				$file_upload = $upload['file_name'];
			} else {
				$file_upload = 'default.png';
			}

			// Jika kolom  tidak kosong, maka inputan akan di push ke array data.

			$data = array(
				'user_id' => $this->session->userdata('id'),
				'kategori_id' => $this->input->post('kategori'),
				'nama' => $this->input->post('nama'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'alamat' => $this->input->post('alamat'),
				'jam_buka' => $this->input->post('waktu_buka'),
				'jam_tutup' => $this->input->post('waktu_tutup'),
				'image' => $file_upload,
			);

			// print_r($data);
			// die();

			// Melakukan proses update dengan memanggil method doupdate dari model kategori.
			$this->lokasi->doupdate($id, $data);

			redirect('lokasi/index');
		}
	}
}
