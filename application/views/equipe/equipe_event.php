<?php  echo link_tag('assets/Css/style_equipe.css'); ?>
	<?php
		echo "<style>";
		echo "html{";
		echo "background-image:url(".base_url()."./assets/Images/img_team/team_".$sport.".jpg".");";
		echo "}";
		echo "</style>";
	?>

		<title>Accueil Equipe</title>
	</head>

	<body>

		<header>
			<nav class="uk-navbar-container" uk-navbar>

        <a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
          <div>
            <img data-src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="40" uk-img>
            <div class="uk-navbar-subtitle">Espace equipe</div>
          </div>
        </a>

        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <li>
              <a href="<?php echo site_url('Equipe/liste_membre')?>" class="onglet_actif">Liste des membres</a>
            </li>
            <li>
              <a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet">Calendrier</a>
            </li>
            <li>
              <a href="<?php echo site_url('Equipe/equipe')?>" class="onglet">L'équipe</a>
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

		<h1>Ajouter un événement</h1>

		<div class="infos-page">
			<p>Dans cette page, vous pouvez ajouter des événements de type entraînements ou compétitions de l'équipe. Vous pourrez ensuite les consulter à travers le <a href="<?php echo site_url('Equipe/calendrier')?>">calendrier</a>.</p>
		</div>

		<div class="contenu-centre">
			<form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <input type="submit" value="Submit">
  </form>
		</div>

	</body>
