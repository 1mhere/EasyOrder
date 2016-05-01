<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2016-04-08 13:32:51
	**/

	function __construct(){
		parent::__construct();

		$this->tb_user = 'user';
		$this->tb_role = 'user_role';
	}

	public function masuk($where=array()){
		$query = $this->db->join($this->tb_role,$this->tb_role.'.id='.$this->tb_user.'.user_role_id');
		$query = $this->db->get_where($this->tb_user, $where);
		$query = $query->result_array();

		return $query;
	}
}