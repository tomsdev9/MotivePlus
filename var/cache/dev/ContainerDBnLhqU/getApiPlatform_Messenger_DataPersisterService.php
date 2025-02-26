<?php

namespace ContainerDBnLhqU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Messenger_DataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.messenger.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Messenger\DataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'DispatchTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'DataPersister.php';

        $a = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->privates['api_platform.messenger.data_persister'])) {
            return $container->privates['api_platform.messenger.data_persister'];
        }

        return $container->privates['api_platform.messenger.data_persister'] = new \ApiPlatform\Core\Bridge\Symfony\Messenger\DataPersister(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $a);
    }
}
