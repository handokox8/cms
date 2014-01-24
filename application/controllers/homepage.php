<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Homepage extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->database();
	}

	function index()
	{
		$config = array();
		$config['base_url'] = site_url('homepage/page');
		$config['total_rows'] = $this->db->count_all_results('post');
		$config['per_page'] = 5;
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data['links'] = $this->pagination->create_links();
		$data['post'] = $this->db->select('*')->from('post')->limit($config['per_page'], $page)->get()->result();
		$data['judul'] = "Selamat Datang";
		$this->load->view('homepage_view', $data, FALSE);
	}

	function page(){
		$config = array();
		$config['base_url'] = site_url('homepage/page');
		$config['total_rows'] = $this->db->count_all_result('post');
		$config['per_page'] = 5;
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['links'] = $this->pagination->create_link();
		$data['post'] = $this->db->select('*')->from('post')->limit($config['per_page'], $page)->get()->result();
		$data['judul'] = "Selamat Datang";
		$this->load->view('page_view', $data, FALSE);
	}

	function pertama(){

		echo "<h1> Halaman Pertamaku</h1>";
	}

	function kedua(){
		echo "<h1>Halaman keduaku</h1>";
	}

	function profil(){
		echo "<h1>Halaman profil</h1>";
	}

	function masuk(){
		$data['title'] = "Login";
		$data['content'] = $this->load->view('login_view', NULL, TRUE);
		$this->load->view('page_view', $data, FALSE);
	}

}