<?php

namespace Website\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\RedirectResponse;
use Zend\Expressive\Router\RouterInterface;

class RedirectAction 
{
    private $router;
    
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null )
    {
        return new RedirectResponse($this->router->generateUri('home'));
    }
}
