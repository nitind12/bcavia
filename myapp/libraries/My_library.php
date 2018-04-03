<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_library{
	function getMonth($no = ''){
		$data = array(
			'1' => 'January',
			'2' => 'February',
			'3' => 'March',
			'4' => 'April'
		);
		
		if($no > 4){
			$value = 'Month no is not correct';
		} else {
			$value = $data[$no];
		}
		return $value;
	}
}	