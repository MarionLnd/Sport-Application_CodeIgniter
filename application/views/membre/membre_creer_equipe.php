		<?php  echo link_tag('assets/Css/style2.css'); ?>
		<title>Créer une équipe</title>
	</head>

	<body>

		<header>
			<nav>

			<a href="<?php echo site_url('Membre/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
				<p class="page" >Espace membre</p>
				
				<a href="<?php echo site_url('Membre/creation_equipe')?>" class="onglet_actif">Créer une équipe</a>
				
				<a href="<?php echo site_url('Membre/integration_equipe')?>" class="onglet">Intégrer une équipe</a>
				
				<a href="<?php echo site_url('Membre/invitations')?>" class="onglet">Mes invitations</a>
				
				<a href="<?php echo site_url('Membre/equipes')?>" class="onglet">Mes équipes</a>

				<a href="<?php echo site_url('Membre/profil')?>" class="onglet">Mon profil</a>

			</nav>
		</header>

		<h1>Créer une équipe</h1>
		
		<div class="form-container">
			<div class="form">
			<?php echo validation_errors(); ?>
			<?php echo form_open('Membre/creation_equipe', array()); ?>

				<form>
					<fieldset>
						<legend>Création de l'équipe :</legend>

						<label>Nom de l'équipe</label>
						<input type="text" name="nomEquipe" placeholder="Nom de l'équipe" value="<?php echo set_value('nomEquipe'); ?>">
						<?php echo form_error('nomEquipe'); ?>


						<label>Mot de passe de l'équipe</label>
						<input type="password" name="pwdEquipe" placeholder="Mot de passe de l'équipe">
						<?php echo form_error('pwdEquipe'); ?>


						<label>Logo de l'équipe</label>
						<select name="logo" id="logo" value="<?php echo set_value('logo'); ?>">
							<option value="Feu">Feu</option>
							<option value="Eau">Eau</option>
							<option value="Air">Air</option>
						</select>


						<label>Sport de l'équipe</label>
						<select name="sport" id="sport" value="<?php echo set_value('sport'); ?>">

							<option value="athlétisme">Athlétisme</option>

							<option value="badminton">Badminton</option>

							<option value="baseball">Baseball</option>

							<option value="basket">Basket-ball</option>

							<option value="boxe">Boxe</option>

							<option value="danse">Danse</option>

							<option value="equitation">Equitation</option>

							<option value="escalade">Escalade</option>

							<option value="escrime">Escrime</option>

							<option value="american-football">FootballAmericain</option>

							<option value="soccer">Football</option>

							<option value="golf">Golf</option>

							<option value="gymnastique">Gymnastique</option>

							<option value="handball">Handball</option>

							<option value="natation">Natation</option>

							<option value="rugby">Rugby</option>

							<option value="ski">Ski</option>

							<option value="tennis">Tennis</option>

							<option value="tennis-de-table">Tennis De Table</option>

							<option value="volley">Volley-ball</option>

						</select>


						<label>Ville</label>
						<input type="text" name="villeEquipe" placeholder="Ville de l'équipe" value="<?php echo set_value('villeEquipe'); ?>">


						<label>Mixité</label>
						<input type="radio" name="mixite" value="Oui" class="mixite">Oui</input>

						<input type="radio" name="mixite" value="Non" class="mixite">Non</input>


						<label>Description</label>
						<input type="textarea" name="description" placeholder="Description" rows="10" cols="50">


						<input type="submit" name="Entrer" class="submit_pwd_team" value="Valider">

					</fieldset>
				</form>

			</div>
		</div>
		
	</body>