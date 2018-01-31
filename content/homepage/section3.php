<!-- La troisième section est un ACF répéteur composé d’une icon (texte simple), un titre (texte simple),
      WYSIWYG -->
<section>
    <!-- Container Begin -->
    <div class="container">
        <div class="row">
            <?php while (have_rows('home_section3_repeater')):
            the_row(); ?><!-- ACF REPETITEUR -->
            <div class="col-md-4">
                <div class="service-box service-style2">
                    <img src="<?php the_sub_field('home_section3_icon') ?>" alt="" class="img-responsive">
                    <!-- ICON -->
                    <div class="service-content">
                        <h3><?php the_sub_field('home_section3_titre') ?></h3> <!-- TITRE -->
                        <p><?php the_sub_field('home_section3_wys') ?></p><!-- WYSIWYG -->
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>
    </div>
    <!-- Container End -->
</section>
<!-- section close -->