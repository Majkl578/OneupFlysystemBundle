<?php

namespace Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter;

use Oneup\FlysystemBundle\DependencyInjection\Factory\AdapterFactoryInterface;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\DefinitionDecorator;

class MemoryFactory implements AdapterFactoryInterface
{
    public function getKey()
    {
        return 'memory';
    }

    public function create(ContainerBuilder $container, $id, array $config)
    {
        $container
            ->setDefinition($id, new DefinitionDecorator('oneup_flysystem.adapter.memory'))
        ;
    }

    public function addConfiguration(NodeDefinition $node)
    {
        $node
            ->children()
            ->end()
        ;
    }
}
