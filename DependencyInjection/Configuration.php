<?php

namespace Artack\MxApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('artack_mx_api');
        
        $rootNode
            ->children()
                ->booleanNode('enabled')
                    ->isRequired()
                ->end()
                ->scalarNode('host')
                    ->isRequired()
                ->end()
                ->booleanNode('use_ssl')
                    ->isRequired()
                ->end()
                ->booleanNode('verify_peer')
                    ->isRequired()
                ->end()
                ->scalarNode('default_version')
                    ->isRequired()
                ->end()
                ->scalarNode('default_language')
                    ->isRequired()
                ->end()
                ->scalarNode('customer_key')
                    ->isRequired()
                ->end()
                ->scalarNode('api_key')
                    ->isRequired()
                ->end()
                ->scalarNode('api_secret')
                    ->isRequired()
                ->end()
                ->scalarNode('format')
                    ->isRequired()
                ->end()
            ->end()
            ;
        
        
        return $treeBuilder;
    }
}