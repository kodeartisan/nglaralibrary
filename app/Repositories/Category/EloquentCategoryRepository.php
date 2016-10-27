<?php 

namespace App\Repositories\Category;

use App\Repositories\EloquentAbstractRepository;
use App\Category;

class EloquentCategoryRepository extends EloquentAbstractRepository implements CategoryRepository
{
	private $model;

 
	public function __construct(Category $model)
	{
		$this->model = $model;
	}	

	public function create(array $data = [])
	{
		return $this->model->create($data);
	}
	public function delete($id)
	{

	}
	public function getItem($attribute = 'id', $value = null, $columns = ['*'])
	{
		return $this->model->where($attribute, $value)->first($columns);
	}

	public function getCollection($orderBy = 'DESC', $columns =  ['*'])
	{
		return $this->model->orderBy('id', $orderBy)->paginate($this->paginate, $columns);
	}
	 
	public function update(array $data = [], $id = null,  $attribute = 'id')
	{

	}

}