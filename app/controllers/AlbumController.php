<?php

class AlbumController extends BaseController {

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

	public function getList(){
		$album = new Album();
		$list = $album->all();
		$m = 0;
		foreach($list as $item){
			$data[$m][] = $item;
			if(count($data[$m])>=3){
				$m += 1;
			} 
		}
		$this->layout->content = View::make('admin.list')->with(array("list"=>$data));
	}

	public function getCreate(){
		$this->layout->content = View::make('admin.album');
	}

	public function postCreate(){
		$album = new Album();
		$album->title = Input::get("title");
		$album->description = Input::get("description");
		$album->save();
		var_dump($album->id);exit;
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
			return Redirect::to('admin')->with('message', '欢迎进入Marry后台管理系统!');
		} else {
			//var_dump(Input::get());exit;
			return Redirect::to('admin/login')->with('message', '<font color="red">用户名或密码不正确!</font>')->withInput();
		}	
	}

	public function getUpload($aid=0){
		$this->layout->content = View::make('admin.login');
	}
}
