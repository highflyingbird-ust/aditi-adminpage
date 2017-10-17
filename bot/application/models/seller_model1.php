<?php 
class Seller_model1 extends CI_Model
{

    public function lastid1()
	{
		$this->db->select('id');
		$this->db->from('client_details');
		$this ->db-> limit(1);
		$this->db->order_by('id', 'desc');
		$q = $this->db->get();
		return $q->result();
	}
	public function clients($data)
	{
		$result=$this->db->insert('client_details', $data);
	}
	

}

?>