<?php 

namespace Quack\Form\Database;

abstract class DatabaseTable {
    protected $wpdb;
    protected $charset_collate;
    protected $full_table_name;

    public function __construct() {
        $db = Database::instance();
        $this->wpdb = $db->wpdb;
        $this->charset_collate = $db->charset_collate;
        $this->full_table_name = $db->full_table_prefix . static::TABLE_NAME;
    }

    protected abstract function create();
    protected abstract function delete();
}
