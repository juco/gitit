<?php namespace gitit\Controllers;

// use gitit\Git\Command\Log;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		die('foo');
		// $repository = Repository::find(1);
		// $cmd = \App\Git\Command\Log::initForRepository($repository);
		// $cmd->execute();
		// my_print_r($cmd->getOutput());
		// return View::make('hello');
	}

}