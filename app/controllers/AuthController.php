<?php

class AuthController extends BaseController {

	private $__rules = array(
		'email' => 'required|email'
		, 'password' => 'required|alpha_num'
	);

	public function signIn() {
		return View::make('auth/signin');
	}

	public function signInStore() {
		$email    = Input::get('email');
		$password = Input::get('password');
		$remember = !!Input::get('remember');

		$validator = Validator::make(Input::all(), $this->__rules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}

		if (Auth::attempt(array(
			'email' => $email
			, 'password' => $password
			), $remember)) {
			return Redirect::intended('admin');
		}

        return Redirect::back()->withInput(Input::except('password'))->with('message', 'Неизвестный пользователь');
	}

	public function signOut() {
		Auth::logout();
		return Redirect::to('/');
	}

	public function signUp() {
		return View::make('auth/signup');
	}

	public function signUpStore() {
		$this->__rules['email'] .= '|unique:user,email';

		$validator = Validator::make(Input::all(), $this->__rules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->role = 'user';
		$user->save();

		Auth::loginUsingId($user->id);

		return Redirect::home();
	}

}