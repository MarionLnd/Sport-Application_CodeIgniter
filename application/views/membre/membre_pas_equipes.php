    <?php  echo link_tag('assets/Css/style2.css'); ?>
    <title>Equipes</title>
  </head>

  <body>

    <header>
      <nav class="uk-navbar-container" uk-navbar>

      <a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
        <div>
          <img data-src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" width="200" height="40" uk-img>
        </div>
      </a>

      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li>
            <a href="<?php echo site_url('Membre/creation_equipe')?>">Créer une équipe</a>
          </li>
          <li>
            <a href="<?php echo site_url('Membre/integration_equipe')?>">Intégrer une équipe</a>
          </li>
          <li>
            <a href="<?php echo site_url('Membre/invitations')?>">Mes invitations</a>
          </li>
          <li class="uk-active">
            <a href="<?php echo site_url('Membre/equipes')?>">Mes équipes</a>
          </li>
          <li>
            <a href="<?php echo site_url('Membre/profil')?>">Mon profil</a>
          </li>
        </ul>
      </div>
    </nav>
    </header>

    <h1>Mes équipes</h1>

    <div class="infos-page">
        <p>Dans cette page, vous pouvez consulter vos équipes.</p>
    </div>

    <div class="contenu-centre">
      <p>Vous ne faites pas partie d'une équipe pour le moment..</p>

    </div>

  </body>
