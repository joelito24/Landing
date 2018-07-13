<?php namespace App\Http\Controllers;
use App\Models\Services;
use App\Models\Whitepapers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Services $serviceRepository, Whitepapers $whitepapersRepository)
	{
		    	// $services = $serviceRepository->getAllActive();
        $whitepaper = $whitepapersRepository->findLast();
		return view('front.home.home',[
		    'whitepaper' => $whitepaper,
        ]);
	}

}
