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

      <a href="<?php echo site_url('Equipe/equipe');?>" class="onglet_actif">L'équipe</a>

    </nav>
  </header>

  <h1>Informations de l'équipe</h1>

  <div class="contenu-centre" style="overflow-x:auto">

    <div class="avatar" align="center"> <img alt="<?php if(isset($avatar)) echo $avatar;?>" src="<?php if(isset($avatar)) echo base_url()."./assets/Images/uploads/".$avatar;?>" class="avatar">
    </div>


    <table class="uk-table uk-table-striped">

      <thead>
        <th>Nom de l'équipe</th>

        <th>Logo de l'équipe</th>

        <th>Sport de l'équipe</th>

        <th>Ville</th>

        <th>Mixité</th>

        <th>Description</th>

        <th>Administrateur de l'équipe</th>
      </thead>

      <tbody>
        <tr>
          <td><?php if(isset($_SESSION['nomEquipe'])) echo $_SESSION['nomEquipe'];?></td>
          <td><?php if(isset($logo)) echo $logo;?></td>
          <td><?php if(isset($sport))  echo $sport;?></td>
          <td><?php if(isset($ville)) echo $ville;?></td>
          <td><?php if(isset($mixite)) echo $mixite;?></td>
          <td><?php if(isset($description)) echo $description;?></td>
          <td><?php if(isset($loginAdmin)) echo $loginAdmin;?></a></td>
        </tr>
      </tbody>

    </table>

              <!--<?php echo validation_errors(); ?>
              <?php echo form_open('Equipe/supprimer_equipe', array()); ?>
              <?php if(isset($msg_erreur)) echo $msg_erreur; ?>

              <input type="submit" value="Supprimer l'équipe" />
              <?php echo form_close(); ?>-->
  </div>

</body>
