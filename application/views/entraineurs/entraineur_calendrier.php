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

        <a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet_actif">Calendrier</a>

        <a href="<?php echo site_url('Equipe/evenements')?>" class="onglet">Evénéments</a>

        <a href="<?php echo site_url('Equipe/equipe')?>" class="onglet">L'équipe</a>

      </nav>
    </header>

    <h1>Calendrier de l'équipe</h1>

    <div class="infos-page">
      <p>Dans cette page, vous pouvez consulter le calendrier des événements cette équipe.</p>
    </div>


    <div class="contenu-centre">
      <?php

      echo $this->calendar->generate();

      ?>
    </div>

  </body>
