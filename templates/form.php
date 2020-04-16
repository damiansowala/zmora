<?php 
/*
Template Name: Form
*/

BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="title-section" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
        <article class="title-section__article">
            <h1 class="title-section__title"><?php the_title(); ?></h1>
            <h3 class="title-section__subtitle"><?php the_content(); ?></h3>
        </article>
    </section>

<section id="form" class="container">
    <?php echo do_shortcode( ''. get_field('kod_formularza') .'' ); ?>
</section>


<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>