<?php

namespace Quack\Form;

use Quack\Form\Exceptions\ViewNotFoundException;

class View {
    protected string $view;
    protected array $params;

    public function __construct(
        string $view,
        array $params = []
    ) {
        $this->view = str_replace('.php', '', $view);
        $this->params = $params;
    }

    public function render(bool $echo = false) {
     
        $path = QUACK_FORM_VIEW_DIR . $this->view . '.php';
       
        if (!file_exists($path)) {
            throw new ViewNotFoundException("The view {$this->view} cannot be found");
        }

        extract($this->params);

        ob_start();
        include $path;
        $output = ob_get_clean();

        if (!$echo) {
            return $output;
        }

        echo $output;
    }
}
