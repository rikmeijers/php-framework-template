<?php

namespace framework\secure\libs;

abstract class Controller
{
    protected function view(string $name, $data = null): void
    {
        $libView = new View();
        $libView->render($name, $data);
    }
}