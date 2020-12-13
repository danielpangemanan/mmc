<?php 


class Home extends Controller {
	public function index()
	{
		$data['judulHalaman'] = 'MMC';

		$data['datadefault'] = 'MMC';
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
	
}