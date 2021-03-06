<?php

namespace Website\Action;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Website\Action\HomePageAction;
use Zend\Expressive\Template\TemplateRendererInterface;

class HomePageActionFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return HomePageAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new HomePageAction($container->get(TemplateRendererInterface::class));
    }
}
