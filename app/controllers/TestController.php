<?php

class TestController extends BaseController {
	
	public function getNew($name = '')
	{
		$node = Node::where('name','=',$name)->firstOrFail();
		$this->layout->title = trans('New Post');
		$this->layout->description = '';
		$this->layout->keywords = '';
		$this->layout->left = View::make('forum.new_left')
									->with('node',$node);
		$this->layout->right = View::make('forum.new_right');
	}

}
