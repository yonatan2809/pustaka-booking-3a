<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view-form-matakuliah');

	}
	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah ($n1, $n2);
		echo"Hasil Penjumlahan dari " . "+" . $n2 . "=" . $hasil;

		$this->load->view('view-latihan', $hasil);
	}
}
