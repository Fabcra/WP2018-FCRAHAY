<!-- la deuxième section est un ACF répéteur composé d’un titre et d’un texte -->
<section id="section-about" class="margin-top-80">
    <div class="container">
        <div class="row">
            <?php while (have_rows('apropos_section2_repeater')):the_row() ?> <!-- ACF REPETITEUR -->
                <div class="col-md-4">

                    <h5><?php the_sub_field('apropos_section2_titre') ?></h5> <!-- ACF TEXTE -->
                    <p><?php the_sub_field('apropos_section2_txt') ?></p><!-- ACF TEXTE -->
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- section close -->