<?php 

Class Lurcher_log_model extends CI_model{

	public function __construct(){
		parent::__construct();

	}

	// This function will insert log into the database. 
	public function insert_log($code,$user_id,$description,$level,$user,$date,$time){
		$param = array(
			'code' => $code, // another unique code than id.
			'user_id' => $user_id, // user id of the logged in user. 
			'description' => $description, // activity of the user 
			'level' => $level, // logs level (e.g warning , error )
			'user' => $user, // current logged in user 
			'date' => $date, // date 
			'time' => $time,  // time 
		);
		$this->db->insert('log',$param);
	}
}