<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-learn : The Dealy Guide To Learn</title>
	<link rel="stylesheet" href="<?php $layout = 'css'; echo $layout . '/style.css'; ?>">
	<link rel="stylesheet" href="<?php //$layout = 'css'; echo $layout . '/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php $layout = 'css'; echo $layout . '/font-awesome.min.css'; ?>">
</head>
<body>

<?php

	$pages = 'test/pages/';
	$js = 'js/';

?>

	<header>
	<ul class="block">
		<span>Catégories</span>
		<div class="categor">
			<li><a href="">Développement</a></li>
			<li><a href="">Business</a></li>
			<li><a href="">Photographie</a></li>
			<li><a href="">Design</a></li>
		</div>
	</ul>
	<form action="" method="">
		<button class="search-crs" type="submit" value="" name="submit_search"><i class="fa fa-search" aria-hidden="true"></i></button>
		<input type="search" name="search_input" placeholder="Chercher des cours">
	</form>
		<ul class="info">
			<li><a href="">Devenir formateur</a></li>
			<li><a href="">Se connecter</a></li>
			<li><a href="">S’inscrire</a></li>
		</ul>
	</header>

	<section class="streamer carousel carousel-slider">
		<div class="container">
			<h1>Donnez-vous les moyens de réussir</h1>
			<p>De la programmation à la photographie, suivez des <br> cours en ligne approfondis et accomplissez tous vos <br>objectifs grâce à vos compétences.</p>
		</div>
	</section>

	<section class="cours-first">
		<div class="courses">
			<div class="first-cours make-it-fast">
				<!--
			#1 - title.
			#2 - image.
			#3 - stars.
			#4 - description.
			#5 - take cours.
			 -->
				<h3>L'essentiel de Angualr Js</h3>
				<img src="imgs/angular.jpg" alt="lesson-img">
				<ul class="stars">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
				</ul>
				<p class="description">Lorem ipsum dolor sit ametin reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident.</p>
				<button class="take-cours" type="submit" name="apprendr">Apprendr</button>
			</div>
		</div>
	</section>


<script src="<?php echo $js . 'jquery.min.js'; ?>"></script>
<script src="<?php echo $js . 'materialize.min.js' ?>"></script>
<script src="<?php echo $js . 'bootstrap.min.js'; ?>"></script>
<script src="<?php echo $js . 'main.js'; ?>"></script>
</body>
</html>
