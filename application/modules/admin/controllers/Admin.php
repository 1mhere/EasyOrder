<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Main.php");

class Admin extends Main {

	function __construct(){
		parent::__construct();
		// Redirect ke halaman auth kalo belum login
		if(!$this->session->userdata('isLogin')){
			redirect('admin/auth');
		}
	}

	public function index(){
		// Title
		$this->global_data['title'] = "EasyOrder | Dashboard";

		$this->tampilan('dashboard');
	}

	public function signOut(){
		$this->session->sess_destroy();
		redirect('admin/auth','refresh');
	}

	// mailbox
	public function mailbox(){
		// Title
		$this->global_data['title'] = "EasyOrder | Mailbox";

		$this->tampilan('mailbox');
	}

	public function compose(){
		// Title
		$this->global_data['title'] = "EasyOrder | Compose";

		$this->tampilan('compose');
	}
	public function readmail(){
		// Title
		$this->global_data['title'] = "EasyOrder | Read Mail";

		$this->tampilan('read-mail');
	}

	// table
	public function table_data(){
		// Title
		$this->global_data['title'] = "EasyOrder | Orderlist";

		$this->tampilan('table-data');
	}
	public function table_simple(){
		// Title
		$this->global_data['title'] = "EasyOrder | Orderlist";

		$this->tampilan('table-simple');
	}

	// form
	public function update_menu(){
		// Title
		$this->global_data['title'] = "EasyOrder | Update Menu";

		$this->tampilan('update-menu');
	}
}