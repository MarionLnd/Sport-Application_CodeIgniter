<?php  echo link_tag('assets/Css/style2.css'); ?>
<title>Créer une équipe</title>
</head>

<body>

	<header>
		<nav class="uk-navbar-container" uk-navbar>
				<div class="uk-navbar-left">
					<a class="uk-navbar-item uk-logo uk-padding-large uk-padding-remove-horizontal" href="<?php echo site_url('Membre/index')?>">
						<img data-src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="40" uk-img>
					</a>
				</div>

			<div class="uk-navbar-right">
				<ul class="uk-navbar-nav">
					<li class="uk-active">
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
					<li>
						<a href="<?php echo site_url('Membre/profil')?>">Mon profil</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<h1>Créer une équipe</h1>

	<div class="infos-page">
		<p>Dans cette page, vous pouvez créer une équipe par le biais d'un formulaire de création.</p>
	</div>

	<div class="form-container">
		<div class="form">

			<?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>

			<?php echo form_open('Membre/creation_equipe', array()); ?>

			<form>
				<fieldset class="uk-fieldset">
					<legend class="uk-legend uk-text-center">Création de l'équipe</legend>

					<div class="uk-margin">
						<label class="uk-form-label">Nom de l'équipe</label>
						<input type="text" name="nomEquipe" placeholder="Nom de l'équipe" class="uk-input">
						<?php echo form_error('nomEquipe'); ?>
					</div>

					<div class="uk-margin">
						<label class="uk-form-label">Mot de passe de l'équipe</label>
						<input type="password" name="pwdEquipe" placeholder="Mot de passe de l'équipe" class="uk-input">
						<?php echo form_error('pwdEquipe'); ?>
					</div>

					<div class="uk-margin">
						<label class="uk-form-label">Logo de l'équipe</label>
						<div class="uk-form-controls">
							<select name="logo" id="logo" value="<?php echo set_value('logo'); ?>" class="uk-select">
								<option value="Feu">Feu</option>
								<option value="Eau">Eau</option>
								<option value="Air">Air</option>
							</select>
						</div>
					</div>

					<div class="uk-margin">
						<label class="uk-form-label">Sport de l'équipe</label>
						<div class="uk-form-controls">
							<select name="sport" id="sport" value="<?php echo set_value('sport'); ?>" class="uk-select">

								<option value="athlétisme">Athlétisme</option>
								<option value="badminton">Badminton</option>
								<option value="baseball">Baseball</option>
								<option value="basket">Basket-ball</option>
								<option value="boxe">Boxe</option>
								<option value="danse">Danse</option>
								<option value="equitation">Equitation</option>
								<option value="escalade">Escalade</option>
								<option value="escrime">Escrime</option>
								<option value="american-football">Football Americain</option>
								<option value="soccer">Football</option>
								<option value="golf">Golf</option>
								<option value="gymnastique">Gymnastique</option>
								<option value="handball">Handball</option>
								<option value="natation">Natation</option>
								<option value="rugby">Rugby</option>
								<option value="ski">Ski</option>
								<option value="tennis">Tennis</option>
								<option value="tennis-de-table">Tennis de table</option>
								<option value="volley">Volley-ball</option>

							</select>
						</div>

					</div>

					<div class="uk-margin">
						<label class="uk-form-label">Ville</label>
						<input type="text" name="villeEquipe" placeholder="Ville de l'équipe" value="<?php echo set_value('villeEquipe'); ?>" class="uk-input">
					</div>

					<div class="uk-margin">
						<label class="uk-form-label">Mixité</label>
						<div class="uk-form-controls">
							<input type="radio" name="mixite" value="Oui" class="mixite" class="uk-radio">Oui</input>

							<input type="radio" name="mixite" value="Non" class="mixite" class="uk-radio">Non</input>
						</div>

					</div>

					<div class="uk-margin">
						<label class="uk-form-label">Description</label>
						<input type="textarea" name="description" placeholder="Description" rows="10" cols="50" class="uk-textarea">
					</div>

					<button type="submit" name="Entrer" class="uk-button uk-button-primary">Valider</button>

				</fieldset>
			</form>

		</div>
	</div>

</body>
