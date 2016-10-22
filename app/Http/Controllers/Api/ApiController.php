<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as BaseController;
use App\Services\Utils;

abstract class ApiController extends BaseController
{
	/**
	 * @var Utils
	 */
	protected $utils;

	/**
	 * HTTP Request messages code
	 */
	const CODE_WRONG_ARGS = 'GEN-WRONG_ARGS';
	const CODE_NOT_FOUND = 'GEN-NOT_FOUND';
    const CODE_INTERNAL_ERROR = 'GEN-INTERNAL_ERROR';
    const CODE_UNAUTHORIZED = 'GEN-UNAUTHORIZED';
    const CODE_FORBIDDEN = 'GEN-FORBIDDEN';
    const CODE_INVALID_MIME_TYPE = 'GEN-INVALID_MIME_TYPE';
	

    /**
     * Constructor instance some stuff
     * 
     * @param Utils $utils 
     */
	public function __construct(Utils $utils)
	{
		$this->utils = $utils;
	}

	/**
	 * Status code for HTTP Request default 200
	 * 
	 * @var integer
	 */
	protected $statusCode = 200;	

	/**
	 * Returning item with desired transform
	 * 
	 * @param  array $item   
	 * @param  object $callback 
	 * @return json          
	 */
	protected function respondWithItem($item, $callback)
	{
		return fractal()->items($item)->transformWith($callback)->toJson();
	}

	/**
	 * Returning collecion with desired transform
	 * 
	 * @param  array $collection   
	 * @param  object $callback 
	 * @return json          
	 */
	protected function respondWithCollection($collection, $callback)
	{
		return fractal()->collection($collection)->transformWith($callback)->toJson();

	}

	/**
	 * Get status code
	 * 
	 * @return integer
	 */
	public function getStatusCode()
	{
		return $this->statusCode;
	}

	/**
	 * Set status code
	 * 
	 * @param integer
	 * @return self 
	 */
	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;

		return $this;
	}

	/**
	 * Response error
	 * 
	 * @param  string $message   
	 * @param  integer $errorCode 
	 * @return json            
	 */
	 protected function respondWithError($message, $errorCode)
	 {
	 	if($this->statusCode == 200) {
	 		trigger_error("You better have a really good reason for erroring on a 200...", E_USER_WARNING);
	 	}

	 	return response()->json([
	 			'error' => [
	 				'code' => $errorCode,
	 				'http_code' => $this->statusCode,
	 				'message' => $message
	 			]
	 		]);
	 }

	 /**
	  * Generates a Response with a 403 HTTP header and a given message.
	  * 
	  * @param  string $message  
	  * @return json           
	  */
	 protected function errorForbiden($message = 'Forbidden')
	 {
	 	return $this->statusCode(403)
	 		->respondWithError($message, self::CODE_FORBIDDEN);
	 }

	 /**
	  * Generates a Response with a 500 HTTP header and a given message.
	  * 
	  * @param  string $message  
	  * @return json         
	  */
	 protected function errorInternalError($message = 'Internal Error')
	 {
	 	return $this->statusCode(500)
	 		->respondWithError($message, self::CODE_INTERNAL_ERROR);
	 }

	 /**
	  * Generates a Response with a 404 HTTP header and a given message.
	  * 
	  * @param  string $messsage  
	  * @return json          
	  */
	 protected function errorNotFound($messsage = 'Resouce not found')
	 {
	 	return $this->setStatusCode(404)
	 		->respondWithError($message, self::CODE_NOT_FOUND);
	 }

	  /**
	  * Generates a Response with a 401 HTTP header and a given message.
	  * 
	  * @param  string $messsage  
	  * @return json          
	  */
	 protected function errorUnauhorized($message = 'Unauthorized')
	 {
	 	return $this->statusCode(401)
	 		->respondWithError($message, self::CODE_UNAUTHORIZED);
	 }


	  /**
	  * Generates a Response with a 400 HTTP header and a given message.
	  * 
	  * @param  string $messsage  
	  * @return json          
	  */
	 protected function errorWrongArgs($message = 'Wrong Arguments')
	 {
	 	return $this->setStatusCode(400)
	 		->respondWithError($message, self::CODE_WRONG_ARGS);
	 }


	 
}