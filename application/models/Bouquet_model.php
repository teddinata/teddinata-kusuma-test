<?php 
defined('BASEPATH') OR exit();

class Bouquet_model extends CI_Controller {

	function TampilBouquet() 
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('vendor_produk')
          ->join('vendor_produk', 'produk.id=vendor.id')
          ->get()
          ->result();
    }  

}

?>
