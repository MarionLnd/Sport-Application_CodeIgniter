		<?php  echo link_tag('assets/Css/style_profil.css'); ?>
		<title>Mon profil</title>
	</head>

	<body>

		<header>
			<nav>

				<a href="<?php echo site_url('Membre/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
				
				<p class="page" >Espace membre</p>

				<a href="<?php echo site_url('Membre/creation_equipe')?>" class="onglet">Créer une équipe</a>

				<a href="<?php echo site_url('Membre/integration_equipe')?>" class="onglet">Intégrer une équipe</a>

				<a href="<?php echo site_url('Membre/invitations')?>" class="onglet">Mes invitations</a>

				<a href="<?php echo site_url('Membre/equipes')?>" class="onglet">Mes équipes</a>

				<a href="<?php echo site_url('Membre/profil')?>" class="onglet_actif">Mon profil</a>
				
			</nav>
		</header>

		<h1>Mon profil</h1>
		
		<div class="container">
				<div class="heading">
					<h2 class="nom_membre"><?php if(isset($prenom)) echo $prenom." ".$nom;?></h2>
				</div>
				<div class="body">
						<div class="avatar" align="center"> <img alt="<?php if(isset($avatar)) echo $avatar;?>" src="<?php if(isset($avatar)) echo base_url()."./assets/Images/uploads/".$avatar;?>" class="avatar">
						</div>
						<div class="tableau"> 
							<table class="tableau-info">
								<tbody>
									<tr>
										<td>Login:</td>
										<td><?php if(isset($_SESSION['login'])) echo $_SESSION['login'];?></td>
									</tr>
									<tr>
										<td>Prénom:</td>
										<td><?php if(isset($prenom)) echo $prenom;?></td>
									</tr>
									<tr>
										<td>Nom:</td>
										<td><?php if(isset($nom))  echo $nom;?></td>
									</tr>
										<td>Email</td>
										<td><?php if(isset($mail)) echo $mail;?></a></td>
									</tr>									

								</tbody>
							</table>
						</div>
						<div class="actions">
							<a href="<?php echo site_url('Membre/gestion_compte')?>" class="action">Modifier mon profil</a>

							<a href="<?php echo site_url('Membre/deconnexion')?>" class="action">Déconnexion</a>
							<br>
						</div>
				</div>
			</div>

	</body>