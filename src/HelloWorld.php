<?php

namespace ExampleApp;

class HelloWorld
{

    public function __construct(
        private string $foo,
    )
    {
    }

    public function __invoke()
    {
        echo "Hello {$this->foo} autoload";
        exit;
    }
}