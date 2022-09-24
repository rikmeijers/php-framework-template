<?php

namespace framework\secure\controllers;

require '../secure/models/Users.php';

use framework\secure\libs\Controller;
use framework\secure\models\Users;

class IndexController extends Controller
{
    public function Index($request)
    {
        $model = new Users();
        $this->view('index', ['user' => $model]);
    }

    public function Test($request)
    {
        echo "<pre>";
        var_dump($request);
        echo "</pre>";

        echo 'We are in index test';
    }
}
