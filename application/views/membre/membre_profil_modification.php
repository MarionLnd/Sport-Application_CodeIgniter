    <?php  echo link_tag('assets/Css/style_profil.css'); ?>
    <title>Modifier mon profil</title>
  </head>

  <body>

    <header>
      <nav class="uk-navbar-container" uk-navbar>

          <a class="uk-navbar-item uk-logo" href="<?php echo site_url('Membre/index')?>">
            <div>
              <img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil" uk-img>
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
              <li class="uk-active">
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

    <h1>Modifier le profil</h1>

    <div class="container">
      <div class="heading">
        <h2><?php echo $prenom." ".$nom; ?></h2>
      </div>

      <div class="body">
        <h3>Informations à modifier</h3>

        <form class="" role="form">
          <?php echo form_open('Membre/gestion_compte', array());?>

          <label>Nouvel avatar:</label>
          <img src="<?php if(isset($avatar)) echo base_url()."./assets/Images/uploads/".$avatar;?>" class="avatar" alt="avatar">
          <input type="file" name="avatar" class="avatar">

          <label>Nouveau login:</label>
          <input class="login" name="login" type="text" placeholder="<?php echo $login;?>">

          <label>Nouveau mot de passe:</label>
          <input class="" name="password" value="" type="password" placeholder="Nouveau mot de passe">

          <?php echo form_close(); ?>
          <div class="actions">
            <input class="action" value="Sauvegarder les modifications" type="submit">

            <input class="action" value="Recommencer" type="reset">
            <br/>
          </div>
        </form>
      </div>
      <div>
          <a href="<?php echo site_url('Membre/profil')?>" class="action">
            Retour à mon profil
          </a>

          <a href="<?php echo site_url('Membre/supprimer_compte')?>" class="action">
          Supprimer mon compte
          </a>
        </div>
    </div>
  </div>
