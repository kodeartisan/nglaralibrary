<?php 

namespace App\Services;

class Utils
{
	/**
	 * Check if is integer data
	 * 
	 * @param  integer  $integer 
	 * @return boolean          
	 */
	public function isInteger($integer)
	{
		return is_int($integer);
	}

	/**
	 * Check if is null or empty
	 * @param  mixed $data 
	 * @return boolean      
	 */
	public function isNullOrEmpty($data)
	{
		return empty($data) || is_null($data);
	}
}