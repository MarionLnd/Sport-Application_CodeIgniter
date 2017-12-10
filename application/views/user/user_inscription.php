		<?php  echo link_tag('assets/Css/style_inscription.css'); ?>
		<title>SportsAndCo</title>
	</head>
	<body>

		<header>
			<div id="Logo">
				<a href="<?php echo site_url('Accueil/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
			</div>
			<nav>
				<p>INSCRIPTION</p>
			</nav>
		</header>

		<?php
			if (isset($message_erreur)) {
				echo $message_erreur;
			}
		?>
		<div class="form">
			<?php echo validation_errors('<span class="error">', '</span>'); ?>
			<?php echo form_open_multipart('Inscription/validation_inscription', array()); ?>

				<input type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo set_value('nom'); ?>"/>
				<!--<?php echo form_error('nom'); ?>-->

				<input type="text" name="prenom" id="prenom" placeholder="Prénom" value="<?php echo set_value('prenom'); ?>"/>
				<!--<?php echo form_error('prenom'); ?>-->

				<input type="text" name="login" id="login" placeholder="Login" value="<?php echo set_value('login'); ?>"/>
				<!--<?php echo form_error('login'); ?>-->

				<input type="email" name="mail" id="mail" placeholder="Mail" value="<?php echo set_value('mail'); ?>"/>
				<!--<?php echo form_error('mail'); ?>-->

				<input type="password" name="password" id="password" placeholder="Mot de passe"/>
				<!--<?php echo form_error('password'); ?>-->

				<label>Avatar :</label>
				<input type="file" name="avatar">

				<button type="submit">Envoyer</button>

			<?php echo form_close(); ?>
		</div>
	</body>
</html>
