<footer class="footer">
		<?php if($_SERVER['REQUEST_URI'] != '/') : ?>
			<div class="footer__contact">
				<p class="contact__companyname">Zmora Tattoo</p>
				<p>ul. Chorągwi Pancernej 48,</p>
				<p>02-951, Warszawa,</p>
				<p>woj. mazowieckie</p>
				<p>NIP: 5213766579</p>
				<p>REGON: 366498568</p>
				<p>zmoratattoo@gmail.com</p>
			</div>
		<?php endif ; ?>
        <div class="footer__container">
            <p class="footer__text">© 2018 zmoratattoo.pl</p>
            <?php
							wp_nav_menu( array(
								'menu'          	=> 'footer',
								'theme_location'	=> 'footer',
								'depth'         	=> 2,
								'container'			=> false,
								'menu_class'    	=> 'footer__nav',
								'fallback_cb'   	=> 'bs4navwalker::fallback',
								'walker'         	=> new bs4navFooter())
							
							);
		    ?>
        </div>
        <a class="btn btn__footer" href="https://i-see-you.pl" rel="nofollow">iseeyou.studio</a>
    </footer>