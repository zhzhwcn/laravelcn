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
	|	Route::get('/', 'HomeController@showHome');
	|
	*/
	
	protected $layout = 'layouts.main';
	
	public function showHome()
	{
		$threads = DB::table('threads')
							->leftjoin('users','threads.user_id','=','users.id')
							->leftjoin('nodes','threads.node_id','=','nodes.id')
							->select(
								'threads.id','threads.title','threads.created_at','threads.updated_at',
								'users.username','users.email',
								'nodes.id AS nid','nodes.name','nodes.display_name'
							)
							->where('threads.parent_id','=',0)
							->orderBy('threads.updated_at','DESC')
							->paginate(20);
		$nodes = DB::table('nodes')->get();
		$this->layout->title = trans('Home');
		$this->layout->description = '';
		$this->layout->keywords = '';
		$this->layout->left = View::make('home.left')
									->with('nodes',$nodes)
									->with('threads',$threads);
		$this->layout->right = View::make('home.right');
	}

}
