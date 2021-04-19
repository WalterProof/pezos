<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Bridge\Symfony\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('bzzhh_pezos');
        $rootNode    = $treeBuilder->getRootNode();
        $rootNode
            ->children()
            ->scalarNode('rpc_host')
            ->isRequired()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
