<!-- footer begin -->


<footer class="footer-1 bg-color-1">

    <!-- main footer begin -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <div class="widget-inner">
                            <h3 class="widget-title"><?php _e('Résumé', 'compact') ?></h3>
                            <p><?php _e('Compact is a clean PSD theme suitable for corporate, You can customize it very easy to fit your needs, semper suscipit metus accumsan at. Vestibulum et lacus urna. Nam luctus ac tortor eu', 'compact') ?></p>
                            <div class="social-icons clearfix mynav">
                                <?php
                                $social = array(
                                    'menu' => 'social',
                                    'container' => 'ul',
                                    'menu_class' => 'widget-inner',
                                );
                                wp_nav_menu($social);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <!-- Le menu du bas doit garder la même structure
                        et doit être modifiable dans le back-office
                        mais doit être différent de celui du haut-->
                        <h3 class="widget-title"><?php _e('Catégories', 'compact') ?></h3>
                        <div class="widget-inner">
                            <?php
                            $args = array(
                                'menu' => 'menu footer',
                                'container' => 'ul',
                                'menu_class' => 'widget-inner',
                            );
                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget mywidget">
                        <!-- Un widget de type texte en bas de page -->
                        <div class="widget-inner">
                            <?php dynamic_sidebar('text-bloc-3'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title"><?php _e('Newsletter', 'compact') ?></h3>
                        <div class="widget-inner">
                            <div class="newsletter newsletter-widget">
                                <p><?php _e('Stay informed about our news and events', 'compact') ?></p>
                                <form action="" method="post">
                                    <p><input class="newsletter-email" type="email" name="email"
                                              placeholder="<?php _e('Your email', 'compact') ?>"><i
                                                class="fa fa-envelope-o"></i></p>
                                    <p><input class="newsletter-submit" type="submit"
                                              value="<?php _e('Subscribe', 'compact') ?>"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- main footer close -->

    <!-- sub footer begin -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php _e('Copyright &copy; 2016 Designed by AuThemes. All rights reserved.', 'compact') ?>
                </div>
            </div>
        </div>
    </div>
    <!-- sub footer close -->

</footer>
<!-- footer close -->

</div>

<a id="to-the-top"><i class="fa fa-angle-up"></i></a>

<!-- LOAD JS FILES -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/easing.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.fitvids.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/wow.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>


<!-- Waypoints-->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/sticky.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/tipper.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/compact.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom-index1.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/about.js"></script>


<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri() ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri() ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/revslider-custom.js"></script>

</body>
</html>
