<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Main.php");

class Auth extends Main {
	
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2016-04-08 13:35:00
	**/

	function __construct(){
		parent::__construct();

		if($this->session->userdata('isLogin')){
			redirect('admin');
		}

		$this->load->library('form_validation');
		$this->load->model('m_auth');
	}

	public function index(){
		// Title
		$this->global_data['title'] = "Masuk";

		$this->global_data['asset'] = base_url('assets');

		// Pesan
		$this->global_data['message'] = $this->session->flashdata('message');

		// Validasi
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()){
			$uname = $this->input->post('username');
			$pass = $this->input->post('password');

			$masuk = $this->m_auth->masuk(array('username'=>$uname,'password'=>$pass));

			@$status = $masuk[0]['stt'];
			@$stt = $masuk[0]['type'];

			if(!empty($masuk) && $status==1 && $stt=='admin'){
				// Set session
				$this->session->set_userdata(array(
					'isLogin'   => TRUE,
					'hak'		=> $masuk[0]['type'],
					'uname'  	=> $uname,
				));
				redirect('admin');
			}else{
				$this->global_data['message'] = ($status==2)? "Akun belum di aktivasi" :"Gagal login";
			}
		}else{
			// Pesan validasi
			$this->global_data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		}

		$this->load->view('masuk', $this->global_data);
	}
}