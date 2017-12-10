		<?php  echo link_tag('assets/Css/style_connexion.css'); ?>
		<title>SportsAndCo</title>
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

					<button type="submit">login</button>
					
					<p class="message">Pas encore membre? <a href="<?php echo site_url('Inscription/index')?>">Créez un compte</a></p>

				<?php echo form_close(); ?>
			</div>

		</div>

	</body>