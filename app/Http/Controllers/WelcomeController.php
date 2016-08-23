<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Destination;
use App\Model\Banner;
use App\Model\State;
use App\Model\Destinationimage;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->with('state_name','primary_image')	
							 ->orderBy('location_name','ASC')		
							->paginate(4);
							
		$banner=Banner::where('deleted',0)->get();
		return view('home', [ 
			'destinations' => $destinations,
			'banners' => $banner
		]);
	}

}
