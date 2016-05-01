<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index()
	{
		$data['data'] = $this->mymodel->GetFood();
		 
		$this->load->view('tabel',$data);
	}

	public function add(){
		$this->load->view('form_add');
	}

	public function do_insert(){
		// echo "<pre>"; //untuk mengecek
		// print_r($_POST);
		// echo "<pre>";

		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$keterangan = $_POST['keterangan'];
		$gambar = $_POST['gambar'];
		$time = $_POST['time'];
		$kode_kategori = $_POST['kode_kategori'];
		$data_insert = array(
				'nama' => $nama,
				'harga' => $harga,
				'keterangan' => $keterangan,
				'gambar' => $gambar,
				'time' => $time,
				'kode_kategori' => $kode_kategori,
			);
		$res = $this->mymodel->InsertData('food',$data_insert);
		if($res>=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect('crud/index');
		}
	}

	public function do_edit($id){
		$foods = $this->mymodel->GetFood("where id = '$id'");
		$data= array(
					'id' => $foods[0]['id'],
					'nama' => $foods[0]['nama'],
					'harga' => $foods[0]['harga'],
					'keterangan' => $foods[0]['keterangan'],
					'gambar' => $foods[0]['gambar'],
					'time' => $foods[0]['time'],
					'kode_kategori' => $foods[0]['kode_kategori'],
				);
			$this->load->view('form_edit',$data);
		}

	public function do_update(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$keterangan = $_POST['keterangan'];
		$gambar = $_POST['gambar'];
		$time = $_POST['time'];
		$kode_kategori = $_POST['kode_kategori'];
		$data_update = array(
				'nama' => $nama,
				'harga' => $harga,
				'keterangan' => $keterangan,
				'gambar' => $gambar,
				'time' => $time,
				'kode_kategori' => $kode_kategori,
			);
		$where = array('id' => $id);
		$res = $this->mymodel->UpdateData('food',$data_update,$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('crud/index');
		}
	}

	public function do_delete($id){
		$where = array('id' => $id);
			$res= $this->mymodel->DeleteData('food',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete data sukses');
			redirect('crud/index');
		}
	}

	public function order(){
		$data_insert = array(
				'meja' => 1,
				'nama' => $nama,
				'jumlah' => $porsi,
				'bayar' => $bayar,
				
			);
		$res = $this->mymodel->InsertData('order',$data_insert);
		if($res>=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect('web/index');
		}
	}
}
 