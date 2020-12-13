<?php 

class About extends Controller{



	public function index($nama='About Awal', $pekerjaan='dosen')
	{
		$data['judulHalaman'] = 'MMC';

		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}




	public function page($judulHalaman='Daniel')
	{
		$data['judulHalaman'] = 'MMC';
		
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}




}