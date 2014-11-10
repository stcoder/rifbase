@extends('../layouts/layout')

@section('content')
{{ Form::open(array('route' => 'signin', 'class' => 'form__small form__center')) }}
	<div class="page-header form__caption">Авторизация</div>
	@if (Session::has('message'))
		<div class="alert alert-danger">
			<p>{{ Session::get('message') }}</p>
		</div>
	@endif
	<div class="form-group-sm">
		<label for="email">E-mail</label>
		<input type="email" class="form-control" id="email" name="email">
	</div>
	<div class="form-group-sm">
		<label for="password">Пароль</label>
		<input type="password" class="form-control" id="password" name="password">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" id="remember" name="remember"> Запомнить меня
		</label>
	</div>
	<button type="submit" class="btn btn-primary btn-small btn-block">Войти</button>
{{ Form::close() }}
@stop