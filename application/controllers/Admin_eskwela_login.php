<?php 
 
class Admin_eskwela_login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function login_admin10010(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}else{
			$where = array(
					'username' => $this->session->userdata("nama"));
		
			$data['record'] = $this->M_login->cek_login("pendaftaran",$where)->row_array();
			//var_dump($data['record']);die;

			//$data['record'] = $this->M_admin->edit_new($id)->row_array();
			$this->load->view('v_header',$data);
			$this->load->view('v_display_person',$data);
			$this->load->view('v_footer',$data);
		}
		
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("pendaftaran",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Display_person"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}