<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('session');
		$this->load->database();
	}

	function index(){
		$this->load->view('login_view', NULL, FALSE);
	}

	function proses(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$check = $this->db->from('user')->where('username', $username)->where('password', $password)->get();

		if ($check->num_rows() == 1) {
			$id = $check->result_array();
			$this->session->set_userdata('login', TRUE);
			$this->session->set_userdata('id', $id[0]['id']);
			redirect('login/administrator');
		}else{
			echo("username atau password salah");
		}
	}

	function administrator(){
		if ($this->session->userdata('login') == TRUE) {
			$this->load->view('administrator_view', NULL, FALSE);
		}else{
			redirect('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
	}

	function post(){
		if ($this->session->userdata('login') == TRUE) {
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');

			$this->db->insert('post', array('judul' =>$judul, 'isi'=>$isi));
			redirect('login/daftar_post');
		}
	}

	function daftar_post(){
		if ($this->session->userdata('login') == TRUE) {
			$data['daftar'] = $this->db->select('*')->from('post')->get()->result();
			$this->load->view('daftar_post_view', $data, FALSE);
		}else{
			redirect('login');
		}
	}

	function hapus($id){
		if ($this->session->userdata('login') == TRUE) {
			$this->db->where('id',$id)->delete('post');

			redirect('login/daftar_post');
		}else{
			redirect('login');
		}
	}

	function ubah($id){
		if ($this->session->userdata('login') == TRUE) {
			$data['ubah'] = $this->db->select('*')->from('post')->where('id', $id)->get()->result();
			$this->load->view('ubah_view',$data, FALSE);	
		}else{
			redirect('login');
		}
	}

	function proses_ubah(){
		if ($this->session->userdata('login') == TRUE) {
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$this->db->where('id', $id)->update('post', array('judul'=>$judul, 'isi'=>$isi));
			redirect('login/daftar_post');
		}
	}
}