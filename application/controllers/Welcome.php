<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	// untuk tampil data ke home
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product');
	}
	public function index()
	{
		$recordProduct = $this->M_Product->getDataProduct();
		$DATA = array('data_product' => $recordProduct);
		$this->load->view('home', $DATA);
	}

	// untuk input data
	public function inputAction()
	{
		$nama_produk = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');

		$arrayInsert = array(
			'nama_produk' => $nama_produk,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah,
		);

		// echo "<pre>";
		// print_r($arrayInsert);
		// echo "</pre>";
		// echo "masuk input";
		$this->M_Product->inputDataProduct($arrayInsert);
		redirect(base_url('Welcome'));
	}
	public function formInput()
	{
		$this->load->view('form_input');
	}

	// untuk edit data
	public function editAction($id){
		$nama_produk = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');

		$arrayUpdate = array(
			'nama_produk' => $nama_produk,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah,
		);

		// echo "<pre>";
		// print_r($arrayInsert);
		// echo "</pre>";
		// echo "masuk input";
		$this->M_Product->editDataProduct($arrayUpdate,$id);
		redirect(base_url('Welcome'));
	}
	public function formEdit($id)
	{
		$detailProduct = $this->M_Product->getDetailDataProduct($id);
		// echo "<pre>";
		// print_r($detailProduct);
		// echo "</pre>";
		$DATA = array('data_product' => $detailProduct);
		$this->load->view('form_edit',$DATA);
	}

	// untuk hapus data
	public function deleteAction($id){
		$this->M_Product->deleteDataProduct($id);
		redirect(base_url());
	}
}
