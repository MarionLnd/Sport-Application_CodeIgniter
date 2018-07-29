		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Intégrer une équipe</title>
	</head>

	<body>

		<header>
			<nav class="uk-navbar-container" uk-navbar>

			<a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
				<div>
					<img data-src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="35" uk-img>
				</div>
			</a>

			<div class="uk-navbar-right">
				<ul class="uk-navbar-nav">
					<li>
						<a href="<?php echo site_url('Membre/creation_equipe')?>">Créer une équipe</a>
					</li>
					<li class="uk-active">
						<a href="<?php echo site_url('Membre/integration_equipe')?>">Intégrer une équipe</a>
					</li>
					<li>
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

		<h1>Intégrer une équipe</h1>

		<div class="infos-page">
			<p>Dans cette page, vous pouvez intégrer une équipe en entrant le nom de celle-ci, ainsi que son mot de passe si connu.</p>
		</div>

		<div class="form-container">
			<div class="form">
			<?php echo validation_errors(); ?>
			<?php echo form_open('Membre/integration_equipe', array()); ?>
			<?php if(isset($msg_erreur)) echo $msg_erreur; ?>

				<form class="uk-form-horizontal">
					<fieldset class="uk-fieldset">
						<legend class="uk-legend">Intégrer l'équipe :</legend>

						<div class="uk-margin">
							<label class="uk-form-label">Nom de l'équipe</label>
							<input type="text" name="nomEquipe" value="<?php echo set_value('nomEquipe'); ?>" class="uk-input">
							<?php echo form_error('nomEquipe'); ?>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label">Mot de passe de l'équipe</label>
							<input type="password" name="pwdEquipe" class="uk-input">
							<?php echo form_error('pwdEquipe'); ?>
						</div>

						<button type="submit" name="Entrer" class="uk-button uk-button-primary" value="Rejoindre">Rejoindre</button>

					</fieldset>
				</form>
			</div>

			<!--<div class="form2">
			<?php echo validation_errors(); ?>
			<?php echo form_open('Membre/demande_integration_equipe', array()); ?>
				<form>
					<fieldset>
						<legend>Envoyer une demande d'admission :</legend>

						<label>Nom de l'équipe</label>
						<input type="text" name="nomEquipe" value="<?php echo set_value('nomEquipe'); ?>">
						<?php echo form_error('nomEquipe'); ?>

						<input type="submit" name="Envoyer" class="submit_send_team" value="Envoyer">

					</fieldset>
				</form>
			</div>-->
		</div>

	</body>
</html>
