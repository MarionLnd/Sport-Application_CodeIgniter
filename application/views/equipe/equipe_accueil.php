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

	<!--	<header>
			<nav>

				<a href="<?php echo site_url('Equipe/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>

				<p class="page" >Espace equipe</p>

				<a href="<?php echo site_url('Equipe/liste_membre')?>" class="onglet">Liste des membres</a>

				<a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet">Calendrier</a>

				<!--<a href="<?php echo site_url('Equipe/evenements')?>" class="onglet">Evénèments</a>-->

			<!--	<a href="<?php echo site_url('Equipe/equipe');?>" class="onglet">L'équipe</a>

			</nav>
		</header>-->



		<div class="container">
			<div>
				<h3>Bienvenue <?php if(isset($login)) echo $login; ?></h3>

				<p>Maintenant connecté(e), vous pouvez créer une équipe ou choisir d'en intéger une : soit par invitation de l'administrateur de l'équipe, soit par connaissance du mot de passe de l'équipe</p>

				<p class="date"><?php echo date("F j Y, g:i a");?></p>
				<?php echo "nom de l'equipe:".$nomEquipe; ?>
				<?php echo $sport; ?>
				<!--<?php echo $_SESSION['nomEquipe']; ?>-->

			</div>

			<div>
				<h2>Actualités sportives</h2>

			</div>

		</div>

	</body>
