		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Accueil Membre</title>
	</head>

	<body>

		<header>
			<nav class="uk-navbar-container" uk-navbar>

				<a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
					<div>
						<img data-src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="40" uk-img>
					</div>
				</a>

				<div class="uk-navbar-right">
					<ul class="uk-navbar-nav">
						<li>
							<a href="<?php echo site_url('Membre/creation_equipe')?>">Créer une équipe</a>
						</li>
						<li>
							<a href="<?php echo site_url('Membre/integration_equipe')?>">Intégrer une équipe</a>
						</li>
						<li>
							<a href="<?php echo site_url('Membre/invitations')?>">Mes invitations</a>
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



		<div class="uk-container uk-background-default uk-margin-large-top">
			<div>
				<h3>Bienvenue <?php if(isset($login)) echo $login; ?> !</h3>
				<p>Maintenant connecté(e), vous pouvez créer une équipe ou choisir d'en intéger une : soit par invitation de l'administrateur de l'équipe, soit par connaissance du mot de passe de l'équipe</p>
				<p class="date"><?php echo date("F j Y, g:i a");?></p>
			</div>

		</div>

	</body>
