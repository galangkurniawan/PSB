<?php 

class Display_person extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->helper('url');
		$this->load->model('M_login');
	
		if($this->session->userdata('user')["status"] == "login" && $this->session->userdata('user')["level"]=="user"){
			
		}else{
			redirect(base_url("web/login"));	
		}
	}

	function index(){
		//$this->load->model('M_admin');
		//$id=$this->uri->segment(3);
		$where = array(
					'username' => $this->session->userdata('user')["nama"]);
		
		$data['record'] = $this->M_login->cek_login("pendaftaran",$where)->row_array();
		//var_dump($data['record']);die;

		//$data['record'] = $this->M_admin->edit_new($id)->row_array();
		$data['judul'] = "Pendaftaran";
		$this->load->view('v_header',$data);
		$this->load->view('v_display_person',$data);
		$this->load->view('v_footer',$data);
	}
}