<?php 

namespace App\Repositories;

abstract class EloquentAbstractRepository 
{
	protected $paginate;

	public function __construct()
	{
		$this->paginate = config()->get('nglaralibrary.paginate');
	}
}