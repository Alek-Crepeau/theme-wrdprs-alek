<?php get_header(); ?>
<h1>FRONT-PAGE.php</h1>
<div id="entete" class="global">
  <header class="hero">
    <div class="info">
      <h1>Thème wordpress de Alek (h1)</h1>
      <h1><?= get_bloginfo("name"); ?></h1>
      <h2><?= get_bloginfo("description"); ?></h2>
      <h3>TIM-Collège de Maisonneuve</h3>
    </div>
    <div>
      <button>Lorem</button>
      <button>Lorem</button>
      <button>Lorem</button>
      <button>Lorem</button>
    </div>
  </header>
  <?php get_template_part("gabarit/vague"); ?>
</div>
<div id="acceuil" class="global">
  <section>
    <h2>acceuil (h2)</h2>
    <div class="cours">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          $titre = get_the_title();
      ?>
          <div class="carte">
            <a href="<?= the_permalink(); ?>">
              <h3><?= $titre ?></h3>
              <p><?= wp_trim_words(get_the_content(), 20) ?></p>
            </a>
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
  <?php get_template_part("gabarit/livre"); ?>
</div>
<?= get_footer(); ?>
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