<!-- La première section est le titre, le WYSIWYG. -->
<section id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php while (have_posts()):the_post() ?>
                    <div class="intro-text text-center">
                        <h2><?php the_title(); ?></h2> <!-- TITRE PAGE -->
                        <p><?php the_content(); ?></p> <!-- WYSIWYG -->
                    </div>
                <?php endwhile; ?>
                <div class="contactform">
                    <!-- La deuxième section est un ACF WYSIWYG et vous y mettez le contact formulaire -->
                    <?php the_field('contact_section2_form') ?><!-- SECTION 2 ACF WYSIWYG -->

                </div>

            </div>
        </div>
    </div>
</section>
<!-- section close -->
