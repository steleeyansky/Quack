<?php

namespace Quack\Form\Settings;

use Quack\Form\Repositories\FormRepository;

class QuackFormMenuPage {
    public function add() {
        add_menu_page(
            __('Form Entries', QUACK_FORM_TEXTDOMAIN),
            __('Quack Form Entries', QUACK_FORM_TEXTDOMAIN),
            'manage_options', 
            'quack-form-entries',
            [$this, 'html'],
            'dashicons-feedback' 
        );
    }

    public function html() {
      
        if (!current_user_can('manage_options')) {
            return;
        }
        

        $formEntries = (new FormRepository())->get_all();
      
        quackform_render_view('admin/page', compact('formEntries'));
    }
}
