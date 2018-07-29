<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php echo link_tag('assets/Images/icone.png', 'shortcut icon', 'image/png'); ?>
		<?php echo link_tag('assets/UIkit/css/uikit.min.css'); ?>
		<?php echo link_tag('assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css'); ?>
		<?php echo link_tag('assets/Css/utils.css'); ?>
		<link href="https://fonts.googleapis.com/css?family=Pacifico|Snippet" rel="stylesheet">
		<title>SportsAndCo</title>
	</head>
	<body>

	<header>
		<nav class="uk-navbar-container" uk-navbar>
				<div class="uk-nav-header">
					<a href="<?php echo site_url('Accueil/index') ?>" class="brand-logo"><img data-src="<?php echo base_url() . "./assets/Images/logoSport.png" ?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="40" uk-img></a>
				</div>

				<div class="uk-navbar-right" id="navbarMobile">
					<ul class="uk-navbar-nav">
						<li><a href="<?php echo site_url('Inscription/index') ?>" class=""><span uk-icon="icon: sign-in; ratio: 1.5" class="uk-margin-small-right"></span>Inscription</a></li>
						<li><a href="<?php echo site_url('Connexion/index') ?>" class=""><span uk-icon="icon: user; ratio: 1.5" class="uk-margin-small-right"></span>Connexion</a></li>
					</ul>
				</div>
		</nav>

	</header>

	<h1 class="uk-heading-line uk-text-center"><span>Bienvenue sur SportAndCo !</span></h1>
	<h2 class="uk-text-center uk-margin-remove-top">Gestion des événements sportifs au sein de clubs</h2>

	<!--<section class="s2">
				<article id="s2">
					<h2>Carte de répartition des différents clubs inscrits</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5599537.43084618!2d-0.5905113285451286!3d46.74224151970213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sfr!2sfr!4v1494588824423" width="400" height="300" frameborder="0" style="border:0"></iframe>
				</article>
			</section>-->

		<div class="uk-section uk-section-default">
			<div class="uk-container uk-background-secondary uk-margin">
				<h1 class="uk-text-center uk-text-primary uk-padding-small uk-padding-remove-bottom">Dernières actualités sportives</h1>
				<hr>
				<div id="actus" class="uk-child-width-expand" uk-grid>

				</div>
			</div>
		</div>

	</div>

