<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/bootstrap-utilities.php for info on BsWp::get_template_parts()
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
		    <section id="artist" class="title-section"
		        style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
		        <article class="title-section__article">
		            <h1 class="title-section__title h-bg"><?php the_title(); ?></h1>
		            <h3 class="title-section__subtitle" style="text-transform: uppercase;">
		                <?php the_field('subtitle_artist'); ?></h3>
		        </article>
		    </section>
		    <section class="container">
		        <div class="row">
		            <div class="col-xs-12 blog__body">
		                <article class="paragraph">
		                    <p class="paragraph__text"><?php the_content(); ?></p>
		                </article>
		            </div>
		        </div>
		        <div class="row" style="margin-top: 25px;">
		            <div class="col-xs-12">
		                <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" class="btn-share" target="_blank">
		                    <i class="fas fa-share-alt"></i> Facebook
		                </a>
		            </div>
		        </div>
		    </section>


		    <?php endwhile; ?>
	    <?php endif; ?>
</section>

<section class="container single-blog-post">
    <div class="row">
        <?php $args = array('post_type' => 'post', 'posts_per_page' => 2, 'orderby' => 'rand');
$the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

	        <div class="col-xs-12 col-md-6 col-lg-3">
	            <a href="<?php the_permalink(); ?>">
	                <img src="<?php echo the_post_thumbnail_url('cover'); ?>" class="img-fluid" alt="...">
	                <h2> <?php the_title(); ?></h2>
	            </a>
	        </div>
	        <?php wp_reset_postdata(); ?>
	        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php BsWp::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>