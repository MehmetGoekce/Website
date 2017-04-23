<?php

namespace Website;

/**
 * The configuration provider for the Website module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'invokables' => [
            ],
            'factories'  => [
                Action\HomePageAction::class => Action\HomePageActionFactory::class,
                Action\RedirectAction::class => Action\RedirectActionFactory::class,
            ],
        ];
    }

    /**
     * Returns the templates configuration
     *
     * @return array
     */
    public function getTemplates()
    {
        return [
            'paths' => [
                'website'    => [__DIR__ . '/../templates/website'],
                'websiteerror'  => [__DIR__ . '/../templates/websiteerror'],
                'websitelayout' => [__DIR__ . '/../templates/websitelayout'],
            ],
        ];
    }
}
