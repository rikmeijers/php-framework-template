<?php
namespace framework\public;

$DIR = '../secure';
require $DIR . '/libs/Bootstrap.php';
require $DIR . '/libs/Controller.php';
require $DIR . '/libs/Model.php';
require $DIR . '/libs/View.php';

use framework\secure\libs\Bootstrap;

new Bootstrap();
