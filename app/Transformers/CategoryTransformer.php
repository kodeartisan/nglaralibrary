<?php 

namespace App\Transformers;

use App\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{

	/**
	 * Turn this item into generic array
	 * 
	 * @param  Category   $book
	 * @return array
	 */
	public function transform(Category $category)
	{
		
		return [];
	}
}