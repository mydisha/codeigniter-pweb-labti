<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Lokasi extends CI_Model {
	// Nama table daftar tempat / lokasi
	public $table = "tbl_DaftarTempat";

	public function insert($data) {
		// Insert data dengan array yang diterima dari parameter
		$this->db->insert($this->table, $data);
	}

	public function getlokasi() {
		// Ambil list lokasi yang di join dengan kolom kategori
		$this->db->select("tbl_DaftarTempat.id, tbl_DaftarTempat.nama, tbl_DaftarTempat.latitude, tbl_DaftarTempat.longitude, tbl_DaftarTempat.alamat, tbl_DaftarTempat.jam_buka, tbl_DaftarTempat.jam_tutup, tbl_DaftarTempat.image, tbl_Kategori.nama as nama_kategori");
		$this->db->from($this->table);
		$this->db->join('tbl_Kategori', 'tbl_Kategori.id = tbl_DaftarTempat.kategori_id');
		$data = $this->db->get();
		return $data;
		// $data = $this->db->get($this->table);
		// return $data;
	}

	public function delete($id) {
		// Method untuk delete data dengan id yang diterima dari parameter
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function getlokasi_by_id($id) {
		// Cari data berdasarkan id yang telah di tentukan
		$data = $this->db->get_where($this->table, array('id' => $id));
		return $data->row_array();
	}

	function doupdate($id, $data) {
		// Lakukan proses update
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}
}
