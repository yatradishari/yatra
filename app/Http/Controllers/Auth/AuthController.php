<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}
	
	public function postLogin()
	{			
		$username = Input::get('email');
		$password = Input::get('password');
		
		$remember = (Input::has('remember')) ? true : false;
		$auth = Auth::attempt(
			[
				'username'  => strtolower($username),
				'password'  => $password   
			], $remember
		);
		if ($auth) {
			$user_type=Auth::user()->user_type;
			if($user_type=="1")
			{
				//dd("a");
				return Redirect::intended('admin/dashboard');
			}
			else
			{
				//dd("a1");
				//return Redirect::intended('/customer/dashboard');
			}
		} else {
			// validation not successful, send back to form 
			return Redirect::back()
			->withInput()
			->withErrors('Incorrect Username or Password.');
		}
	}

	public function getLogout()
	{
		Auth::logout();

		return Redirect::to('/admin/login')
		->withInput()
		->with('message', 'You have logout successfully.');
	}

}
