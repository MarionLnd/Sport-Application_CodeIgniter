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

		<h1>Les membres de l'équipe</h1>

		<div class="infos-page">
			<p>Dans cette page, vous pouvez consulter les membres de cette équipe.</p>
		</div>

		<div class="contenu-centre" style="overflow-x:auto">
			<table class="uk-table uk-table-striped">

				<thead>
					<th>Login du membre</th>
					<th>Prénom du membre</th>
					<th>Entraîneur</th>
					<th>Administrateur d'une équipe quelconque</th>
				</thead>

				<tbody>
					<?php
				if(isset($membres)){
					foreach ($membres as $valeur) {
						echo '<tr>';

						echo '<td>';
						echo $valeur->LoginMembre;
						echo '</td>';

						echo '<td>';
						echo $valeur->Prenom;
						echo '</td>';

						// A REVOOOOOIR !
						echo '<td>';
						if(isset($isEntraineur)){
							if($isEntraineur){
								echo 'Oui';
							} else {
								echo 'Non';
							}
						}
						echo '</td>';

						echo '<td>';
						if(isset($isAdmin)){
							if($isAdmin){
								echo 'Oui'.$isAdmin;
							} else {
								echo 'Non'.$isAdmin;
							}
						}
						echo '</td>';

						echo '</tr>';
					}
				}
				?>
				</tbody>
			</table>

		</div>

	</body>
