<?php 

namespace App\Http\Controllers\Api;

use App\Repositories\Category\CategoryRepository;
use App\Transformers\CategoryTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Http\Requests\Api\CategoryRequest;

class CategoriesController extends ApiController 
{
	/**
	 * @var CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * @param CategoryRepository $categoryRepository
	 */
	public function __construct(CategoryRepository $categoryRepository)
	{
		$this->categoryRepository = $categoryRepository;
	}

	public function index()
	{
		$categories = $this->categoryRepository->getCollection();

		return fractal()->collection($categories, new CategoryTransformer)
						->paginateWith(new IlluminatePaginatorAdapter($categories))
						->toJson();
	}

	public function store(CategoryRequest $categoryRequest)
	{
		$created = $this->categoryRepository->create($categoryRequest->only('name'));

		if(! $created) {
			return $this->errorBadRequest("Something went wrong.");
		}

		return $this->respondWithSuccess('Saved');
	}
	 

	public function show()
	{

	}

	public function update()
	{

	}

	public function destroy()
	{

	}
}
