<!-- La première section est le titre, le WYSIWYG et l’image de fond est l’image à la une -->
<section id="" style="background: url(<?php the_post_thumbnail_url(); ?>)"><!-- IMAGE A LA UNE -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php while (have_posts()): the_post(); ?>
                    <div class="about-text-intro text-center">
                        <h2><?php the_title(); ?></h2> <!-- TITRE PAGE -->
                        <p><?php the_content(); ?></p> <!-- WYSIWYG -->
                    </div>
                <?php endwhile; ?>
                <div class="box-intro-video">
                    <div id="overlay-video" class="overlay-video-intro">
                        <!--L’image avec l’icon play est un ACF image-->
                        <img alt="" src="<?php the_field('apropos_iconplay') ?>" class="img-responsive"/> <!-- ACF IMAGE -->

                        <!--La vidéo qui se lance en cliquant sur le play est un ACF oEmbed-->
                        <?php $iframe = get_field('clip');
                        $regex = '/src="(.+?)\?/'; //récupération de l'url
                        preg_match($regex, $iframe, $matches);
                        $src = $matches[1];
                        ?>
                        <a href="<?php echo $src ?>?autoplay=1" class="btn-intro-video"><i class="fa fa-play"></i></a> <!-- $src = résultat du regex ACF OEMBED -->
                    </div>
                    <div id="thevideo" style="display:none">
                        <iframe id="someFrame" width="750" height="422" src="" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->