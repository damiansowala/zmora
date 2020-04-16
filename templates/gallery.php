<?php
/*
Template Name: Gallery
 */

BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<section class="title-section" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
    <article class="title-section__article">
        <h1 class="title-section__title"><?php the_title(); ?></h1>
    </article>
</section>

<article class="gallery__content">
    <div class="container">
        <?php the_content(); ?>
    </div>
</article>

<nav class="container">
    <?php
    wp_nav_menu(array(
        'menu' => 'artist',
        'theme_location' => 'artist',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'gallery__nav',
        'fallback_cb' => 'bs4navContact::fallback',
        'walker' => new bs4navCon())

    );
    ?>
</nav>



<section class="gallery pt-50">

    <?php if (get_field('images')): ?>
    <?php while (has_sub_field('images')): ?>

    <?php $img = get_sub_field('image'); ?>
    <a class="gallery__link" href="<?php echo $img['url']; ?>" data-lightbox="example-set">
        <figure class="gallery__img"><img class="l-img"
                src="<?php echo get_template_directory_uri(); ?>/img/logo-min.svg"
                data-src="<?php echo $img['sizes']['square']; ?>" alt="<?php echo $img['alt']; ?>" /></figure>
    </a>


    <?php endwhile; ?>
    <?php endif; ?>

</section>

<?php endwhile; ?>
<?php endif; ?>





<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>