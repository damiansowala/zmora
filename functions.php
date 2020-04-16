<?php
/**
 * Bootstrap 4 on Wordpress functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package     WordPress
 * @subpackage     Bootstrap 4.0.0
 * @autor         Babobski
 */

/* ========================================================================================================================

Add language support to theme

======================================================================================================================== */
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    load_theme_textdomain('wp_babobski', get_template_directory() . '/language');
}

add_image_size('cover', 320, 240, true);
add_image_size('square', 400, 400, true);

/* ========================================================================================================================

Required external files

======================================================================================================================== */

require_once 'external/bootstrap-utilities.php';
require_once 'external/bs4navwalker.php';

/* ========================================================================================================================

Add html 5 support to wordpress elements

======================================================================================================================== */
add_theme_support('html5', array(
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',
));

/* ========================================================================================================================

Theme specific settings

======================================================================================================================== */

add_theme_support('post-thumbnails');

//add_image_size( 'name', width, height, crop true|false );

register_nav_menus(array('menu-left' => 'Menu'));
register_nav_menus(array('menu-left-two' => 'Menu Two'));
register_nav_menus(array('menu-lang' => 'Menu Lang'));
register_nav_menus(array('footer' => 'PP/Cookies'));
register_nav_menus(array('cont' => 'Contact'));
register_nav_menus(array('artist' => 'Artist'));

/* ========================================================================================================================

Actions and Filters

======================================================================================================================== */

add_action('wp_enqueue_scripts', 'bootstrap_script_init');

add_filter('body_class', array('BsWp', 'add_slug_to_body_class'));

/* ========================================================================================================================

Custom Post Types - include custom post types and taxonomies here e.g.

e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

======================================================================================================================== */

/* ========================================================================================================================

Scripts

======================================================================================================================== */

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */

function bootstrap_script_init()
{

    wp_register_script('jq', get_template_directory_uri() . '/jquery.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('jq');

    wp_register_script('site', get_template_directory_uri() . '/main.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('site');

    wp_register_script('lightbox', get_template_directory_uri() . '/lightbox.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('lightbox');

    wp_register_style('screen', get_stylesheet_directory_uri() . '/style.css', '', array(), 'screen');
    wp_enqueue_style('screen');

    wp_register_style('fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome/all.css', '', array(), 'screen');
    wp_enqueue_style('fontawesome');

}

/* ========================================================================================================================

Security & cleanup wp admin

======================================================================================================================== */

//remove wp version
function theme_remove_version()
{
    return '';
}

add_filter('the_generator', 'theme_remove_version');

//remove default footer text
function remove_footer_admin()
{
    echo "";
}

add_filter('admin_footer_text', 'remove_footer_admin');

//remove wordpress logo from adminbar
function wp_logo_admin_bar_remove()
{
    global $wp_admin_bar;

    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'wp_logo_admin_bar_remove', 0);

// Remove default Dashboard widgets
function disable_default_dashboard_widgets()
{

    //remove_meta_box('dashboard_right_now', 'dashboard', 'core');
    remove_meta_box('dashboard_activity', 'dashboard', 'core');
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
    remove_meta_box('dashboard_plugins', 'dashboard', 'core');

    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
    remove_meta_box('dashboard_primary', 'dashboard', 'core');
    remove_meta_box('dashboard_secondary', 'dashboard', 'core');
}
add_action('admin_menu', 'disable_default_dashboard_widgets');

remove_action('welcome_panel', 'wp_welcome_panel');

/* ========================================================================================================================

Custom login

======================================================================================================================== */

// Add custom css
function my_custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom-login-style.css" />';
}
add_action('login_head', 'my_custom_login');

// Link the logo to the home of our website
function my_login_logo_url()
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'my_login_logo_url');

// Change the title text
function my_login_logo_url_title()
{
    return 'Bootstrap 4 on WordPress';
}
add_filter('login_headertitle', 'my_login_logo_url_title');

/* ========================================================================================================================

Comments

======================================================================================================================== */

/**
 * Custom callback for outputting comments
 *
 * @return void
 * @author Keir Whitaker
 */
function bootstrap_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    ?>
<?php if ('1' == $comment->comment_approved): ?>
<li class="media">
    <div class="media-left">
        <?php echo get_avatar($comment); ?>
    </div>
    <div class="media-body">
        <h4 class="media-heading"><?php comment_author_link(); ?></h4>
        <time><a href="#comment-<?php comment_ID(); ?>" pubdate><?php comment_date(); ?> at
                <?php comment_time(); ?></a></time>
        <?php comment_text(); ?>
    </div>
    <?php endif;
}

function pagination_bar()
{
    global $wp_query;
    $total_pages = $wp_query->max_num_pages;
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('<i class="fas fa-angle-left"></i>'), 'next_text' => __('<i class="fas fa-angle-right"></i>'),
        ));

    }
}