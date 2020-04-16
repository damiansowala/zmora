<?php
/*
Template Name: Artists
 */
; ?>
<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<section class="page">

    <section id="artist" class="title-section" style="background-image: url(<?php the_field('img_artist'); ?>);">
        <article class="title-section__article">
            <h1 class="title-section__title"><?php the_field('title_artist'); ?></h1>
            <h3 class="title-section__subtitle" style="text-transform: uppercase;">
                <?php the_field('subtitle_artist'); ?></h3>
        </article>
    </section>

    <section class="person" style="background-color: <?php the_field('person_color', 2); ?> ;">

        <?php if (get_field('list_artist')): ?>

        <?php while (has_sub_field('list_artist')): ?>

        <?php $img = get_sub_field('foto_artist'); ?>

        <a href="<?php the_sub_field('link_gallery'); ?>" class="btn person__card">



            <figure class="gallery__img"><img class="l-img"
                    src="<?php echo get_template_directory_uri(); ?>/img/logo-min.svg"
                    data-src="  <?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" /></figure>
            <h3 class="person__title"><?php the_sub_field('name_artist'); ?></h3>
            <p class="person__text"><?php the_sub_field('note_artist'); ?></p>

        </a>

        <?php endwhile; ?>

        <?php endif; ?>

    </section>

</section>

<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>