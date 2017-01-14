<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Kategori extends CI_Model {
	// Nama Tabel Kategori
	public $table = "tbl_Kategori";

	public function insert($data) {
		// Insert data dengan array yang diterima dari parameter
		$this->db->insert($this->table, $data);
	}

	public function getkategori() {
		// Ambil list kategori
		$data = $this->db->get($this->table);
		return $data;
	}

	public function delete($id) {
		// Method untuk delete data dengan id yang diterima dari parameter
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function getkategori_by_id($id) {
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
