<?php

namespace Quack\Form\Settings;

class ShortcodeRegistrar {
    public function register() {
        add_shortcode('quackform_form', [$this, 'render_form']);
    }

    public function render_form() {
     
        return quackform_render_view('public/form-shortcode', [], false);
    }
}
