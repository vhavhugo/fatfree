<?php

namespace Controllers;

class Index{
    public function helloWorldAction(\Base $fw, array $args = []): void{
        echo "Hello World! This is a " . $fw->VERB . ' and my name is ' . $args['name'];
    }
}