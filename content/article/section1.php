<!-- La première section est le titre et le fond est une image à la une. -->
<section style="background: url(<?php the_post_thumbnail_url(); ?>)" data-speed="8" data-type="background"
         class="padding-top-bottom subheader"><!-- IMAGE A LA UNE -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title() ?></h1>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_option('home'); ?>/"><?php _e('Home', 'compact') ?></a></li>
                    <b>/</b>
                    <li class="active"><?php the_title(); ?></li><!-- TITRE PAGE -->
                </ul>
            </div>
        </div>
    </div>
</section>