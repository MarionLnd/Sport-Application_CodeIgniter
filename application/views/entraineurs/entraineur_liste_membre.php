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

        <a href="<?php echo site_url('Equipe/liste_membre')?>" class="onglet_actif">Liste des membres</a>

        <a href="<?php echo site_url('Equipe/calendrier')?>" class="onglet">Calendrier</a>

        <a href="<?php echo site_url('Equipe/evenements')?>" class="onglet">Evénéments</a>

        <a href="<?php echo site_url('Equipe/equipe')?>" class="onglet">L'équipe</a>

      </nav>
    </header>

    <h1>Les membres de l'équipe</h1>

    <div class="infos-page">
      <p>Dans cette page, vous pouvez consulter les membres de cette équipe.</p>
    </div>

    <div class="contenu-centre" style="overflow-x:auto">
      <table>

        <thead>
          <th>Login du membre</th>

          <th>Prénom du membre</th>

          <th>Entraîneur</th>

          <th>Administrateur d'une équipe quelconque</th>
        </thead>

        <tbody>
          <?php
        if(isset($membres)){
          foreach ($membres as $valeur) {
            echo '<tr>';

            echo '<td>';
            echo $valeur->LoginMembre;
            echo '</td>';

            echo '<td>';
            echo $valeur->Prenom;
            echo '</td>';

            echo '<td>';
            if(true){

            } else {

            }
            echo '</td>';

            echo '<td>';
            if(false){

            } else {

            }
            echo '</td>';

            echo '</tr>';
          }
        }
        ?>
        </tbody>
      </table>


    </div>

  </body>
