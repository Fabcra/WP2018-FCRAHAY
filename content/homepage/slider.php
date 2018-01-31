<?php
$images = get_field('slides'); ?> <!--Slider est un ACF galerie -->
<!-- revolution slider begin -->
<div class="fullwidthbanner-container">

    <div id="revolution-slider">
        <ul>
            <?php foreach ($images as $image) : ?>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                    <!--  BACKGROUND IMAGE -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>
<!-- revolution slider close -->