<?php

class LoginModel extends CI_Model{
	private $table;
	
	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->table = 'user_tbl';

	}

	public function login_auth($field, $user){

		$sql = 'SELECT '.$field.' FROM '.$this->table.' WHERE user = "'.$user.'"';
		$query = $this->db->query($sql);
		// validate user if existing in db, if not return false value for user validatation
		return $query->num_rows() > 0 ? $query->row_array() : false;


	}


	public function select_userID($field,$user_id){
		$sql = 'SELECT '.$field.' FROM '.$this->table.' WHERE user = "'.$user_id.'"';
		$query = $this->db->query($sql);
		// validate user if existing in db, if not return false value for user validatation
		return $query->num_rows() > 0 ? $query->row_array() : false;

	}
}


