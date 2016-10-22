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
}