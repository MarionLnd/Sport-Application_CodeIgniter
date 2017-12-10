		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Accueil Administrateur</title>
		
	</head>

	<body>
	
		<header>
			<nav>

				<a href="<?php echo site_url('Admin/index')?>"><img src="<?php echo base_url()."./assets/Images/img_team/team_".$sport.".png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>

				<p class="page" >Espace Admin</p>

				<a href="<?php echo site_url('Admin/equipes')?>" class="onglet">Mes équipes</a>

				<a href="<?php echo site_url('Admin/creation_equipe')?>" class="onglet">Déconnexion</a>

				
			</nav>
		</header>

		
		
		<div class="container">
			<div>
				<p>Maintenant connecté(e), vous pouvez créer une équipe ou choisir d'en intéger une : soit par invitation de l'administrateur de l'équipe, soit par connaissance du mot de passe de l'équipe</p>
			</div>

			<div>
				<h2>Actualités sportives</h2>
			</div>

			<div>
				<h2>Mes équipes</h2>
			</div>
		</div>

	</body>

</html>