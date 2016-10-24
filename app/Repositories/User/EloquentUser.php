<?php 

namespace App\Repositories\User;

use App\User;

class EloquentUser implements UserInterface
{

	private $model;

	public function __construct(User $model)
	{
		$this->model = $user;
	}
}
