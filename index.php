<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/bootstrap-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package     WordPress
 * @subpackage     Bootstrap 4.0.0
 * @autor         Babobski
 */
; ?>
<?php BsWp::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()): ?>

<section class="page">
    <section class="page">

        <section id="artist" class="title-section"
            style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>);">
            <article class="title-section__article">
                <h1 class="title-section__title">Blog</h1>
                <h3 class="title-section__subtitle" style="text-transform: uppercase;">
                    <?php the_field('subtitle_artist'); ?></h3>
            </article>
        </section>


        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">

                    <ul class="blog-cat-list">
                        <?php $categories = get_categories(array(
    'orderby' => 'name',
    'parent' => 0,
));

foreach ($categories as $category) {
    printf('<a class="blog-link" href="%1$s">%2$s</a>',
        esc_url(get_category_link($category->term_id)),
        esc_html($category->name)
    );
} ?>
                    </ul>

                </div>
                <div class="col-xs-12 col-md-9">
                    <?php while (have_posts()): the_post(); ?>

                    <article class="row paragraph__blog">
                        <div class="col-xs-12 col-sm-4">
                            <a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <img src="<?php echo the_post_thumbnail_url('cover'); ?>" class="img-fluid"
                                    alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <time datetime="<?php the_time('Y-m-d'); ?>" pubdate>
                                <?php the_date(); ?>
                            </time>
                            <a class="btn btn__link btn__link--title" href="<?php esc_url(the_permalink()); ?>"
                                title="<?php the_title(); ?>" rel="bookmark">
                                <h1 class="paragraph__title">
                                    <?php the_title(); ?>
                                </h1>
                            </a>

                            <?php
    echo wp_trim_words(get_the_content(), 40, '...');
    ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="pagination">
                <?php pagination_bar(); ?>
            </div>
        </div>
    </section>



    <?php else: ?>
    <h1>
        <?php echo __('Zapraszamy niebawem.', 'wp_babobski'); ?>
    </h1>
    <?php endif; ?>

    <?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>