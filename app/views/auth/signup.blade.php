@extends('../layouts/layout')

@section('content')
{{ Form::open(array('route' => 'signup', 'class' => 'form__small form__center')) }}
	<div class="page-header form__caption">Регистрация</div>
	@if (sizeof($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
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
	<button type="submit" class="btn btn-primary btn-small btn-block">Зарегистрироваться</button>
{{ Form::close() }}
@stop