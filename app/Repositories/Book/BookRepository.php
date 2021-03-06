<?php 

namespace App\Repositories\Book;	

interface BookRepository
{
	public function create(array $data = []);
	public function delete($id);
	public function getCollection($orderBy = 'DESC', $columns =  ['*']);
	public function getItem($attribute = 'id', $value = null, $columns = ['*']);
	public function update(array $data = [], $id = null,  $attribute = 'id');
}