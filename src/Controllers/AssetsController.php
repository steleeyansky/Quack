<?php

namespace Quack\Form\Controllers;

use Quack\Form\Settings\ShortcodeRegistrar;

class AssetsController
{
    public function enqueue()
    {

        add_action('wp_enqueue_scripts', [$this, 'conditionally_enqueue_assets']);
    }

    public function conditionally_enqueue_assets()
    {

        if (ShortcodeRegistrar::$enqueueAssets) {
           
            // styles
            wp_enqueue_style('quackform-styles', QUACK_FORM_ASSETS_URL . 'css/form-styles.css', [], '1.0.0');
          
            // scripts 
            wp_enqueue_script('quackform-main', QUACK_FORM_ASSETS_URL . 'js/form-scripts.js', ['jquery'], '1.0.0', true);
            wp_localize_script('quackform-main', 'quackFormData', [
                'ajaxUrl' => admin_url('admin-ajax.php'),
            ]);
        }
    }
}
