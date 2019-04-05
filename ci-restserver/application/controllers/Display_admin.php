<?php 

class Display_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->helper('url');
		$this->load->model('M_login');
		$this->load->model('M_admin');
		
		//var_dump($this->session->userdata('admin')["status"]); die;
		if($this->session->userdata('admin')["status"] == "login" && $this->session->userdata('admin')["level"]=="admin"){
			
		}
		else{
			redirect(base_url("Admin/login"));
		}
	}

	function index(){
		//$this->load->model('M_admin');
		//$id=$this->uri->segment(3);
		$where = array(
					'username' => $this->session->userdata('admin')["nama"]);
		
		$data['record'] = $this->M_login->cek_login("akun_admin",$where)->row_array();
		//var_dump($data['record']);die;

		//$data['record'] = $this->M_admin->edit_new($id)->row_array();
		$data['news'] = $this->M_admin->tampil_news()->result();
		$data['event'] = $this->M_admin->tampil_event()->result();
		$data['pendaftaran'] = $this->M_admin->tampil_pendaftaran()->result();
		$data['contact'] = $this->M_admin->tampil_contact()->result();

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_dashboard',$data);
		$this->load->view('admin/v_footer',$data);
	}
}