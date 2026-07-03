<?php
namespace PSP\Core;

defined('ABSPATH') || exit;

class Plugin {

    /**
     * Singleton instance.
     *
     * @var Plugin|null
     */
    private static $instance = null;

    /**
     * Get plugin instance.
     *
     * @return Plugin
     */
    public static function instance() {

        if ( self::$instance === null ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Prevent clone.
     */
    private function __clone() {}

    /**
     * Prevent unserialize.
     */
    public function __wakeup() {}

    /**
     * Constructor.
     */
    private function __construct() {}

    /**
     * Boot plugin.
     */
    public function boot() {

        $this->load_files();

        add_action(
            'plugins_loaded',
            array( $this, 'load_textdomain' )
        );

    }

    /**
     * Load plugin files.
     */
    private function load_files() {

        Loader::instance();
        Assets::instance();

    }

    /**
     * Load translations.
     */
    public function load_textdomain() {

        load_plugin_textdomain(
            'podcast-showcase-player',
            false,
            dirname( plugin_basename( PSP_FILE ) ) . '/languages'
        );

    }

}