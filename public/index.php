<?php

require(__DIR__.'/../vendor/autoload.php');

$fw = Base::instance();
$fw->set('AUTOLOAD', '../app/');

$fw->route('GET|POST /helloworld/@name', 'Controllers\Index->helloWorldAction');
//$fw->route('POST /helloworld', 
//    function($fw)
//    { 
//        echo "Olá mundo, isso é um POST";
//    });
$fw->run();