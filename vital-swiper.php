<?php
/**
 * Plugin Name:           QB - Swiper
 * Plugin URI:            https://github.com/mandytechnologies/mandy-swiper
 * Description:           Powered by Swiper JS and love.
 * Version:               1.0.0
 * Requires PHP:          7.0
 * Requires at least:     6.1.0
 * Tested up to:          6.8.2
 * Author:                Quick Build
 * Author URI:            https://www.quickbuildwebsite.com/
 * License:               GPLv2 or later
 * License URI:           https://www.gnu.org/licenses/
 * Text Domain:           qb-swiper
 * 
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_slider_block_init() {
	register_block_type(__DIR__ . '/build/slide');
	register_block_type(__DIR__ . '/build/slider');
}
add_action( 'init', 'create_block_slider_block_init' );

define('MANDY_SWIPER_VERSION', '1.0.0');

require 'plugin-update-checker/plugin-update-checker.php';

$update_checker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mandytechnologies/mandy-swiper',
	__FILE__,
	'mandy-swiper'
);

require_once( 'includes/class-plugin.php' );
