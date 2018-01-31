<!-- la troisième section est un ACF texte pour le titre et le reste est un ACF répéteur composé d’une
           image, d’un nom (texte) et de la fonction (texte) -->
<section id="section-team" class="bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2><?php the_field('apropos_section3_titre') ?></h2> <!-- ACF TEXTE -->
                    <div class="tiny-border"></div>
                </div>
            </div>
            <?php while (have_rows('apropos_section3_repeater')):the_row(); ?> <!-- ACF REPETITEUR -->
                <div class="col-md-3">
                    <div class="team-box">
                        <div class="team-inner">
                            <img src="<?php the_sub_field('apropos_section3_img') ?>" alt="" class="img-circle"><!-- ACF IMAGE -->
                            <div class="mask"></div>
                        </div>
                        <h6><?php the_sub_field('apropos_section3_txt') ?></h6>
                        <div class="subtext"><?php the_sub_field('apropos_section3_fonction') ?></div> <!-- ACF TEXTE -->
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<!-- section close -->