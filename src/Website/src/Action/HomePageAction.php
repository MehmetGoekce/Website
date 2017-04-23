<?php

namespace Website\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class HomePageAction implements ServerMiddlewareInterface
{
   // private $page;
    private $template;
    
    public function __construct( TemplateRendererInterface $template)
    {
       // $this->page = $page;
        $this->template = $template;
    }
    /**
     * {@inheritDoc}
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        // $response = $delegate->process($request);
        return new HtmlResponse(
                $this->template->render('website::home-page'));
    }
}