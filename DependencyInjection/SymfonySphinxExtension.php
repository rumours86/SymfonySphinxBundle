<?php

namespace Pluk77\SymfonySphinxBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class SymfonySphinxExtension
 *
 * @package Pluk77\SymfonySphinxBundle\DependencyInjection
 */
class SymfonySphinxExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('sphinx.host', $config['host']);
        $container->setParameter('sphinx.port', $config['port']);
    }
}
