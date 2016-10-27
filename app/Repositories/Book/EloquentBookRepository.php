<?php 

namespace App\Repositories\Book;

use App\Book;
use App\Repositories\EloquentAbstractRepository;


class EloquentBookRepository extends EloquentAbstractRepository  implements BookRepository
{
	/**
	 * @var Book
	 */
	private $model;


	/**
	 * Constructor instance
	 * 
	 * @param Book $model
	 * @param Utils $util
	 */
	public function __construct(Book $model)
	{
		$this->model = $model;
		 
	}

	public function getCollection($orderBy = 'DESC', $columns =  ['*'])
	{
		return $this->model->with('category')->with('user')->orderBy('id', $orderBy)->paginate($this->paginate, $columns);
	}

	public function create(array $data = [])
	{

	}

	public function delete($id)
	{	
		if(Utils::isNullOrEmpty()) {
			throw new InvalidArgumentException("Invalid ID", 1);
			
		}

		$book = $this->model->whereId($id)->first();

		return $book->delete();
	}

	public function update(array $data = [], $id = null,  $attribute = 'id')
	{
		if(Utils::isNullOrEmpty($id)) {
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

	public function getItem($attribute = 'id', $value = null, $columns = ['*'])
	{
		return $this->model->where($attribute, $value)->with('category')->first($columns);
	}
}