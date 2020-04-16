<?php 
/*
Template Name: Text
*/

BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="page">
        <div class="container__full">
            <div class="row">
                <div class="col-xs-12 col-sm-4 page__title">
                    <article class="paragraph">
                        <h1 class="paragraph__header"><?php the_title(); ?></h1>
                    </article>
                    <?php if(get_the_post_thumbnail_url()): ?>
                        	<div class="mask mask--bg" style="background-image: url('<?php the_post_thumbnail_url( 'thumbnail' ); ?>');"></div>
                    	<?php endif; ?>    
                </div>
                <div class="col-xs-12 col-sm-8 page__body">
                    <div class="row m50">
                        <div class="col-xsd-12 col-sm-6">
                            <article class="row paragraph">
                                <h3 class="paragraph__title">Dane firmy</h3>
                                <?php the_field('dane_text'); ?>
                            </article>
                        </div>
                        <div class="col-xsd-12 col-sm-6">
                            <article class="row paragraph">
                                <h3 class="paragraph__title">Porozmawiaj z nami</h3>
                                <p class="paragraph__text"><?php the_field('contact_text'); ?></p>
                            </article>
                            <button id="modal-call" class="btn btn__more btn__more--red">Napisz do nas</button>
                            <button id="modal-message" class="btn btn__more btn__more--red">Zamów rozmowe</button>
                        </div>
                    </div>
                    <?php if(get_field('lista')): ?>
                        <div class="row">
                            <?php while(has_sub_field('lista')): ?>
                                <div class="col-xsd-12 col-sm-6">
                                    <div class="row paragraph">
                                        <h3 class="paragraph__title">Biuro w <?php the_sub_field('miasto'); ?></h3>
                                        <p class="paragraph__text"><?php the_sub_field('adres'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('lista')): ?>
                        <div class="row">
                            <?php while(has_sub_field('lista')): ?>
                                <div class="col-xsd-12 col-sm-6">
                                    <?php the_sub_field('mapa'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div id="call" class="modal">
                <button class="btn btn__modal-close"></button>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <article class="row paragraph__blog">
                            <h3 class="paragraph__title">Zamów rozmowę</h3>
                        </article>
                        <?php echo do_shortcode( ''. get_field('kod_formularza') .'' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="message" class="modal">
            <button class="btn btn__modal-close"></button>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <article class="row paragraph__blog">
                            <h3 class="paragraph__title">Napisz do nas</h3>
                        </article>
                        <form class="quest__form" action="">
                            <input class="quest__data-input" type="text" placeholder="Imię i nazwisko" name="name" id="">
                            <input class="quest__data-input" type="mail" placeholder="email" name="phone" id="">
                            <textarea class="quest__data-input" type="mail" placeholder="email" name="phone" id=""></textarea>
                            <button type="submit" class="btn btn__call">zamawiam rozmowę</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>