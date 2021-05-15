<?php

require(__DIR__.'/../vendor/autoload.php');

$fw = Base::instance();
$fw->route('GET /', function($fw) { echo "Olá mundo";});
$fw->run();