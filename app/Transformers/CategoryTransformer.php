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
		
		return [
			'id' => (int) $category->id,
			'name' => $category->name,
			'created_at' => $category->created_at,
			'updated_at' => $category->updated_at
		];
	}
}