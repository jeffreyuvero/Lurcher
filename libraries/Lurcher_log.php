<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Lurcher_log {

	private $timezone = "GMT";

	public function __construct($options = array()){

		$this->timezone = isset($options['timezone']) ? $options['timezone'] : $this->timezone;

	}

	public function log($code,$user_id,$description,$level,$user){
		date_default_timezone_set($this->timezone); // for setting timezone

		$CI =& get_instance();
		$CI->load->model('lurcher_log_model', '', true);

		$date = date("Y-m-j");
		$time = date("h:i:sa");

		$CI->lurcher_log_model->insert_log($code, $user_id, $description, $level, $user, $date, $time);
	}
}
