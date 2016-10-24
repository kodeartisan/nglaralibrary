<?php 

namespace App\Repositories\Book;

use App\Book;
use App\Services\Utils;


class EloquentBookRepository implements BookRepository
{
	/**
	 * @var Book
	 */
	private $model;

	/**
	 * @var Util
	 */
	protected $util;

	/**
	 * Constructor instance
	 * 
	 * @param Book $model
	 * @param Utils $util
	 */
	public function __construct(Book $model, Utils $util)
	{
		$this->model = $model;
		$this->util = $util;
	}

	public function all($orderBy = 'DESC', $columns =  ['*'], $paginate = 10)
	{
		return $this->model->with('category')->orderBy('id', $orderBy)->paginate($paginate, $columns);
	}

	public function create(array $data = [])
	{

	}

	public function delete($id)
	{

	}

	public function update(array $data = [], $id = null,  $attribute = 'id')
	{
		if($this->util->isNullOrEmpty($id)) {
			throw InvalidArgumentException("Invalid ID");
		}

		$model = $this->model->find($id);

		if($this->util->isNullOrEmpty($model)) {
			throw InvalidArgumentException("Item not found");
		}

		try {

			$book = $model->where($attribute, '=', $id)->first();

			$book->update($data);
			
		} catch (Exception $e) {
			throw new RuntimeExceptioh($e->getMessage(), 1);
			
		}

		return $book;


	}
}