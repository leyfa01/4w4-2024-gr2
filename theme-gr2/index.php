<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème gr2</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div id="entete" class="global">
      <header class="entete__header">
        <div class="titreAvecImage">
          <div class="titres">
            <h1>Thème du groupe #2</h1>
            <h2>
              4w4 - Conception d'interface <span> et développement Web</span>
            </h2>
            <h3>TIM - Collège de Maisonneuve</h3>
          </div>

          <img src="wp-content/themes/4w4/theme-gr2/images/wordpress-theme.png" alt="" class="imageTitre" />
        </div>

        <button>Événements</button>
      </header>

      <div class="vague">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            style="fill: var(--couleur-arriere-accueil)"
          ></path>
        </svg>
      </div>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil (h2)</h2>
        <div class="section__cours">  
 <?php
  /*
        if (have_posts()){
            while(have_posts()){
                the_post();
                the_title('<p>','</p>');
                $contenu = get_the_content();
                $contenu = wp_trim_words($contenu, 10);
                echo $contenu;
            }
        }
  */
  ?>      
  <?php if(have_posts()):
                    while(have_posts()): the_post();
                    $titre = get_the_title();
                    $positionHeure = strpos($titre, " (");
                    $titreSansHeure = substr($titre, 0, $sigle);
                    $nbrHeure = substr($titre, $sigle);
  // strpos()
  ?>

  <div class= "carte">
  <h5><?php echo $sig ?></h5>
  <p> <?php echo wp_trim_words(get_the_content(), 10);?></p>
  <h5><?php echo $nbrHeure ?></h5>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>   
  </div>

  </section>

    </div>
  
    <div id="galerie" class="global diagonal">
      <section class="accueil__galerie">
        <h2>Galerie</h2>
        <div>
          "Lorem ipsum dolor sit amet, consectetur
          <a href="">adipiscing elit,</a> sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
          dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est
          laborum."
        </div>
        <div class="note">
          <blockquote>
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum."
          </blockquote>
        </div>
      </section>
    </div>
    <div id="evenement" class="global">
      <section class="accueil__evenement">
        <h2>Événement</h2>
        <div>
          "Lorem ipsum dolor sit amet, consectetur
          <a href="">adipiscing elit,</a> sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
          dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est
          laborum."
        </div>
        <div class="note">
          <blockquote>
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum."
          </blockquote>
        </div>
        <a href="" class="bouton">Rejoindre l'évènement</a>
      </section>
      <div class="vague">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            style="fill: var(--couleur-arriere-footer)"
          ></path>
        </svg>
      </div>
    </div>
    <div id="footer" class="global">
      <footer class="accueil__footer">
        <h2>Footer</h2>
        <h3>Liens(h3)</h3>
        <h4>Video(h4)</h4>
        <div class="note">
          <blockquote>
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum."
          </blockquote>
        </div>
      </footer>
    </div>
  </body>
</html>
