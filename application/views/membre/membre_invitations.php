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

			<div class="container">
				<table>

					<thead>
						<th>Equipe</th>
						<th>Login de l'administrateur</th>
						<th>Accepter ?</th>
					</thead>

					<!--<tbody>
						
						<tr>
							<td></td>
						</tr>

						<tr>
							<td></td>
						</tr>

						<tr>
							<td> <button></button> </td>
						</tr>

					</tbody>-->

				</table>
			</div>
			
		</body>
