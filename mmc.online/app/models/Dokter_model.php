<?php 

class Dokter_model{
	
	private $table = 'stafsdm';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}


	public function getAllDokter()
	{
		$this->db->query('SELECT * FROM '  . $this->table);
		return $this->db->resultSet();
	}

}


