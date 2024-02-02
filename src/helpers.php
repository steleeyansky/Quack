<?php 

use Quack\Form\View;

if (!function_exists('quackform_render_view')) {
    function quackform_render_view(string $view, array $params = [], $echo = true) {
        if (!$echo) {
            return (new View($view, $params))->render();
        }

        (new View($view, $params))->render(true);
    }
}
