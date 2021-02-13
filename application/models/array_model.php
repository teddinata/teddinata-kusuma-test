<?php 
defined('BASEPATH') OR exit();

class array_model extends CI_Controller {

	
	function array () {
		$this->db->select('*');
		$this->db->from('data');
		$this->db->join('nama_produk', 'kategori.produk = nama_produk', 'left');
		$this->db->where('id_kota = 1');
		return $this->db->get()->result();
	}

}

?>
