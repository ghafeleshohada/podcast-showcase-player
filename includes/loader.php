<?php

namespace PSP\Core;

defined( 'ABSPATH' ) || exit;

/**
 * Class Loader
 */
class Loader {

    /**
     * Singleton instance.
     *
     * @var Loader|null
     */
    private static $instance = null;

    /**
     * Get instance.
     *
     * @return Loader
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

        add_action(
            'init',
            array( $this, 'init' )
        );

    }

    /**
     * Initialize plugin modules.
     */
    public function init() {

        // Future:
        // Register Elementor widgets.
        // Register shortcodes.
        // Register CPT.
        // Register REST API.

    }

}
