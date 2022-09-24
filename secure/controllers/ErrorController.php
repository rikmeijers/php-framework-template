<?php

namespace framework\secure\controllers;

use framework\secure\libs\Controller;

class ErrorController extends Controller
{
    public function Error(int $code)
    {
        echo $this->getError($code);
    }

    private function getError(int $code)
    {
        if ($code == 404) {
            return 'HTTP ERROR 404';
        }
    }
}