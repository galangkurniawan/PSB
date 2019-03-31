<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_report extends CI_Model {

	public function get_produk()
	{
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}
}
?>