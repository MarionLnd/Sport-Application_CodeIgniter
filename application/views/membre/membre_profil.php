		<!--<?php  echo link_tag('assets/Css/style_profil.css'); ?>-->
		<title>Mon profil</title>
	</head>

	<body>

		<header>
			<nav class="uk-navbar-container" uk-navbar>

			<a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
				<div>
					<img data-src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="40" uk-img>
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
					<li>
						<a href="<?php echo site_url('Membre/equipes')?>">Mes équipes</a>
					</li>
					<li class="uk-active">
						<a href="<?php echo site_url('Membre/profil')?>">Mon profil</a>
					</li>
				</ul>
			</div>
		</nav>
		</header>

<div class="uk-container">
	<h1>Mon profil</h1>

		<div class="infos-page">
			<p>Dans cette page, vous pouvez consulter votre profil.</p>
		</div>

	<div class="uk-container">
		<div class="uk-card uk-card-default uk-card-small">
				<div class="uk-card-header">
					<h2 class="nom_membre"><?php if(isset($prenom)) echo $prenom." ".$nom;?></h2>
					<div class="avatar" align="center"> <img alt="<?php if(isset($avatar)) echo $avatar;?>" src="<?php if(isset($avatar)) echo base_url()."./assets/Images/uploads/".$avatar;?>" class="avatar">
						</div>
				</div>
				<div class="uk-card-body">

						<div class="uk-margin">
							Login : <?php if(isset($_SESSION['login'])) echo $_SESSION['login'];?>
						</div>
						<div class="uk-margin">
							Prénom : <?php if(isset($prenom)) echo $prenom;?>
						</div>
						<div class="uk-margin">
							Nom : <?php if(isset($nom))  echo $nom;?>
						</div>
						<div class="uk-margin">
							Email : <?php if(isset($mail)) echo $mail;?>
						</div>

					</div>
					<div class="uk-card-footer">
							<a href="<?php echo site_url('Membre/gestion_compte')?>" class="action">Modifier mon profil</a>

							<a href="<?php echo site_url('Membre/deconnexion')?>" class="action">Déconnexion</a>
							<br>
					</div>
				</div>
			</div>
</div>


	</body>
