<?php
/**
 * Assets Loader
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PSP_Assets {

	public function __construct() {

		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_assets' ) );

	}

	public function frontend_assets() {

		wp_register_style(
			'psp-style',
			PSP_URL . 'assets/css/player.css',
			array(),
			PSP_VERSION
		);

		wp_register_script(
			'psp-player',
			PSP_URL . 'assets/js/player.js',
			array( 'jquery' ),
			PSP_VERSION,
			true
		);

	}

}