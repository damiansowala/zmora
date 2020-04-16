<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>


<section id="home" class="intro" style="background-color: <?php the_field('intro_color', 2); ?> ;">
    <div class="intro__mask" style="background-image: url(<?php the_field('img_intro'); ?>);"></div>
    <video autoplay muted loop class="intro__video">
        <source src="<?php the_field('video_intro'); ?>" type="video/mp4">
    </video>
    <img src="<?php the_field('logo_intro'); ?>" alt="zmora_logo" class="intro__logo">
</section>

<section id="about" class="title-section" style="background-image: url(<?php the_field('img_about'); ?>);">
    <article class="title-section__article">
        <h2 class="title-section__title"><?php the_field('title_about'); ?></h2>
        <h3 class="title-section__subtitle"><?php the_field('subtitle_about'); ?></h3>
    </article>
</section>

<section class="about" style="background-color: <?php the_field('about_color', 2); ?> ;">

    <article class="about__text">
        <div class="text">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </article>

    <div class="gallery">

        <?php if (get_field('foto')): ?>

        <?php while (has_sub_field('foto')): ?>

        <?php $img = get_sub_field('foto_about'); ?>

        <a class="gallery__link" href="<?php echo $img['url']; ?>" data-lightbox="example-set">
            <figure class="gallery__img"><img class="l-img"
                    src="<?php echo get_template_directory_uri(); ?>/img/logo-min.svg"
                    data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" /></figure>
        </a>

        <?php endwhile; ?>

        <?php endif; ?>

    </div>

</section>


<!-- <section id="artist" class="title-section" style="background-image: url(<?php //the_field('img_artist'); ; ; ; ; ; ; ; ; ?>);">
        <article class="title-section__article">
            <h2 class="title-section__title"><?php //the_field('title_artist'); ; ; ; ; ; ; ; ; ?></h2>
            <h3 class="title-section__subtitle"><?php //the_field('subtitle_artist'); ; ; ; ; ; ; ; ; ?></h3>
        </article>
    </section>

    <section class="person" style="background-color: <?php //the_field('person_color', 2); ; ; ; ; ; ; ; ; ?> ;">

        <?php //if(get_field('list_artist')): ; ; ; ; ; ; ; ; ?>

            <?php //while(has_sub_field('list_artist')): ; ; ; ; ; ; ; ; ?>

                <?php //$img = get_sub_field('foto_artist'); ; ; ; ; ; ; ; ; ?>

                <a href="<?php //the_sub_field('link_gallery'); ; ; ; ; ; ; ; ; ?>" class="btn person__card">



                    <figure class="gallery__img"><img class="l-img" src="<?php //echo get_template_directory_uri(); ; ; ; ; ; ; ; ; ?>/img/logo-min.svg"
                            data-src="  <?php //echo $img['url']; ; ; ; ; ; ; ; ; ?>" alt="<?php //echo $img['alt']; ; ; ; ; ; ; ; ; ?>" /></figure>
                    <h3 class="person__title"><?php //the_sub_field('name_artist'); ; ; ; ; ; ; ; ; ?></h3>
                    <p class="person__text"><?php //the_sub_field('note_artist'); ; ; ; ; ; ; ; ; ?></p>

                </a>

            <?php //endwhile; ; ; ; ; ; ; ; ; ?>

    </section>
    <?php //endif; ; ; ; ; ; ; ; ; ?>

    <section id="quest" class="title-section" style="background-image: url(<?php //the_field('img_quest'); ; ; ; ; ; ; ; ; ?>);">
        <article class="title-section__article">
            <h2 class="title-section__title"><?php //the_field('title_quest'); ; ; ; ; ; ; ; ; ?></h2>
            <h3 class="title-section__subtitle"><?php //the_field('subtitle_quest'); ; ; ; ; ; ; ; ; ?></h3>
        </article>
    </section>

    <section class="quest" style="background-color: <?php //the_field('quest_color', 2); ; ; ; ; ; ; ; ; ?> ;">

        <?php //if(get_field('quests')): ; ; ; ; ; ; ; ; ?>

            <?php //while(has_sub_field('quests')): ; ; ; ; ; ; ; ; ?>
                <button class="btn btn__accordion"><?php //the_sub_field('quest'); ; ; ; ; ; ; ; ; ?></button>
                <article class="quest__panel">
                   <?php //the_sub_field('answer'); ; ; ; ; ; ; ; ; ?>
                </article>
            <?php //endwhile; ; ; ; ; ; ; ; ; ?>

        <?php //endif; ; ; ; ; ; ; ; ; ?>

    </section> -->

<section id="contact" class="title-section title-section--2h title-section--hauto"
    style="background-image: url(<?php the_field('img_contact'); ?>);">
    <article class="title-section__article">
        <img class="title-section__logo" src="<?php the_field('logo_intro'); ?>" alt="zmora_logo">
        <h2 class="title-section__title"><?php the_field('title_contact'); ?></h2>
        <h3 class="title-section__subtitle"><?php the_field('subtitle_contact'); ?></h3>
        <?php
wp_nav_menu(array(
    'menu' => 'cont',
    'theme_location' => 'cont',
    'depth' => 2,
    'container' => false,
    'menu_class' => 'title-section__nav',
    'fallback_cb' => 'bs4navContact::fallback',
    'walker' => new bs4navCon())

);
?>
    </article>

</section>

<section id="map" class="maps"></section>

<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>