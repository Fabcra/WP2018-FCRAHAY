<?php get_header(); ?>

    <!-- page ACCUEIL -->

    <!-- SLIDER  -->
    <div id="slider">
        <?php get_template_part('content/homepage/slider') ?>
    </div>
    <!-- slider close -->

    <div class="clearfix"></div>

    <!-- content begin  -->
    <div id="content" class="no-padding">

        <?php get_template_part('content/homepage/section1') ?>

        <?php get_template_part('content/homepage/section2'); ?>

        

    </div>
    <!-- content close -->

<?php get_footer(); ?>
