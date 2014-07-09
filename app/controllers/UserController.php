<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default User Controller
	|--------------------------------------------------------------------------
	|
	|	Route::get('/login', 'UserController@getLogin');
	|	Route::post('/login', 'UserController@postLogin');
	|	Route::get('/reg', 'UserController@getReg');
	|	Route::post('/reg', 'UserController@postReg');
	|
	*/
	
	protected $layout = 'layouts.main';
	
	public function getLogin()
	{
		$this->layout->title = trans('Login');
		$this->layout->description = '';
		$this->layout->keywords = '';
		$this->layout->left = View::make('users.login_left');
		$this->layout->right = View::make('users.login_right');
	}
	
	public function postLogin()
	{
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')), (bool)Input::get('remember'))){
			return Redirect::to('/');
		} else {
			return Redirect::to('/login')->withErrors(trans('incorrectPassword'));
		}
	}
	
	public function getReg()
	{
		$this->layout->title = trans('Register');
		$this->layout->description = '';
		$this->layout->keywords = '';
		$this->layout->left = View::make('users.reg_left');
		$this->layout->right = View::make('users.reg_right');
	}
	
	public function postReg()
	{
		$rules = array('email'=>'required|email|unique:users','password' => 'required|min:6|confirmed','username' => 'required|unique:users');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('reg')->withErrors($validator);
		} else {
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->username = Input::get('username');
			$user->save();
			Auth::login($user);
			return Redirect::to('/');
		}
	}

}
