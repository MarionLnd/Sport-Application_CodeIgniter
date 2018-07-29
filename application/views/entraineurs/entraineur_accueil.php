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

        <a href="<?php echo site_url('Equipe/evenements')?>" class="onglet">Evénéments</a>

        <a href="<?php echo site_url('Equipe/equipe');?>" class="onglet">L'équipe</a>

      </nav>
    </header>



    <div class="container">
      <div>
        <h3>Bienvenue <?php if(isset($login)) echo $login; ?> dans l'équipe <?php echo $nomEquipe;?></h3>

        <p>Vous vous trouvez à présent sur l'écran d'accueil de votre équipe : vous pouvez consulter les informations concernant votre équipe, le calendrier de celle-ci, les différents évènements de celle-ci et enfin la liste des membres la composant.</p>

        <p class="date"><?php echo date("F j Y, g:i a");?></p>

      </div>
    </div>

  </body>
