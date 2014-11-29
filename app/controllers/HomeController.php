<?php

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

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function getAlbum($aid=0){
		$cover = Photo::whereRaw("aid=? AND cover=1", array($aid))->first();
		if(!$cover){
			$cover = Photo::whereRaw("aid=?", array($aid))->first();
		}
		$info = Album::where("aid", "=", $aid)->first();
		$list = Photo::whereRaw("aid=? AND pid NOT IN (?)", array($aid, $cover? $cover->pid: 0))->get();
		return View::make('home.album')->with(array('list'=>$list, 'info'=>$info, 'cover'=>$cover));
	}
}
