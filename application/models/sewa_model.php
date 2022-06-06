<?php 

class Sewa_model extends CI_model{


	public function getDataBaju(){
		return $this->db->get('baju');
	}

	public function get_data($table){
		return $this->db->get($table);
	}

	public function get_where($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function insert_data($data, $table){
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where){
		 $this->db->update($table, $data, $where);

	}

	public function hapus_data($where, $table){
		 $this->db->where($where);
		 $this->db->delete($table);

	}

	public function ambil_id_baju($id){
		 $hasil = $this->db->where('id_baju', $id)
		 					->get('baju');
		 if($hasil->num_rows() > 0){
		 	return $hasil->result();		 	
		 }else{
		 	return false;
		 }

	}

	public function cek_login(){
		 $username = set_value('username');
		 $password = set_value('password');

		 $result = $this->db
		 				->where('username', $username)
		 				->where('password', md5($password))
		 				->limit(1)
		 				->get('penyewa');

		 if($result->num_rows() > 0){
		 	return $result->row();
		 }else{
		 	return FALSE;
		 }

	}

	public function downloadPembayaran($id)
	{
		$query= $this->db->get_where('transaksi', array('id_sewa' => $id));
		return $query->row_array();
	}

	public function jumlah_transaksi()
	{   
	    $query = $this->db->get('transaksi');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function jumlah_disewa()
	{   
	     $query = $this->db->query('SELECT * FROM baju WHERE status= "0"');
		 $status=$query->num_rows();
		 return $status;
	}

	public function jumlah_free()
	{   
	     $query = $this->db->query('SELECT * FROM baju WHERE status= "1"');
		 $status=$query->num_rows();
		 return $status;
	}

	public function jumlah_penyewa()
	{   
	    $query = $this->db->get('penyewa');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}


	
}
?>

