<?php

require_once("vendor/autoload.php");

$f3 = Base::instance();

$f3->config('config.ini');

$f3->config('routes.ini');

//$f3->set('message', 'Hello, World1111111111');

//$f3->route('GET /',
//    function($f3){
//        echo $f3->get('message');
//    }
//);

//class AppController {
    
//    function beforeroute(){
//        echo 'Before routing - ';
//    }
    
//    function afterroute(){
//        echo '- After rounting';
//    }
//}

//class Main extends AppController {
    
//    function render($f3){
//        $f3->set('name','world');
//        $template = new Template;
//        echo $template->render('template.htm');
//    }

//    function sayhello(){
//        echo 'Hello, babe!';
//    }
//}

//class AboutPage extends AppController {
//    function render(){
//        echo 'This is he about page';
//    }
//}

$f3->run();