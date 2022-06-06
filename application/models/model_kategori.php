<?php 

class Model_kategori extends CI_model{
	public function data_baju_adat()
	{
		return $this->db->get_where("baju", array('nama_kategori' => 'Baju Adat'));
	}

	public function data_baju_nikah()
	{
		return $this->db->get_where("baju", array('nama_kategori' => 'Baju Nikah'));
	}

	public function data_baju_pesta()
	{
		return $this->db->get_where("baju", array('nama_kategori' => 'Baju Pesta'));
	}

	public function data_baju_kostum()
	{
		return $this->db->get_where("baju", array('nama_kategori' => 'Kostum Anak'));
	}

	
}
?>

