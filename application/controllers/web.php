<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('cart');
	}

	public function index(){ 
		$data = array(
				"foods"=> $this->mymodel->GetFood()->result_array() 
			);

		$comp = array(
				"content" => $this->load->view("content",$data,true),
				"sidebar" => $this->sidebar(),
				"footer" => $this->footer(),
				"banner" => $this->load->view("banner",array(),true),
			);
		$this->load->view('index',$comp);
	}
	public function addCart(){
		$json = array(false);

		$id = $this->input->post('id');
		$nama = $this->input->post('namaMakanan');
		$qty = $this->input->post('qty');
		$price = $this->input->post('price');

		$data = array(
           'id'      => $id,
           'qty'     => $qty,
           'price'   => $price,
           'name'    => $nama
        );

		$ins = $this->cart->insert($data); 
		
		if($ins){
			$json = array(true);
		}

		echo json_encode($json);
	}

	public function checkout(){
		if($this->input->post()){
		foreach ($this->cart->contents() as $key) {
			$data = array(
           'meja'	 => $this->input->post("meja"),
           'nama'    => $key['name'],
           'jumlah'  => $key['qty'],
           'bayar'   => $key['price'],
           
        	);
			$res = $this->db->insert('order',$data);
		}
		$this->cart->destroy();
		}
	}

	public function checkout1(){
		foreach ($this->cart->contents() as $key) {
			$data = array(
           'meja'	 => 1,//$this->input->post("meja"),
           'nama'    => $key['name'],
           'jumlah'  => $key['qty'],
           'bayar'   => $key['price'],
           
        	);

			$res = $this->db->insert('order',$data);
		}
		
	}
	public function kategori($id){
		$cek= $this ->mymodel->GetKategori("where kode_kategori = '$id' ");
		if($cek->num_rows()>0){
			$data = array(
				"foods"=> $this->mymodel->GetFood("where kode_kategori = '$id' ")->result_array()
			);
		$comp = array(
				"content" => $this->load->view("content",$data,true),
				"sidebar" => $this->sidebar(),
				"footer" => $this->footer(),
				"banner" => $this->load->view("banner",array(),true),
			);
		$this->load->view('index',$comp);

		//cek jika tidak ada stock di kategori tersebut
		// $cek2= $this ->mymodel->GetFood("where kode_kategori = '$id' ");
		// 	if($cek2->num_rows()<1){
		// 		echo "gak ada";
		// 	}
		}else{
			show_404(); 
		}
	}

	public function sidebar(){ 
		$data = array(
			"kategori" => $this->mymodel->GetKategori()->result_array(),
			); 
		return $this->load->view('sidebar',$data,true);
	}
	public function footer(){
		$data = array(); 
		return $this->load->view('footer',$data,true);
	}

}
