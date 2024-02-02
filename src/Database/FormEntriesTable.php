<?php 

namespace Quack\Form\Database;

class FormEntriesTable extends DatabaseTable {
    protected const TABLE_NAME = 'form_entries';

    public function create() {
        if (!function_exists('dbDelta')) {
            throw new \LogicException('Function "dbDelta" does not exist');
        }
        
        $table_name = $this->full_table_name;
        $charset_collate = $this->charset_collate;

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            email varchar(255) NOT NULL,
            first_name varchar(255) NOT NULL,
            last_name varchar(255) NOT NULL,
            date_of_birth date NOT NULL,
            phone_number varchar(20) NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function delete() {
        $table_name = $this->full_table_name;
        $sql = "DROP TABLE IF EXISTS $table_name";
        $this->wpdb->query($sql);
    }
}
