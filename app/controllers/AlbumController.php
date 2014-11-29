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
		$list = Album::with(array("photos"=>function($query){ $query->orderBy("cover", "desc"); }))->get();
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
		if ($album->id) {
			return Redirect::to('admin/album/list');
		} else {
			//var_dump(Input::get());exit;
			return Redirect::to('admin/album/list');
		}	
	}

	public function getUpload($aid=0){
		$list = Photo::where("aid", "=", $aid)->get();
		$photos = array();
		$m = 0;
		foreach($list as $item){
			$photos[$m][] = $item;
			if(count($photos[$m])>=3){
				$m += 1;
			} 
		}
		$this->layout->content = View::make('admin.upload')->with(array('aid'=>$aid, 'photos'=>$photos));
	}
	
	public function postUpload($aid=0){
		$path = "/var/www/php/upload/public/photos/".date("Y-m-d");
		if(!file_exists($path)){
			mkdir($path, 0777, true);
		}
		Input::file("fileList")->move($path, $filename=date("His").rand(1000,9999).rand(1000,9999).".".Input::file('fileList')->getClientOriginalExtension());
		$src = "/photos/".date("Y-m-d")."/".$filename;
		$photo = new Photo();
		$photo->src = $src;
		$photo->aid = $aid;
		$photo->description = "";
		$photo->save();
	}

	public function getCover($aid=0, $pid=0){
		$affectedRows = Photo::where('aid', '=', $aid)->update(array('cover' => 0));
		$affectedRows = Photo::where('pid', '=', $pid)->update(array('cover' => 1));
		return Redirect::to('admin/album/upload/'.$aid);
	}
}
