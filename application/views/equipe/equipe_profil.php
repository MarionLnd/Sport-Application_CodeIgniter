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

				<!--<a href="<?php echo site_url('Equipe/liste_membre')?>" class="onglet">Liste des membres</a>-->

				<a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet">Calendrier</a>

				<!--<a href="<?php echo site_url('Equipe/evenements')?>" class="onglet">Evénèments</a>-->

				<a href="<?php echo site_url('Equipe/equipe');?>" class="onglet_actif">L'équipe</a>
				
			</nav>
		</header>

		<h1>Informations de l'équipe</h1>
		
		<div class="container-profil">

			<div class="heading">
					<h2 class="nom_membre"><?php if(isset($prenom)) echo $prenom." ".$nom;?></h2>
				</div>
				<div class="body">
						<div class="avatar" align="center"> <img alt="<?php if(isset($avatar)) echo $avatar;?>" src="<?php if(isset($avatar)) echo base_url()."./assets/Images/uploads/".$avatar;?>" class="avatar">
						</div>
						<div class="tableau"> 
							<table class="tableau-info">
								<tbody>
									<thead>
										Info
									</thead>	
									<tr>
										<td>Nom de l'équipe:</td>
										<td><?php if(isset($_SESSION['nomEquipe'])) echo $_SESSION['nomEquipe'];?></td>
									</tr>
									<tr>
										<td>Logo de l'équipe:</td>
										<td><?php if(isset($logo)) echo $logo;?></td>
									</tr>
									<tr>
										<td>Sport de l'équipe:</td>
										<td><?php if(isset($_SESSION['sport']))  echo $_SESSION['sport'];?></td>
									</tr>
									<tr>
										<td>Ville de l'équipe:</td>
										<td><?php if(isset($ville)) echo $ville;?></td>
									</tr>
									<tr>
										<td>Mixité de l'équipe:</td>
										<td><?php if(isset($mixite)) echo $mixite;?></td>
									</tr>
									<tr>
										<td>Description de l'équipe:</td>
										<td><?php if(isset($description)) echo $description;?></td>
									</tr>
										<td>Administrateur de l'équipe:</td>
										<td><?php if(isset($loginAdmin)) echo $loginAdmin;?></a></td>
									</tr>									

								</tbody>
								<tfoot>
									<?php echo validation_errors(); ?>
									<?php echo form_open('Equipe/supprimer_equipe', array()); ?>
									<?php if(isset($msg_erreur)) echo $msg_erreur; ?>

									<input type="submit" value="Supprimer l'équipe" />
									<?php echo form_close(); ?>
								</tfoot>	
							</table>
						</div>
				</div>

		</div>

	</body>