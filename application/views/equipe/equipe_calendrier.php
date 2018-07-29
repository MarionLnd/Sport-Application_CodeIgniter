<?php  echo link_tag('assets/Css/style_equipe.css'); ?>
	<?php
		echo "<style>";
		echo "html{";
		echo "background-image:url(".base_url()."./assets/Images/img_team/team_".$sport.".jpg".");";
		echo "}";
		echo "</style>";
	?>

		<title>Accueil Equipe</title>
	</head>

	<body>

	<header>
			<nav class="uk-navbar-container" uk-navbar>

				<a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
					<div>
						<img data-src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="40" uk-img>
						<div class="uk-navbar-subtitle">Espace equipe</div>
					</div>
				</a>

				<div class="uk-navbar-right">
					<ul class="uk-navbar-nav">
						<li>
							<a href="<?php echo site_url('Equipe/liste_membre')?>" class="onglet_actif">Liste des membres</a>
						</li>
						<li>
							<a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet">Calendrier</a>
						</li>
						<li>
							<a href="<?php echo site_url('Equipe/equipe')?>" class="onglet">L'équipe</a>
						</li>
						<li>
							<a href="<?php echo site_url('Membre/equipes')?>">Mes équipes</a>
						</li>
						<li>
							<a href="<?php echo site_url('Membre/profil')?>">Mon profil</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<h1>Calendrier de l'équipe</h1>

		<div class="infos-page">
			<p>Dans cette page, vous pouvez consulter le calendrier des événements cette équipe.</p>
		</div>


		<div class="contenu-centre">
			<?php

			echo $this->calendar->generate();

			?>
		</div>

	</body>
