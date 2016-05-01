<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Main extends CI_Controller{
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2016-04-08 13:12:35
	**/

	function __construct(){
		parent::__construct();

		// Global data buat di inject ke view
		$this->global_data = array();

		// Asset folder
		$this->global_data['asset'] = base_url('assets');
	}

	protected function tampilan($view_name){
		$this->load->view($view_name,$this->global_data);
		$this->load->view('footer',$this->global_data);
	}

}