<?php
class Post_berita extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
        $this->load->library('upload');
	}
	function index(){
		$this->load->view('v_news');
	}
	function view_berita(){
		$kode=$this->uri->segment(3);
		$d['data']=$this->M_user->get_berita_by_kode($kode);
		$data['user'] = $this->M_user->tampil_news()->result();	
		$data['judul'] = "News";
		$this->load->view('v_header',$data);
		$this->load->view('v_post_view',$d);
		$this->load->view('v_footer',$data);
	}
}