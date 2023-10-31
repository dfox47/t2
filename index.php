<!doctype html>

<?php $i = 'i';
$icons = $i . '/icons'; ?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="styles.min.css?v<?= (date("YmdHis")); ?>">

	<title>Servs</title>
</head>

<body>
<div class="hero">
	<span class="logo js-img-scroll" data-src="i/logo.svg"></span>

	<!--	<video class="hero__bg" playsinline autoplay muted loop>-->
	<!--		<source src="i/bg.mp4" type="video/mp4">-->
	<!--	</video>-->

	<div class="hero__content">
		<h1 class="hero__title">SERVS</h1>

		<div class="hero__desc">флагманский поставщик серверов и комплектующих в России</div>

		<div class="hero__more">
			<button class="btn btn--primary">Смотреть каталог</button>
		</div>
	</div>
</div>

<section class="config_title">
	<div class="wrapper">
		<h2>Конфигуратор сервера</h2>

		<hr>
	</div>
</section>

<section>
	<form class="options_form js-form" action="/" method="post">
		<div class="wrapper">
			<div class="options_wrapper">
				<div class="options_toggle">
					<button class="btn btn--toggle js-options-toggle" data-id="1"></button>

					<h3 class="options_toggle__title js-options-toggle" data-id="1">Выбор сервера под задачу</h3>
				</div>
			</div>

			<div class="options_list">
				<label class="options_list__item">
					<input type="radio" name="server_type">
					<span class="options_list__content">
						<span class="options_list__img js-img-bg" data-src="<?= $icons; ?>/1c.svg"></span>
						<span class="options_list__desc">Для 1С</span>
					</span>
				</label>

				<label class="options_list__item">
					<input type="radio" name="server_type">
					<span class="options_list__content">
						<span class="options_list__img js-img-bg" data-src="<?= $icons; ?>/office.svg"></span>
						<span class="options_list__desc">Для офиса</span>
					</span>
				</label>

				<label class="options_list__item">
					<input type="radio" name="server_type">
					<span class="options_list__content">
						<span class="options_list__img js-img-bg" data-src="<?= $icons; ?>/file.svg"></span>
						<span class="options_list__desc">Файловый</span>
					</span>
				</label>

				<label class="options_list__item">
					<input type="radio" name="server_type">
					<span class="options_list__content">
						<span class="options_list__img js-img-bg" data-src="<?= $icons; ?>/virtualization.svg"></span>
						<span class="options_list__desc">Для виртуализации</span>
					</span>
				</label>

				<label class="options_list__item">
					<input type="radio" name="server_type">
					<span class="options_list__content">
						<span class="options_list__img js-img-bg" data-src="<?= $icons; ?>/domen.svg"></span>
						<span class="options_list__desc">Контроллер домена</span>
					</span>
				</label>

				<label class="options_list__item">
					<input type="radio" name="server_type">
					<span class="options_list__content">
						<span class="options_list__img js-img-bg" data-src="<?= $icons; ?>/hosting.svg"></span>
						<span class="options_list__desc">Для хостинга</span>
					</span>
				</label>
			</div>

			<hr>
		</div>
	</form>
</section>

<script src="all.min.js?v<?= (date("YmdHis")); ?>"></script>
</body>
</html>