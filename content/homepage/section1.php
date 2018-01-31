<!-- La première section est un ACF image, texte, WYSIWYG -->
<section id="section-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img src="<?php the_field('home_section1_img') ?>" alt="about image" class="img-responsive">
                <!-- ACF IMAGE -->
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="about-box">
                    <h2 class="box-title"><?php the_field('home_section1_txt') ?></h2> <!-- ACF TEXTE -->
                    <div class="tiny-border"></div>
                    <p><?php the_field('home_section1_wys') ?></p> <!-- ACF WYSIWYG -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->