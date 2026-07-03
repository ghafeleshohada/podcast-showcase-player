<?php
/**
 * Plugin Name: Podcast Showcase Player
 * Plugin URI: https://github.com/ghafeleshohada/podcast-showcase-player
 * Description: Professional Elementor Podcast Audio Player with Waveform.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: Amir Ghanbari
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: podcast-showcase-player
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Plugin constants.
define( 'PSP_VERSION', '1.0.0' );
define( 'PSP_FILE', __FILE__ );
define( 'PSP_PATH', plugin_dir_path( __FILE__ ) );
define( 'PSP_URL', plugin_dir_url( __FILE__ ) );

// Prevent direct access.
if ( ! function_exists( 'add_action' ) ) {
	exit;
}

/**
 * Main plugin class.
 */
final class PSP_Plugin {

	/**
	 * Instance.
	 *
	 * @var PSP_Plugin|null
	 */
	private static $instance = null;

	/**
	 * Get singleton instance.
	 */
	public static function instance() {

		if ( self::$instance === null ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	private function __construct() {

		add_action( 'plugins_loaded', array( $this, 'init' ) );

	}

	/**
	 * Initialize plugin.
	 */
	public function init() {

		// Future:
		// Load Elementor widget.
		// Load assets.
		// Load translations.

	}
}

PSP_Plugin::instance();