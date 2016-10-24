<?php 

namespace App\Transformers;

use App\Book;
use League\Fractal\TransformerAbstract;


class BookTransformer extends TransformerAbstract
{
	/**
	 * Turn this item into generic array
	 * 
	 * @param  Book   $book
	 * @return array
	 */
	public function transform(Book $book)
	{
		 return $book;
	}
}