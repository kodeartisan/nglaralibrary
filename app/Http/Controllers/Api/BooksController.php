<?php 

namespace App\Http\Controllers\Api;

use App\Repositories\Book\BookRepository;
use App\Transformers\BookTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class BooksController extends ApiController
{	

	/**
	 * @var BookRepository
	 */
	protected $bookRepository;
	
	public function __construct(BookRepository $bookRepository)
	{
		$this->bookRepository = $bookRepository;
	}

	public function index()
	{
		$books = $this->bookRepository->all();
		return fractal()->collection($this->bookRepository->all(), new BookTransformer)
						->paginateWith(new IlluminatePaginatorAdapter($books))
						->toJson();
	}

	public function store()
	{

	}

	public function update()
	{

	}

	public function destroy()
	{

	}
}