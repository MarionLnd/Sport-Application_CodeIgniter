<!--<?php  echo link_tag('assets/Css/style_equipe.css'); ?>-->
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



		<div class="uk-container">
			<div class="uk-margin uk-background-default">
				<h3>Bienvenue <?php if(isset($login)) echo $login; ?> dans l'équipe <?php echo $nomEquipe;?></h3>

				<p>Vous vous trouvez à présent sur l'écran d'accueil de votre équipe : vous pouvez consulter les informations concernant votre équipe, le calendrier de celle-ci, les différents évènements de celle-ci et enfin la liste des membres la composant.</p>

				<p class="date"><?php echo date("F j Y, g:i a");?></p>

			</div>
		</div>

	</body>
