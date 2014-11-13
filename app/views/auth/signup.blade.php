@extends('../layouts/auth')

@section('content')
{{ Form::open(array('route' => 'signup', 'class' => 'form__small box form__center')) }}
	<div class="page-header form__caption">Регистрация</div>
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
	<div class="form-group-sm">
		<button type="submit" class="btn btn-primary btn-small btn-block">Зарегистрироваться</button>
	</div>
	<p>{{ link_to_route('signin', 'Авторизироваться') }}</p>
{{ Form::close() }}
@stop