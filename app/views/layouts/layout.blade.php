<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{ HTML::style("/vendor/bootstrap/dist/css/bootstrap.min.css") }}
<!-- {{ HTML::style("/vendor/bootstrap/dist/css/bootstrap-theme.min.css") }} -->
{{ HTML::style("/css/common.css") }}
</head>
<body>

<div class="page">
	<div class="page__header">
		<div class="page__header-top-ribbon"></div>
		<div class="page__header-wrapper">
			<div class="page__header-container container">
				<div class="row">
					<div class="col-sm-3 logo">
						<div class="logo__container">
							{{ link_to_route('home', 'БАЗА', null, ["class" => "logo__text"]) }}
						</div>
					</div>
					<div class="col-sm-5 col-sm-offset-4">
						<div class="city">
							<div class="city__container">
								<div class="city__text">Выбор города:</div>
								<div class="city__selector">Екатринбург</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-sm-offset-9">
						<div class="cabinet">
							<div class="cabinet__container">
								<div class="cabinet__auth-box">
									{{ link_to_route('signin', 'Вход', null) }}&nbsp;/&nbsp;{{ link_to_route('signup', 'Регистрация', null) }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="navigation">
		<div class="navigation__row">
			<div class="container navigation__wrapper">
				<div class="row">
					<div class="col-sm-12">
						<div class="navigation__container">
							<ul class="nav nav-pills">
								<li><a href="/">Главная</a></li>
								<li><a href="/novosti.html">Новости</a></li>
								<li><a href="/catalog-techniki.html">Каталог техники</a></li>
								<li><a href="/obyavleniya.html">Объявления</a></li>
								<li><a href="/rekvezity.html">Реквизиты</a></li>
								<li><a href="/dispetchera.html">Диспетчера</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page__container container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page__body box">
					<div class="page__content">						
						@yield('content')
					</div>
					<!-- <div class="page__footer footer">
						<div class="footer__navigation">
							<ul class="nav nav-pills">
								<li><a href="/">Главная</a></li>
								<li><a href="/novosti.html">Новости</a></li>
								<li><a href="/catalog-techniki.html">Каталог техники</a></li>
								<li><a href="/obyavleniya.html">Объявления</a></li>
								<li><a href="/rekvezity.html">Реквизиты</a></li>
								<li><a href="/dispetchera.html">Диспетчера</a></li>
							</ul>
						</div>
						<div class="footer__contacts">2</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

{{ HTML::script("/vendor/jquery/dist/jquery.min.js") }}
{{ HTML::script("/vendor/bootstrap/dist/js/bootstrap.min.js") }}
</body>
</html>