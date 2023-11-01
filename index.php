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
	<div class="wrapper">
		<form class="options_form js-form" action="/" method="post">
			<div class="options_wrapper js-options-block active" data-id="1">
				<div class="options_toggle">
					<button class="btn btn--toggle js-options-toggle" data-id="1" type="button"></button>

					<h3 class="options_toggle__title js-options-toggle" data-id="1">Выбор сервера под задачу</h3>
				</div>

				<?php $servers = array(
					array("Для 1С", "1c"),
					array("Для офиса", "office"),
					array("Файловый", "file"),
					array("Для виртуализации", "virtualization"),
					array("Контроллер домена", "domen"),
					array("Для хостинга", "hosting"),
				); ?>

				<div class="options_content">
					<div class="options_list">
						<?php foreach ($servers as $server) { ?>
							<label class="options_list__item">
								<input type="radio" name="server_type">
								<span class="options_list__content">
									<span class="options_list__img js-img-bg"
									      data-src="<?= $icons; ?>/<?= $server[1]; ?>.svg"></span>
									<span class="options_list__desc"><?= $server[0]; ?></span>
								</span>
							</label>
						<?php } ?>
					</div>
				</div>
			</div>

			<hr>

			<div class="options_wrapper js-options-block active" data-id="2">
				<div class="options_toggle">
					<button class="btn btn--toggle js-options-toggle" data-id="2" type="button"></button>

					<h3 class="options_toggle__title js-options-toggle" data-id="2">Производитель</h3>

					<button class="btn btn--question js-popup-show" data-popup="question" type="button"></button>
				</div>

				<?php $brands = ['HP', 'Dell', 'Intel', 'Supermicro', 'Cisco', 'Huawei', 'Asus', 'IBM', 'Lenovo', 'Fujitsu']; ?>

				<div class="options_content">
					<div class="options_checkbox">
						<?php foreach ($brands as $brand) { ?>
							<label class="options_checkbox__item">
								<input type="checkbox" name="brand">
								<span class="options_checkbox__box"></span>
								<span class="options_checkbox__desc"><?= $brand; ?></span>
							</label>
						<?php } ?>
					</div>
				</div>
			</div>

			<hr>

			<div class="options_wrapper js-options-block active" data-id="3">
				<div class="options_toggle">
					<button class="btn btn--toggle js-options-toggle" data-id="3" type="button"></button>

					<h3 class="options_toggle__title js-options-toggle" data-id="3">Тип сервера</h3>
				</div>

				<?php $serverTypes = ['1U Rock', '2U Rock', '3U Rock', '4U Rock', '5U Rock', 'Tower', 'Blade']; ?>

				<div class="options_content">
					<div class="options_radio">
						<?php foreach ($serverTypes as $serverType) { ?>
							<label class="options_radio__item">
								<input type="radio" name="server_type">
								<span class="options_radio__box"></span>
								<span class="options_radio__desc"><?= $serverType; ?></span>
							</label>
						<?php } ?>
					</div>
				</div>
			</div>

			<hr>

			<div class="options_wrapper js-options-block active" data-id="4">
				<div class="options_toggle">
					<button class="btn btn--toggle js-options-toggle" data-id="4" type="button"></button>

					<h3 class="options_toggle__title js-options-toggle" data-id="4">Процессор</h3>
				</div>

				<div class="options_content">
					<h4>Базовая частота</h4>

					<input class="frequency_input js-frequency-amount" type="text" readonly
					       style="border:0; color:#f6931f; font-weight:bold;">

					<div class="frequency">
						<div class="js-frequency-slider"></div>

						<div class="frequency_value frequency_value--from js-frequency-from"></div>
						<div class="frequency_value frequency_value--to js-frequency-to"></div>
					</div>

					<h4>Количество дисков</h4>
				</div>
			</div>
		</form>
	</div>
</section>

<script src="all.min.js?v<?= (date("YmdHis")); ?>"></script>
</body>
</html>