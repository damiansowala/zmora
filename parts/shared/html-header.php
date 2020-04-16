<?php
  if (file_exists('opt.php')) {
    include('opt.php');
  }
?>

<!DOCTYPE html>
<html lang="pl">
  <head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
    
    <?php remove_theme_support( 'title-tag' ); ?>
    <title><?php if ($o_title != '') { ?><?php echo $o_title; ?><?php } else { ?><?php wp_title('', true, 'right' ); } ?> - Zmora Tattoo</title>
    <?php if ($o_desc != ''){ ?>
      <?php echo '<meta name="description" content="' . $o_desc . '" />'; ?>
    <?php } ?>
    <?php
      if ($o_robots != '') {
        echo '<meta name="robots" content="' . $o_robots . '" />';
      }
    ?>
    
		<?php 
			if ($_SERVER['REQUEST_URI'] == '/home/') {
				echo '<meta name="robots" content="noindex,follow">';
			} else {
				wp_head();
			}
		?>
    
		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "LocalBusiness",
				"address": {
					"@type": "PostalAddress",
					"addressLocality": "Warszawa",
					"streetAddress": "Chorągwi Pancernej 48",
					"postalCode": "02-951",
					"addressRegion": "mazowieckie"
				},
				"name": "Zmora Tattoo",
				"openingHours": [
					"Mo-Su 10:00-16:00"
				],
				"email": "",
				"telephone": "573065146",
				"vatID": "5213766579",
				"image": "https://zmoratattoo.pl/wp-content/themes/zmora/img/logo-2.svg"
			}
		</script>
  </head>

  <body style="background-color: <?php the_field('bg_color', 2); ?> ;">