<?php require "../vendor/autoload.php";

/**
 *  Load environment variables
 */
$dotenv = new Dotenv\Dotenv(__DIR__, '../.env');
$dotenv->load();

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );

if(getenv('APP_ENV') == 'local') {
    $html = file_get_contents(dirname( __FILE__ ) . '/.webpack_tmp/index.html');
    print str_replace('/app.js', '/.webpack_tmp/app.js', $html);
}
else {
    require(dirname( __FILE__ ) . '/static/index.html');
}