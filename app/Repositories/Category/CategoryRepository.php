<?php 

namespace App\Repositories\Category;

interface CategoryRepository
{
	public function create(array $data = []);
	public function delete($id);
	public function getItem($attribute = 'id', $value = null, $columns = ['*']);
	public function getCollection($orderBy = 'DESC', $columns =  '*');
	public function update(array $data = [], $id = null,  $attribute = 'id');

}