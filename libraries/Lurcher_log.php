<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Lurcher_log {

	public function log($code,$user_id,$description,$level,$user){
		date_default_timezone_set("Asia/manila"); // for seeting timezone

		$CI =& get_instance();
		$CI->load->model('lurcher_log_model');

		$date = date("Y-m-j");
		$time = date("h:i:sa");

		$CI->lurcher_log_model->insert_log($code,$user_id,$description,$level,$user,$date,$time);
	}
}
