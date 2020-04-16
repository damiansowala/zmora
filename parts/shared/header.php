<div class="navbar">

	<a href="<?php echo site_url(); ?>" role="button" class="btn"><img class="navbar__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-2.svg" data-src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Zmora Tattoo"></a>
	<button role="button" name="btn-toggle" class="btn btn__toggle"></button>


	<div class="navbar__collpase" style="background-color: <?php the_field('menu_color', 2); ?> ;">

		<nav class="navbar__row">
				<button role="button" name="btn-toggle" class="btn btn__close"></button>
				<?php
							wp_nav_menu( array(
								'menu'          	=> 'menu-lang',
								'theme_location'	=> 'menu-lang',
								'depth'         	=> 2,
								'container'			=> false,
								'menu_class'    	=> 'navbar__first',
								'fallback_cb'   	=> 'bs4navwalker::fallback',
								'walker'         	=> new bs4navFoo())
							
							);
		?>

		</nav>

		<nav class="navbar__row">
			<?php
								wp_nav_menu( array(
									'menu'          	=> 'menu-left',
									'theme_location'	=> 'menu-left',
									'depth'         	=> 2,
									'container'			=> false,
									'menu_class'    	=> 'navbar__last',
									'fallback_cb'   	=> 'bs4navwalker::fallback',
									'walker'         	=> new bs4Navwalker())
								
								);
			?>
		</nav>

		<nav class="navbar__row">
			<?php
								wp_nav_menu( array(
									'menu'          	=> 'menu-left-two',
									'theme_location'	=> 'menu-left-two',
									'depth'         	=> 2,
									'container'			=> false,
									'menu_class'    	=> 'navbar__last',
									'fallback_cb'   	=> 'bs4navwalker::fallback',
									'walker'         	=> new bs4Navwalker())
								
								);
			?>
		</nav>

	</div>

</div>