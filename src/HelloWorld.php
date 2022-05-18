<?php

namespace ExampleApp;

class HelloWorld
{
    public function __invoke()
    {
        echo "Hello world autoloaded";
        exit;
    }
}