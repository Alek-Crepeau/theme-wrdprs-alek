<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thème wordpress de Alek</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/normalize.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Protest+Riot"
    />
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/style.css" />
  </head>
  <body>
    <div id="entete" class="global">
      <header class="entete__header">
        <h1>Thème wordpress de Alek (h1)</h1>
        <h2>4w4-Conception d'interface <span></span> et développement web</h2>
        <h3>TIM-Collège de maisonneuve</h3>
        <div>
          <button>Lorem</button>
          <button>Lorem</button>
          <button>Lorem</button>
          <button>Lorem</button>
        </div>
      </header>
      <div class="vague">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
            opacity=".25"
            class="shape-fill"
          ></path>
          <path
            d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
            opacity=".5"
            class="shape-fill"
          ></path>
          <path
            d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
    </div>
    <div id="acceuil" class="global">
      <section>
        <h2>acceuil (h2)</h2>
        <div class="cours">
          <?php
            // if (have_posts()) {
            //   while (have_posts()) {
            //     the_post();
            //     the_title('<h3>', '<h4>');
            //     echo wp_trim_words(get_the_content(), 30)
            //   }
            // }

            if (have_posts()) :
              while (have_posts()) : the_post();
                $titre = get_the_title();
                $sigle = substr($titre, 0, 7);
                $duree = substr($titre, -6, 6);
                $titreFinale = trim(substr($titre, 7), $duree);
          ?>
                <div class="carte">
                  <p><?= $sigle ?></p>
                  <h3><?= $titreFinale ?></h3>
                  <p><?= $duree; ?></p>
                  <p><?= wp_trim_words(get_the_content(), 30) ?></p>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </section>
    </div>
    <div id="evenement" class="global diagonale">
      <section>
        <h2 class="h2">évement (h2)</h2>
        <h4>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
          reiciendis dolorem. Quam nulla neque rerum quidem exercitationem
          excepturi ea id praesentium unde. Fugiat, facilis quia esse, dolor
          temporibus maxime nam unde quos blanditiis hic autem, iusto facere
          magni itaque nemo molestias nisi! Autem, corporis. Nesciunt iure iste
          aperiam? Totam, omnis.
        </h4>
      </section>
    </div>
    <div id="galerie" class="global">
      <section>
        <h2>galerie (h2)</h2>
        <img src="images/arbre.jpg" alt="arbre" />
      </section>
      <div class="livre">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
    </div>
    <div id="footer" class="global">
      <footer>
        <h2>footer (h2)</h2>
        <h4>Lorem, ipsum dolor.</h4>
      </footer>
    </div>
  </body>
  <!-- <script>
    let root = document.documentElement;
    let style = getComputedStyle(root);
    let u1 = style.getPropertyValue("--u1");

    let uPlus = Number(u1);

    function changerCouleur() {
      root.style.setProperty("--u1", uPlus);

      u1 = uPlus;

      uPlus--;
    }

    setInterval(changerCouleur, 30);
  </script> -->
</html>
