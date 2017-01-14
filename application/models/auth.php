<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Auth extends CI_Model {
	// Nama table user
	public $table = "tbl_User";

	public function login($data) {
		// Cari data berdasarkan email dan password
		$this->db->where('email', $data['email']);
		// Password di hash menggunakan metode MD5
		$this->db->where('password', md5($data['password']));
		return $this->db->get($this->table)->row();
	}
}
