<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {

	public function getAkun($where=array()){
		$query = $this->db->get_where("userstatus",$where)->result_array();

		if(!empty($query)){
			return $query[0];
		}
		
	}

	public function getLogin($usr,$pwd){
		$u = $usr;
		$p = md5($pwd);
		$cek_login = $this->db->get_where('userstatus',array('username' => $u, 'password'=> $p));
		if($cek_login->num_rows()>0){
			$ambil = $cek_login->row();
			if($u == $ambil->username && $p== $ambil->password){
				$sess = array(
						'username' => $ambil->username,
						'stts' => $ambil->status
					);
				$this->session->set_userdata($sess);
				if($ambil->status == 'admin'){
					redirect("admin");
				}else{
					redirect("user");
				}
			}else{
				$this->session->set_flashdata('pesan','Username/password salah');
			redirect('');
			}
		}
	}
}
