<?php

class LoginController extends BaseController {

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
	protected $layout = 'admin.base';	

	public function getLogin(){
		$this->layout->content = View::make('admin.login');
	}

	public function postLogin(){
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
			return Redirect::to('admin/album/list')->with('message', '欢迎进入Marry后台管理系统!');
		} else {
			//var_dump(Input::get());exit;
			return Redirect::to('admin/login')->with('message', '<font color="red">用户名或密码不正确!</font>')->withInput();
		}	
	}

	public function getLogout(){
		if(Auth::check()){
			Auth::logout();
			return Redirect::to('admin/login');
		}
	}
}
