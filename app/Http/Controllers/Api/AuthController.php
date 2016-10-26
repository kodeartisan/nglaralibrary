<?php 

namespace App\Http\Controllers\Api;

use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Requests\Api\AuthRequest;
use Illuminate\Http\Request;
 

class AuthController extends ApiController
{
	/**
	 * @var JWTAuth
	 */
	protected $jwtAuth;

	/**
	 * @var Log
	 */
	protected $log;

	/**
	 * Constructor create a new instance
	 * 
	 * @param JWTAuth $jwtAuth 
	 */
	public function __construct(JWTAuth $jwtAuth)
	{
		 $this->jwtAuth = $jwtAuth;
	}

	/**
	 * Login User
	 * 
	 * @param  AuthRequest $authRequest  
	 * @return  \Illuminate\Http\JsonResponse               
	 */
	public function login(AuthRequest $authRequest)
	{

		try {
			if(! $token = $this->jwtAuth->attempt($authRequest->only('email', 'password')) ) {
				return $this->errorUnauthorized();
			}
		} catch (JWTException $e) {
			return $this->errorInternalError();
		}

		return response()->json(compact('token'), 200);
	}

	/**
	 * Logut the current user
	 * 
	 * @return \Illuminate\Http\JsonResponse 
	 */
	public function logout()
	{
		if($token = $this->jwtAuth->getToken()) {
			try {
				$this->jwtAuth->invalidate($token);

				return $this->respondSuccess(['logout' => true]);

			} catch (Exception $e) {

				return $this->errorUnauthorized();
			}
		}
	}

 
}