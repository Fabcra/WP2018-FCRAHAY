<!-- La deuxième section est la boucle while avec les derniers articles. -->
<section id="section-project" class="no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-projects clearfix">
                    <div class="latest-projects-intro">
                        <h2 class="box-title"><?php _e('Derniers articles', 'compact') ?></h2>
                        <div class="tiny-border-light"></div>
                        <p><?php _e('Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non pretium
                                    turpis', 'compact') ?></p>
                    </div>

                    <div class="latest-projects-wrapper">
                        <div id="latest-projects-items" class="latest-projects-items">

                            <!-- DERNIERS ARTICLES -->
                            <?php $art = new WP_Query(array("posts_per_page" => "6")); ?>
                            <?php while ($art->have_posts()):
                                $art->the_post() ?>
                                <div class="item">
                                    <img src="<?php the_field('article_section2_img') ?>" alt=""
                                         class="img-responsive">
                                    <div class="project-details">
                                        <p class="folio-title"><a
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </p>

                                        <p class="folio-cate"><i class="fa fa-tag"></i><a
                                                href="<?php the_permalink(); ?>"><?php the_category('/'); ?></a>
                                        </p>

                                        <div class="folio-buttons">
                                            <a href="<?php the_field('article_section2_img') ?>"
                                               title="<?php the_title() ?>"
                                               class="folio"><i class="fa fa-search"></i></a>
                                            <a href="<?php the_permalink() ?>"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->