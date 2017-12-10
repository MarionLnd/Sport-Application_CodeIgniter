		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Equipes</title>
	</head>

	<body>

		<header>
			<nav>

				<a href="<?php echo site_url('Membre/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
				
				<p class="page" >Espace membre</p>
				
				<a href="<?php echo site_url('Membre/creation_equipe')?>" class="onglet">Créer une équipe</a>
				
				<a href="<?php echo site_url('Membre/integration_equipe')?>" class="onglet">Intégrer une équipe</a>
				
				<a href="<?php echo site_url('Membre/invitations')?>" class="onglet">Mes invitations</a>
				
				<a href="<?php echo site_url('Membre/equipes')?>" class="onglet_actif">Mes équipes</a>

				<a href="<?php echo site_url('Membre/profil')?>" class="onglet">Mon profil</a>
				
			</nav>
		</header>

		<h1>Mes équipes</h1>

		<div class="container">
			<table>

				<thead>

					<th>Nom de l'équipe</th>
					
					<!--
					<th>Sport de l'équipe</th>


					<th>Ville de l'équipe</th>


					<th>Administrateur de l'équipe</th>
					-->
				</thead>

				<tbody>
					<?php 

					if(isset($nbEquipes)){
						foreach ($nbEquipes as $nomEquipe) {
							echo '<tr>';
							echo '<td>';
							echo '<a href="'.site_url('Equipe/accueil/'.$nomEquipe->NomEquipe).'">'.$nomEquipe->NomEquipe.'</a>';
							echo '</td>';
							/*echo '<td>';
							echo $nomEquipe->Sport;
							echo '</td>';
							echo '<td>';
							echo $nomEquipe->Ville;
							echo '</td>';
							echo '<td>';
							echo $nomEquipe->LoginAdmin;
							echo '</td>';
							echo '</tr>';*/
						}
					}
					?>
				</tbody>
			</table>

		</div>
		
	</body>
