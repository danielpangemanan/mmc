<?php 

class Dokter extends Controller{
	public function index()
	{
		$data['judulHalaman'] = 'MMC';
		$this->view('templates/header', $data);
		$this->view('dokter/index');
		$this->view('templates/footer');
	}

	public function dataDokter()
	{
		$data['judulHalaman'] = 'MMC';

		$data['dokter'] = $this->model('Dokter_model')->getAllDokter();
		$this->view('templates/header', $data);
		$this->view('dokter/dataDokter', $data);
		$this->view('templates/footer');
	}
}