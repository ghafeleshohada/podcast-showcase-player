<?php

namespace PSP\Core;

if ( ! defined('ABSPATH') ) exit;

class Plugin {

    private static $instance = null;

    public static function instance() {

        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct() {
        add_action('init', [$this, 'init']);
    }

    public function init() {

        // Future:
        // Elementor check
        // Widgets register
        // Assets load

    }
}