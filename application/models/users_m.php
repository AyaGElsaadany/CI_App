<?php

class Users_m extends CI_Model{
	function get_user_by_id($id){
		$this->db->where('id', $id);
		$this->db->limit(1);
		return $this->db->get('users');
	} 

	function get_all($page){
		$this->db->limit(10, $page);
		return $this->db->get('users');
	}

	function get_num(){
		return $this->db->count_all_results('users');
	}

	function update($id, $user){
		$this->db->where('id', $id);
		$this->db->update('users', $user);
	}
}

?>
