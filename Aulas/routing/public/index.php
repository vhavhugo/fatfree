<?php

require(__DIR__.'/../vendor/autoload.php');

$fw = Base::instance();
$fw->route('GET|POST /olamundo', function($fw){ echo "Olá mundo!";});
//$fw->route('POST /olamundo', function($fw){ echo "Olá mundo! Eu sou um POST";});
$fw->run();