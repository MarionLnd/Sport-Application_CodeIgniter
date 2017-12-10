    <?php  echo link_tag('assets/Css/style_profil.css'); ?>
    <title>Modifier mon profil</title>
  </head>

  <body>

    <header>
      <nav>

        <a href="<?php echo site_url('Membre/index')?>"><img src="<?php echo base_url()."./assets/Images/logoSport.png"?>" alt="logoSport" title="logoSport" id="LogoAccueil"></a>
        
        <p class="page" >Espace membre</p>

        <a href="<?php echo site_url('Membre/creation_equipe')?>" class="onglet">Créer une équipe</a>

        <a href="<?php echo site_url('Membre/integration_equipe')?>" class="onglet">Intégrer une équipe</a>

        <a href="<?php echo site_url('Membre/invitations')?>" class="onglet">Mes invitations</a>

        <a href="<?php echo site_url('Membre/equipes')?>" class="onglet">Mes équipes</a>

        <a href="<?php echo site_url('Membre/profil')?>" class="onglet_actif">Mon profil</a>
        
      </nav>
    </header>

    <h1>Modifier le profil</h1>

    <div class="container">
      <div class="heading">
        <h1><?php echo $prenom." ".$nom; ?></h1>
      </div>

      <div class="body">
        <h3>Informations à modifier</h3>

        <form class="" role="form">
          <?php echo form_open('Membre/gestion_compte', array());?>

          <img src="<?php if(isset($avatar)) echo base_url()."./assets/Images/uploads/".$avatar;?>" class="avatar" alt="avatar">
          <input type="file" name="avatar" class="avatar">

          <input class="login" name="login" value="<?php echo $login;?>" type="text" placeholder="Nouveau login">

          <input class="" name="password" value="" type="password" placeholder="Nouveau mot de passe">

          <?php echo form_close(); ?>
          <div class="actions">
            <input class="action" value="Sauvegarder les modifications" type="submit">

            <input class="action" value="Recommencer" type="reset">

            <a href="<?php echo site_url('Membre/profil')?>" class="action">Retour à mon profil</a>

            <a href="<?php echo site_url('Membre/supprimer_compte')?>" class="action">Supprimer mon compte</a>
            <br>
          </div>

        </form>
      </div>
    </div>
  </div>