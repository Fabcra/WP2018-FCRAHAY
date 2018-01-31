<!-- La partie de droite est composée d’un widget et d’un menu qui reprend les catégories -->
<div class="main-sidebar  mywidget">
    <!-- WIDGET -->
    <aside class="widget widget_text">
        <div class="textwidget">
            <p>
                <?php dynamic_sidebar('text-bloc-1') ?>
            </p>
        </div>
    </aside>

    <!-- MENU CATEGORIES -->
    <aside class="widget widget_categories">
        <h3 class="widget-title"><?php _e('Categories', 'compact') ?></h3>
        <div class="tiny-border"></div>
        <?php
        $args = array(
            'menu' => 'menu sidebar',
            'container' => 'ul',
            'menu_class' => 'cat-item',
        );
        wp_nav_menu($args); ?>

    </aside>
</div>