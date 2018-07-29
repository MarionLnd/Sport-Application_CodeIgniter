		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Equipes</title>
	</head>

	<body>

		<header>
			<nav class="uk-navbar-container" uk-navbar>

			<a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
				<div>
					<img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" uk-img>
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
					<li class="uk-active">
						<a href="<?php echo site_url('Membre/equipes')?>">Mes équipes</a>
					</li>
					<li>
						<a href="<?php echo site_url('Membre/profil')?>">Mon profil</a>
					</li>
				</ul>
			</div>
		</nav>
		</header>

		<h1>Mes équipes</h1>

		<div class="infos-page">
				<p>Dans cette page, vous pouvez consulter vos équipes.</p>
		</div>

		<div class="contenu-centre" style="overflow-x:auto">
			<table>

				<thead>

					<th>Nom de l'équipe</th>

					<th>Sport de l'équipe</th>

					<th>Ville de l'équipe</th>

					<th>Administrateur de l'équipe</th>

				</thead>

				<tbody>
					<?php

					if(isset($data)){
						foreach ($data as $dataEquipe) {
							echo '<tr>';
							echo '<td>';
							echo '<a href="'.site_url('Equipe/accueil/'.$nomEquipe).'" class="team_actuelle">'.$nomEquipe.'</a>';
							echo '</td>';
							echo '<td>';
							echo $dataEquipe['Sport'];
							echo '</td>';
							echo '<td>';
							echo $dataEquipe['Ville'];
							echo '</td>';
							echo '<td>';
							echo $dataEquipe['LoginAdmin'];
							echo '</td>';
							echo '</tr>';
						}
					}
					?>
				</tbody>
			</table>

		</div>

	</body>
