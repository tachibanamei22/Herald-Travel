<?php 
class user_m extends CI_Model{
	function add($data){
		$this->db->insert("user",$data);
	}
}
?>