<?php

class ForumController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Forum Controller
	|--------------------------------------------------------------------------
	|
	|	Route::get('/new/{node}','ForumController@getNew');
	|	Route::post('/new/{node}','ForumController@postNew');
	|	Route::get('/thread/{thread_id}','ForumController@getThread');
	|	Route::post('/reply/{thread_id}','ForumController@postReply');
	|
	*/
	
	protected $layout = 'layouts.main';
	
	public function getNew($node = '')
	{
		$node = Node::where('name','=',$node)->firstOrFail();;
		$this->layout->title = trans('New Post');
		$this->layout->description = '';
		$this->layout->keywords = '';
		$this->layout->left = View::make('forum.new_left')
									->with('node',$node);
		$this->layout->right = View::make('forum.new_right');
	}
	
	public function postNew($node = '')
	{
		$rules = array('title'=>'required|min:2');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::back()->withErrors($validator);
		} else {
			$node = Node::where('name','=',$node)->firstOrFail();
			$thread = new Thread;
			$thread->title = e(Input::get('title'));
			$thread->content = \Michelf\Markdown::defaultTransform(e(Input::get('content')));
			$thread->node_id = $node->id;
			$thread->user_id = Auth::user()->id;
			$thread->parent_id = 0;
			$thread->replys = 0;
			$thread->save();
			return Redirect::to('/thread/'.$thread->id);
		}
	}
	
	public function getThread($thread_id = 0)
	{
		$thread = Thread::findOrFail($thread_id);
		if($thread->parent_id){
			App::abort(404);
		}
		$poster = User::findOrFail($thread->user_id);
		$replys = DB::table('threads')
							->leftjoin('users','threads.user_id','=','users.id')
							->select('threads.content','threads.created_at','threads.updated_at','users.username','users.email')
							->where('parent_id','=',$thread->id)
							->get();
		$this->layout->title = $thread->title;
		$this->layout->description = '';
		$this->layout->keywords = '';
		$this->layout->left = View::make('forum.thread_left')
									->with('poster',$poster)
									->with('replys',$replys)
									->with('thread',$thread);
		$this->layout->right = View::make('forum.thread_right');
	}
	
	public function postReply($thread_id = 0)
	{
		$rules = array('content'=>'required|min:2');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::back()->withErrors($validator);
		} else {
			$parent = Thread::findOrFail($thread_id);
			$thread = new Thread;
			$thread->title = '';
			$thread->content = \Michelf\Markdown::defaultTransform(e(Input::get('content')));
			$thread->node_id = $parent->node_id;
			$thread->user_id = Auth::user()->id;
			$thread->parent_id = $parent->id;
			$thread->replys = 0;
			$thread->save();
			DB::table('threads')->where('id','=',$parent->id)->increment('replys');
			return Redirect::to('/thread/'.$parent->id);
		}
	}
}
