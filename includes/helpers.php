<?php
/**
 * Helper Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get plugin URL
 */
function psp_url( $path = '' ) {
	return PSP_URL . ltrim( $path, '/' );
}

/**
 * Get plugin path
 */
function psp_path( $path = '' ) {
	return PSP_PATH . ltrim( $path, '/' );
}

/**
 * Plugin version
 */
function psp_version() {
	return PSP_VERSION;
}