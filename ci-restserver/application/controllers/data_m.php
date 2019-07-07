<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	require APPPATH . '/libraries/REST_Controller.php';
	use Restserver\Libraries\REST_Controller;

	class Data_m extends REST_Controller{

		function __construct($config = 'rest'){
			parent::__construct($config);
			$this->load->databese();
		}


		function index_get(){
			$no_induk = $this->get('no_induk');
			if($no_induk == ''){
				$data_mahasiswa = $this->db->get('mahasiswa')->result();
			}else{
				$this->db->where('no_induk', $no_induk);
				$data_mahasiswa = $this->db->get('mahasiswa')->result();
			}
			$this->response($data_mahasiswa,200);
		}
	}
?>