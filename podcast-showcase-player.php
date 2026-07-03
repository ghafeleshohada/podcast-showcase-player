<?php
/**
 * Plugin Name: Podcast Showcase Player
 * Description: Elementor Podcast Player with Waveform Support
 * Version: 1.0.0
 * Author: Podcast Team
 */

if ( ! defined('ABSPATH') ) exit;

define('PSP_PATH', plugin_dir_path(__FILE__));
define('PSP_URL', plugin_dir_url(__FILE__));
define('PSP_VERSION', '1.0.0');

require_once PSP_PATH . 'includes/core/autoloader.php';
require_once PSP_PATH . 'includes/core/plugin.php';

add_action('plugins_loaded', function () {
    \PSP\Core\Plugin::instance();
});