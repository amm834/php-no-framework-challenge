<?php

namespace ExampleApp;

use Psr\Http\Message\ResponseInterface;

class HelloWorld
{

    public function __construct(
        private string            $foo,
        private ResponseInterface $response
    )
    {
    }

    public function __invoke(): ResponseInterface
    {
        $response = $this->response->withHeader('Content-Type', 'text/html');
        $response->getBody()
            ->write("<html></head></head><body>Hello {$this->foo} world</body></html>");
        return $response;
    }
}