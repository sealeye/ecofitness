<!DOCTYPE html>
<html lang="ru">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="экофитнесс, фитнес, эко, экология, гармония, движение, спорт-зал, спорт, зал, тренировка, упражнение, здоровье, сила, красота, активность, здоровый, жизнь, правильный, питание, санкт-петербург, спб, питер, тело, мышцы, тренировка, диета, мотивация, форма, питание, тренер, гимнастка, реабилитация, тренажёры, аэройога, йога, дыхание, массаж" />
	<meta name="author" content="" />
	<title>Ecofitness</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='css/normalize.css' type='text/css'>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/the-modal.css" media="all">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body>
	<!--модальное окно заказа звонка-->
	<div id="form-container">
		<div id="test-modal" style="display:none" class="modal">
			<p>Бесплатная консультация</p>
			<p>Оставьте ваши данные и мы перезвоним вам в ближайшее время</p>
			<form id="contact-form" name="contact-form" method="post" action="">
				<input type="text" placeholder="Имя" name="name" id="name" value="" />
				<input type="text" placeholder="E-mail (обязательно)" name="email" id="email" value="" />
				<input type="text" placeholder="Телефон (обязательно)" name="telephone" id="telephone" value="" />
				<textarea name="message" id="message">
					Заказан звонок</textarea>
				<input type="submit" name="button" id="button" value="Отправить" />
			</form>
			<a href="#" class="close">x</a>
		</div>
	</div>

	<header>
		<div class="fixed-header "></div>
		<div class="fixed-navigation">
			<div class="wrapper clearfix navigation navbar-wrapper">
				<a href="index.html" class="logo"><img src="img/head-logo.png" width="237" height="42" alt="ecofitness"></a>
				<nav class="main-navigation">
					<ul>
						<li class="menu-item"><a href="gallery.html">Фотогалерея</a></li>
						<li class="menu-item"><a href="services.html">Услуги</a></li>
						<li class="menu-item"><a href="rates.html">Тарифы</a></li>
						<li class="menu-item"><a href="scheme.html">Схема клуба</a></li>
						<li class="menu-item active"><a href="trainers.html">Тренеры</a></li>
						<li class="menu-item"><a href="schuedle.html">Расписание</a></li>
					</ul>
				</nav>
				<a href="#" class="call btn trigger ">Заказать звонок</a>
			</div>
		</div>
	</header>
	<main>
		<section class="trainers" id="trainers">
			<div class="wrapper">
				<h2>Тренеры</h2>

				<ul class="trainers-slider">
					<?php
					$coaches = glob('data/*.json');
					foreach ($coaches as $key => $coach) {
						$image = '/img/coach/'.basename($coach,'.json').'.jpg';
						if (!file_exists(substr($image,1))) {
							$image = ''; //сюда надо вставить NO IMAGE
						}
						$data = json_decode(file_get_contents($coach));
					?>
					<?php if (($key+1) % 7 == 0 || $key == 0 ): ?>
					<li class="slide">
					<?php endif;?>
						<div class="trainers-descr trainer">
							<img src="<?=$image?>" />
							<h3><?=$data->title?></h3>
								<div class="click trainer-modal" style="display:none" >
						<div class="heading"><?=$data->title?></div>
							<p>
								<?=nl2br($data->position)?>
							</p>
							<h4>Опыт работы</h4>
							<p><?=$data->year?></p>

							<?php if (!empty($data->direction)):?>
							<h4>Направление</h4>
							<p><?=nl2br($data->direction)?></p>
							<?php endif;?>

							<?php if (!empty($data->learn)):?>
							<h4>Образование</h4>
							<p><?=nl2br($data->learn)?></p>
							<?php endif;?>

							<?php if (!empty($data->success)):?>
							<h4>Достижения</h4>
							<p><?=nl2br($data->success)?></p>
							<?php endif;?>

						</div>
						</div>
						<?php if (($key+1) % 6 == 0 || !next($coaches)): ?>
						</li>
						<?php endif;?>
						<?php };?>
				</ul>
				<div class="right-arrow arrow"></div>
				<div class="left-arrow arrow"></div>

			</div>
		</section>
		<section class="contacts" id="contacts">
			<div class="map">
				<div class="wrapper">
					<h2>Мы на карте</h2>
				</div>
				<div id="villages" class="frame-map map_canvas"></div>
			</div>
			<div class="wrapper contact-info">
				<div class="contact-date">
					<div class="main-logo"><img src="img/contact-logo.png" width="330" height="210" alt=""></div>
					<p><span>Часы работы</span>
						<br> 7:00 — 23:00 в будние дни
						<br> 9:00 — 22:00 в выходные дни
					</p>
					<p><span>E-mail </span>
						<br> ask@ecofitness.su </p>
					<p><span>Телефон</span>
						<br> +7 812 407 11 88</p>
					<p><span>Адрес </span>
						<br> Санкт-Петербург, ул. Киевская, 4к1</p>
					<p class="desc">Парковка</p>
					<img src="img/parking.png" alt="" class="parking">
				</div>
				<div class="social-block">
					<p class="description">Мы в соц. сетях</p>
					<a href="http://vk.com/club112612670" target="_blank" class="footer-social vk"></a>
					<a href="https://www.facebook.com/My.EcoFitness/" class="footer-social facebook"></a>
					<a href="#" class="footer-social twitter disabled"></a>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="copyright">Экофитнес © 2016</div>
		<div class="designed">Designed by <a href="http://estray.jimdo.com" target="_blank">Estray</a></div>
	</footer>
	<script type="text/javascript" src="js/jquery.the-modal.js"></script>
	<script type="text/javascript" src="js/modal-click.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiZ9OQLwQWgeosthNOHNNsvbLARH0yr3U&signed_in=true&callback=initMap"></script>
	<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/slider.js"></script>
				<script type="text/javascript" src="js/rates-modal.js"></script>
				<script>
				$(function(){
					var name = decodeURI(window.location.search.substring(6));
					$('.heading:contains('+name+')').parent().modal().open();
				});
				</script>
<!--
	        <script>
            $(document).ready(function() {

                $(".serv-btn").click(function() {

                    $(".block").hide();
                    var BlockTrigger = $(this).data("trigger");
                    $("#block-" + BlockTrigger).show();
                    $('.serv-btn').removeClass('active'); //заберет актив у всех ссылок
                    $(this).addClass('active'); //присвоит нужной

                    if(BlockTrigger==7){
                        $('.btn-block').hide();
                    }
                    else{
                        $('.btn-block').show();
                    }
                });



            });

        </script>
-->

</body>

</html>
