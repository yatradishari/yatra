<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\DashboardRepository;
Use Visitor ; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller {

	//protected $dashboard;
	
	//public function __construct( DashboardRepository $dashboard )
	//{
		//$this->dashboard = $dashboard;
	//}	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function getIndex()
	{
		return View('admin.dashboard');
		
	}

	
	
}
