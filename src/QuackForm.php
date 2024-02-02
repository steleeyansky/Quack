<?php

namespace Quack\Form;

use Quack\Form\Database\FormEntriesTable;
use Quack\Form\Settings\QuackFormMenuPage;
use Quack\Form\Settings\ShortcodeRegistrar;
use Quack\Form\Controllers\AssetsController;
use Quack\Form\Controllers\FormSubmissionController;

class QuackForm {
    public function boot() {
        register_activation_hook(QUACK_FORM_PLUGIN_FILE, [$this, 'create_database_tables']);
        add_action('admin_menu', [$this, 'add_settings_pages']);
        add_action('init', [$this, 'handle_form_submission']);
        (new ShortcodeRegistrar)->register();
        (new AssetsController)->enqueue();
    }

    public function create_database_tables() {
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        (new FormEntriesTable())->create();
    }

    public function add_settings_pages() {
        (new QuackFormMenuPage())->add();
    }

    public function handle_form_submission() {
        $formSubmissionController = new FormSubmissionController();
        $formSubmissionController->handleFormSubmission();
    }


}

