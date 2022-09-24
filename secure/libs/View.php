<?php

namespace framework\secure\libs;

class View
{
    public function render($name, $data = null): void
    {
        if ($data != null) extract($data, EXTR_PREFIX_SAME, "wddx");

        $navbar = Bootstrap::getDIR() . '/shared/Navbar.php';
        $footer = Bootstrap::getDIR() . '/shared/Footer.php';

        $view = Bootstrap::getDIR() . '/views/' . $name . '.php';
        if (file_exists($view)) {
            require $view;
            return;
        }

        Bootstrap::show404();
    }
}