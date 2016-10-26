<?php 

namespace App\Http\Controllers\Api;

use App\Repositories\Book\BookRepository;
use App\Transformers\BookTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Services\Utils;

class BooksController extends ApiController
{
	/**
	 * @var BookRepository
	 */
	protected $bookRepository;
	
	/**
	 * Constructor create a new instance
	 * 
	 * @param BookRepository $bookRepository 
	 */
	public function __construct(BookRepository $bookRepository)
	{
		$this->bookRepository = $bookRepository;
		 
	}

	/**
	 * show all book data
	 * 
	 * @return json
	 */
	public function index()
	{
		 	
		$books = $this->bookRepository->all();
		return fractal()->collection($books, new BookTransformer)
						->paginateWith(new IlluminatePaginatorAdapter($books))
						->toJson();
	}

	/**
	 * show specific data based on id
	 * 
	 * @param  int $id 
	 * @return json
	 */
	public function show($id)
	{
		$book = $this->bookRepository->getItemBy('id', $id);

		if(Utils::isNullOrEmpty($book)) {
			return $this->errorNotFound("Book not found");
		}

		return fractal()->item($book, new BookTransformer())->toJson();
	}

	/**
	 * store book to database
	 * 
	 * @return [type] 
	 */
	public function store()
	{
		
	}

	public function update()
	{

	}

	/**
	 * remove book based on id
	 * 
	 * @param  int $id 
	 * @return json
	 */
	public function destroy($id)
	{

	}
}