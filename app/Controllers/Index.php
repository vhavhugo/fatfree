<?php

namespace Controllers;

class Index{
    public function helloWorldAction(\Base $fw, array $args = []): void {
        echo "Isso é ". $fw->VERB.' e meu nome é '.$args['name'].' minha idade é '.$args['age'].' minha altura é '.$args['height'];
        if($args['name'] === 'Joe'){
            $fw->reroute('@redirectedUrl', false);
        }
    }

    public function redirectedAction(\Base $fw, array $args = []): void {
        echo 'Estou sendo redirecionado';
    }
}