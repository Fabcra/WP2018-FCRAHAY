<!-- PAGE LISTE DES ARTICLES -->
<?php get_header(); ?>
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
    <!-- image de fond #subheader background url--->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_category('/') ?></h1><!-- nom catégorie-->
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_option('home'); ?>/"><?php _e('Home', 'compact') ?></a></li>
                    <!-- redirection home -->
                    <b>/</b>
                    <li class="active"><?php _e('Blog List', 'compact') ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- content begin SECTION 2 -->
<div id="content">
    <div class="container">
        <div class="row">
            <div id="blog-grid" class="blog-grid">
                <?php while (have_posts()):the_post(); ?>
                    <!-- post begin -->
                    <article class="item col-md-4 col-sm-6 myposts" >
                        <div class="post-media">
                            <!-- ACF IMAGE -->
                            <img alt="<?php the_title(); ?>" src="<?php the_field('article_section2_img') ?>" class="img-responsive"/>


                            <!-- SECTION 3 -->
                            <div class="post-date">
                                <span class="date-day"><?php echo get_the_date('d') ?></span> <!-- DATE -->
                                <span class="date-month"><?php echo get_the_date('M') ?></span>
                            </div>

                        </div>

                        <div class="post-content">
                            <div class="post-title">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5><!-- TITRE -->
                            </div>
                            <div class="post-metadata">
                                    <span class="byline">
                                        <i class="fa fa-user"></i>
                                        <a href="<?php the_permalink(); ?>"><?php the_author() ?></a><!-- AUTEUR -->
                                    </span>
                                <span class="cat-links">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="<?php the_permalink(); ?>"><?php the_category('/'); ?></a>
                                    <!-- CATEGORIE -->
                                </span>


                            </div>
                            <div class="post-entry">
                                <p><?php the_excerpt(); ?></p> <!-- EXTRAIT WYSIWYG -->

                            </div>
                        </div>
                    </article>


                <?php endwhile; ?>
                <!-- post close -->


            </div>


        </div>
        <!-- pagination begin -->
        <div class=" text-center">
            <ul class="pagination">
                <li class="prev">
                    <?php previous_posts_link('<'); ?>
                </li>


                <li class="next">
                    <?php next_posts_link('>'); ?>
                </li>
            </ul>
        </div>
        <!-- pagination close -->

    </div>
</div>
<!-- content close -->

<?php get_footer(); ?>