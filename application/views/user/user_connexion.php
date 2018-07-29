<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php echo link_tag('assets/Images/icone.png', 'shortcut icon', 'image/png'); ?>
	<?php  echo link_tag('assets/Css/style_connexion.css'); ?>
	<title>SportsAndCo - Connexion</title>
</head>
<body>
	<header>

		<a href="<?php echo site_url('Accueil/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>

	</header>
	<div class="login-page">

		<div class="form">
			<?php echo validation_errors(); ?>
			<?php echo form_open('Connexion/verification_connexion', array()); ?>
			<?php if(isset($msg_erreur)) echo $msg_erreur; ?>

			<input type="text" name='login' placeholder="Login" value="<?php echo set_value('login'); ?>"/>

			<input type="password" name='password' placeholder="Password"/>

			<button type="submit">Connexion</button>

			<p class="message">Pas encore membre? <a href="<?php echo site_url('Inscription/index')?>">Créez un compte</a></p>

			<?php echo form_close(); ?>
		</div>

	</div>

</body>
