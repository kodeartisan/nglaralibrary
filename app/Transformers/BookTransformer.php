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
		 return [
		 	'id' => (int)$book->id,
		 	'title' => $book->title,
		 	'author' => $book->author,
		 	'category' => $book->category,
		 	'description' => $book->description,
		 	'cover' => $book->cover,
		 	'stock' => (int) $book->stock,
		 	'who_insert' => $book->user,
		 	'published_at' => $book->published_at,
		 	'created_at' => $book->created_at,
		 	'updated_at' => $book->updated_at

		 ];
	}
}