<?php 
namespace Quack\Form\Database;

class Database {
    public const PLUGIN_TABLE_PREFIX = 'quackform_';
    public $wpdb;
    public $charset_collate;
    public $full_table_prefix;
    private static $instance = null;

    private function __construct() {
        global $wpdb;
        $this->wpdb = $wpdb;
        $this->charset_collate = $wpdb->get_charset_collate();
        $this->full_table_prefix = $wpdb->prefix . self::PLUGIN_TABLE_PREFIX;
    }

    public static function instance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
