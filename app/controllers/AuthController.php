<?php

class AuthController extends BaseController {

	public function signIn() {
		return View::make('auth/signin');
	}

	public function signInStore() {
		$remember = !!Input::get('remember');

        if (Auth::attempt(array(
        	'email' => Input::get('email')
        	, 'password' => Input::get('password')
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
		$rules = array(
			'email' => 'required|email|unique:user,email'
			, 'password' => 'required|alpha_num'
		);

		$validator = Validator::make(Input::all(), $rules);

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