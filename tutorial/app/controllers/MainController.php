<?php

class MainController extends Controller {
    
    function render($f3){
        $f3->set('name','world');
        $template = new Template;
        echo $template->render('template.htm');
    }

    function sayhello(){
        echo 'Hello, babe!';
    }
}