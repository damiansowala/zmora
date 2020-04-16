<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/bootsrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package     WordPress
 * @subpackage     Bootstrap 4.0.0
 * @autor         Babobski
 */
; ?>
<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<section class="page">

    <?php if (have_posts()):
    while (have_posts()): the_post();
        ?>
		    <section class="title-section" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
		        <article class="title-section__article">
		            <h1 class="title-section__title"><?php the_title(); ?></h1>

		            <?php
        if ('/pytania/' == $_SERVER['REQUEST_URI']) {
            echo '<h3 class="title-section__subtitle" style="text-transform: uppercase;">Odpowiedzi na najczęściej zadawane pytania</h3>';
        } else {
            echo '<h3 class="title-section__subtitle"></h3>';
        }
        ?>
		        </article>
		    </section>

		    <article class="container">
		        <?php the_content(); ?>
		    </article>

		    <?php endwhile; ?>
	    <?php endif; ?>

</section>

<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>