<?php

namespace Website\Action;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Website\Action\RedirectAction;

class RedirectActionFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return RedirectAction
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new RedirectAction($container->get(\Zend\Expressive\Router\RouterInterface::class));
    }
}
