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
			<nav>

				<a href="<?php echo site_url('Equipe/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
				
				<p class="page" >Espace equipe</p>

				<a href="<?php echo site_url('Equipe/liste_membre')?>" class="onglet_actif">Liste des membres</a>

				<a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet">Calendrier</a>

				<a href="<?php echo site_url('Equipe/evenements')?>" class="onglet">Evénèments</a>

				<a href="<?php echo site_url('Equipe/equipe')?>" class="onglet">L'équipe</a>
				
			</nav>
		</header>

		
		
		<div class="container">


			<?php 
				if(isset($membres)){
					foreach ($membres as $valeur) {
						echo $valeur->LoginMembre;
					}
				}

				?>
		</div>

	</body>