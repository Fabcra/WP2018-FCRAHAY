<!-- La deuxième section est un ACF image. -->
<article>
    <div class="post-media">
        <img src="<?php the_field('article_section2_img') ?>" class="img-responsive"> <!-- ACF IMAGE -->
    </div>
    <!-- La troisième section est composée du titre, date, auteur, catégorie et WYSIWYG -->
    <?php while (have_posts()):the_post() ?>
        <div class="post-content">
            <div class="post-title">
                <h1><?php the_title() ?></h1> <!-- TITRE POST -->
            </div>

            <div class="post-metadata">
                                        <span class="posted-on">
                                            <i class="fa fa-clock-o"></i>
                                            <?php echo get_the_date(); ?><!-- DATE POST -->
                                        </span>
                <span class="byline">
                                            <i class="fa fa-user"></i>
                                            <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a><!-- AUTEUR POST -->
                                        </span>
                <span class="cat-links">
                                            <i class="fa fa-folder-open"></i>
                                            <a href="<?php the_permalink(); ?>"><?php the_category('/') ?></a><!-- CATEGORIE POST -->
                                        </span>
            </div>
            <div class="hr"></div>

            <div class="post-entry">
                <p><?php the_content() ?></p><!-- WYSIWYG -->
            </div>

            <div class="clearfix"></div>
        </div>
    <?php endwhile; ?>
</article>
<!-- post close -->