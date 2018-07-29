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
		<h1>Informations de l'équipe</h1>

		<div class="uk-background-secondary">

			<div class="avatar" align="center"> <img alt="<?php if(isset($avatar)) echo $avatar;?>" data-src="<?php if(isset($avatar)) echo base_url()."./assets/Images/uploads/".$avatar;?>" class="avatar" uk-img>
			</div>


			<table class="uk-table uk-table-striped">

				<thead>
					<th>Nom de l'équipe</th>
					<th>Logo de l'équipe</th>
					<th>Sport de l'équipe</th>
					<th>Ville</th>
					<th>Mixité</th>
					<th>Description</th>
					<th>Administrateur de l'équipe</th>
				</thead>

				<tbody>
					<tr>
						<td><?php if(isset($_SESSION['nomEquipe'])) echo $_SESSION['nomEquipe'];?></td>

						<td><?php if(isset($logo)) echo $logo;?></td>

						<td><?php if(isset($sport))  echo $sport;?></td>

						<td><?php if(isset($ville)) echo $ville;?></td>

						<td><?php if(isset($mixite)) echo $mixite;?></td>

						<td><?php if(isset($description)) echo $description;?></td>

						<td><?php if(isset($loginAdmin)) echo $loginAdmin;?></td>
					</tr>
				</tbody>

			</table>

								<!--<?php echo validation_errors(); ?>
								<?php echo form_open('Equipe/supprimer_equipe', array()); ?>
								<?php if(isset($msg_erreur)) echo $msg_erreur; ?>

								<input type="submit" value="Supprimer l'équipe" />
								<?php echo form_close(); ?>-->
		</div>
	</div>



</body>
