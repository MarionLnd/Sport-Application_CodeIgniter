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
      <nav>

        <a href="<?php echo site_url('Equipe/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>

        <p class="page" >Espace equipe</p>

        <a href="<?php echo site_url('Equipe/liste_membre')?>" class="onglet">Liste des membres</a>

        <a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet">Calendrier</a>

        <a href="<?php echo site_url('Equipe/evenements')?>" class="onglet_actif">Evénéments</a>

        <a href="<?php echo site_url('Equipe/equipe')?>" class="onglet">L'équipe</a>

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
