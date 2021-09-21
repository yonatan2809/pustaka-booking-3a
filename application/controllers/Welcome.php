<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		echo "<h1> Perkenalan </h1>";
		echo " Nama : Yonatan Arif Setiawan Sutrisno <br>
			Tempat Lahir : Bekasi <br>
			Tanggal Lahir : 28 September 2002 <br>
			Tempat Tinggal : Griya Timur Indah Blok C2/5 <br>
			Motivation Kuliah : Memperluas pengetahuan dan membuka wawasan";
	}
}
