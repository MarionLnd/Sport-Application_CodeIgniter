		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Accueil Membre</title>
	</head>

	<body>
	
		<header>
			<nav>

				<a href="<?php echo site_url('Membre/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
				
				<p class="page" >Espace membre</p>

				<a href="<?php echo site_url('Membre/creation_equipe')?>" class="onglet">Créer une équipe</a>

				<a href="<?php echo site_url('Membre/integration_equipe')?>" class="onglet">Intégrer une équipe</a>

				<a href="<?php echo site_url('Membre/invitations')?>" class="onglet">Mes invitations</a>

				<a href="<?php echo site_url('Membre/equipes')?>" class="onglet">Mes équipes</a>

				<a href="<?php echo site_url('Membre/profil')?>" class="onglet">Mon profil</a>
				
			</nav>
		</header>

		
		
		<div class="container">
			<div>
				<h3>Bienvenue <?php if(isset($login)) echo $login; ?> !</h3>
				<p>Maintenant connecté(e), vous pouvez créer une équipe ou choisir d'en intéger une : soit par invitation de l'administrateur de l'équipe, soit par connaissance du mot de passe de l'équipe</p>
				<p class="date"><?php echo date("F j Y, g:i a");?></p>
			</div>

			<div>
				<h2>Actualités sportives</h2>

			</div>

		</div>

	</body>