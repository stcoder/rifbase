@extends('../layouts/auth')

@section('content')
{{ Form::open(array('route' => 'signin', 'class' => 'form__small box form__center')) }}
	<div class="page-header form__caption">Авторизация</div>
	@if (sizeof($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif
	@if (Session::has('message'))
		<div class="alert alert-warning">
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
	<div class="form-group-sm">
		<button type="submit" class="btn btn-primary btn-small btn-block">Войти</button>
	</div>
	<p><a href="#">Восстановить пароль</a></p>
	<p>{{ link_to_route('signup', 'Зарегистрироваться') }}</p>
{{ Form::close() }}
@stop