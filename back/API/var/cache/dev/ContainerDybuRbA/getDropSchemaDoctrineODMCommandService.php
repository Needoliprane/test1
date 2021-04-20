<?php

namespace ContainerDybuRbA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDropSchemaDoctrineODMCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Doctrine\Bundle\MongoDBBundle\Command\DropSchemaDoctrineODMCommand' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Command\DropSchemaDoctrineODMCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/DropCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Command/DropSchemaDoctrineODMCommand.php';

        $container->privates['Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Command\DropSchemaDoctrineODMCommand();

        $instance->setName('doctrine:mongodb:schema:drop');

        return $instance;
    }
}
