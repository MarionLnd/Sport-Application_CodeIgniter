			<?php  echo link_tag('assets/Css/style2.css'); ?>
			<title>Invitations</title>
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
							<li class="uk-active">
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

			<h1>Mes invitations</h1>

			<div class="form-container">

				<div class="form">
					<h3>Mes invitations</h3>
					<table>

					<thead>
						<th>Equipe</th>
						<th>Login de l'administrateur</th>
						<th>Accepter ?</th>
					</thead>

					<tbody>

						<tr>
							<td></td>
						</tr>

						<tr>
							<td></td>
						</tr>

						<tr>
							<td> <button></button> </td>
						</tr>

					</tbody>

				</table>
				</div>

				<div class="form2">
					<h3>Envoyer une invitation</h3>

					<?php
					echo "<label> A </label>";
					echo '<select name="membres" id="membres">';
						foreach ($nbMembre as $membres) {
							echo "<option>";
							echo $membres->Login;
							echo "</option>";
						}
					echo "</select>";

					echo "<label>Dans l'équipe : </label>";
					echo '<select name="membres" id="membres">';
					foreach ($nomTeam as $nbTeam) {
							echo "<option>";
							echo $nbTeam->NomEquipe;
							echo "</option>";
						}
					echo "</select>";
					?>

				</div>

			</div>

		</body>
