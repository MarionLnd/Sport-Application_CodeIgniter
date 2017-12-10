			<?php  echo link_tag('assets/Css/style2.css'); ?>
			<title>Invitations</title>
		</head>

		<body>

			<header>
				<nav>

					<a href="<?php echo site_url('Membre/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
					<p class="page" >Espace membre</p>
					
					<a href="<?php echo site_url('Membre/creation_equipe')?>" class="onglet">Créer une équipe</a>
					
					<a href="<?php echo site_url('Membre/integration_equipe')?>" class="onglet">Intégrer une équipe</a>
					
					<a href="<?php echo site_url('Membre/invitations')?>" class="onglet_actif">Mes invitations</a>
					
					<a href="<?php echo site_url('Membre/equipes')?>" class="onglet">Mes équipes</a>
					
					<a href="<?php echo site_url('Membre/profil')?>" class="onglet">Mon profil</a>
					
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
