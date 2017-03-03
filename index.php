<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();
$f3->set('UI', 'app/view/');
$f3->set('AUTOLOAD', 'app/');

$f3->config('app/routes.ini');
$f3->config("config.ini");

$f3->set('db', new DB\SQL('mysql:host=localhost;dbname=ffftest', 'root', 'simple'));

$f3->run();
