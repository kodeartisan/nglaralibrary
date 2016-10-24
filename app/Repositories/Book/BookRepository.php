<?php 

namespace App\Repositories\Book;	

interface BookRepository
{
	public function create(array $data = []);
	public function delete($id);
	public function all($orderBy = 'DESC', $columns =  '*');
	public function update(array $data = [], $id = null,  $attribute = 'id');
}