<?php

require(__DIR__ . '/../vendor/autoload.php');

$fw = \Base::instance();
$fw->CACHE = true;
$fw->set('AUTOLOAD', '../app/');


//$Cache = \Cache::instance();
//$Cache->exists('route-cache', $routes);

//if (empty($routes)) {
  //  $fw->route('GET|POST /helloWorld/@name/@age/@height', 'Controllers\Index->helloWorldAction');
    $fw->route('GET /helloWorld/@name', 'Controllers\Index->helloWorldAction');
    $fw->route('GET @redirectedUrl: /redirected-and-now-the-url-is-duper-long-and-you-forgot-to-change-the-other-urls', 'Controllers\Index->redirectedAction');
    $fw->router('GET /@controller/@action', 'Controller->@action');
    $fw->router('GET /logout', function(){ echo 'Você está logado'; });
    $fw->map('/company/@company', 'Controllers\Company');
    //   $routes = $fw->get('ROUTES');
  //  $Cache->set('route-cache', $fw->get('ROUTES'), 86400);
//}

//$fw->set('ROUTES', $routes);

$fw->run();
