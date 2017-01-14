	<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Dashboardcontroller extends CI_Controller {
	function __construct() {
		parent::__construct();

		// Panggil model lokasi.
		$this->load->model('lokasi');

		// Cek apakah user sudah login atau belum.
		if (empty($this->session->userdata('id'))) {
			redirect('welcome');
		}
	}

	public function dashboard() {
		// Set array title
		$data['title'] = 'Dashboard';

		// Memanggil data nama, latitude dan longitude untuk ditampilkan di dalam map.
		$data_lokasi['data'] = $this->lokasi->getlokasi()
			->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer', $data_lokasi);
	}

}
