<?php
/*
Template Name: Questions
*/
?>
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<section class="page">

      <section id="quest" class="title-section" style="background-image: url(<?php the_field('img_quest'); ?>);">
        <article class="title-section__article">
            <h1 class="title-section__title"><?php the_field('title_quest'); ?></h1>
            <h3 class="title-section__subtitle" style="text-transform: uppercase;"><?php the_field('subtitle_quest'); ?></h3>
        </article>
    </section>

    <section class="quest" style="background-color: <?php the_field('quest_color', 2); ?> ;">

        <?php if(get_field('quests')): ?>

            <?php while(has_sub_field('quests')): ?>
                <button class="btn btn__accordion"><?php the_sub_field('quest'); ?></button>
                <article class="quest__panel">
                   <?php the_sub_field('answer'); ?>
                </article>
            <?php endwhile; ?>

        <?php endif; ?>

    </section>   

  </section>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
