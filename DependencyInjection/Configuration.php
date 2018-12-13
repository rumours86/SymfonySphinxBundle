<?php

namespace Pluk77\SymfonySphinxBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Pluk77\SymfonySphinxBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sphinx');

        $rootNode
            ->children()
                ->scalarNode('host')->defaultValue('127.0.0.1')->end()
                ->scalarNode('port')->defaultValue(9306)->end()
            ->end();

        return $treeBuilder;
    }
}
