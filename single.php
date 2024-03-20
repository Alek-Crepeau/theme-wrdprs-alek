<?php get_header(); ?>
<div id="entete" class="global">
    <header class="hero">
        <div class="info">
            <h1><?= get_bloginfo("name"); ?></h1>
            <h2><?= get_bloginfo("description"); ?></h2>
            <h3>TIM-Collège de Maisonneuve</h3>
        </div>
        <div>
            <button>Lorem</button>
            <button>Lorem</button>
        </div>
    </header>
    <?php get_template_part("gabarit/vague") ?>
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

            if (have_posts()) : the_post();
            ?>
                <div class="post">
                    <h3><?= the_title(); ?></h3>
                    <p><?= the_content(); ?></p>
                </div>
            <?php endif; ?>
        </div>
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