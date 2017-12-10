		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Intégrer une équipe</title>
	</head>

	<body>

		<header>
			<nav>

			<a href="<?php echo site_url('Membre/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
				<p class="page" >Espace membre</p>

				<a href="<?php echo site_url('Membre/creation_equipe')?>" class="onglet">Créer une équipe</a>

				<a href="<?php echo site_url('Membre/integration_equipe')?>" class="onglet_actif">Intégrer une équipe</a>

				<a href="<?php echo site_url('Membre/invitations')?>" class="onglet">Mes invitations</a>

				<a href="<?php echo site_url('Membre/equipes')?>" class="onglet">Mes équipes</a>

				<a href="<?php echo site_url('Membre/profil')?>" class="onglet">Mon profil</a>
				
			</nav>
		</header>

		<h1>Intégrer une équipe</h1>
		
		<div class="form-container">
			<div class="form">
			<?php echo validation_errors(); ?>
			<?php echo form_open('Membre/integration_equipe', array()); ?>
			<?php if(isset($msg_erreur)) echo $msg_erreur; ?>

				<form>
					<fieldset>
						<legend>Intégrer l'équipe :</legend>

						<label>Nom de l'équipe</label>
						<input type="text" name="nomEquipe" value="<?php echo set_value('nomEquipe'); ?>">
						<?php echo form_error('nomEquipe'); ?>

						<label>Mot de passe de l'équipe</label>
						<input type="password" name="pwdEquipe">
						<?php echo form_error('pwdEquipe'); ?>

						<input type="submit" name="Entrer" class="submit_pwd_team" value="Rejoindre">

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
