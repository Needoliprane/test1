<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerDybuRbA/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerDybuRbA/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerDybuRbA/getValidator_ExpressionService.php';
require __DIR__.'/ContainerDybuRbA/getValidator_EmailService.php';
require __DIR__.'/ContainerDybuRbA/getValidator_BuilderService.php';
require __DIR__.'/ContainerDybuRbA/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerDybuRbA/getSessionService.php';
require __DIR__.'/ContainerDybuRbA/getServicesResetterService.php';
require __DIR__.'/ContainerDybuRbA/getSerializer_Mapping_CacheClassMetadataFactoryService.php';
require __DIR__.'/ContainerDybuRbA/getSecrets_VaultService.php';
require __DIR__.'/ContainerDybuRbA/getRouting_LoaderService.php';
require __DIR__.'/ContainerDybuRbA/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerDybuRbA/getPropertyInfoService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_SerializationContextFactoryService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_MetadataDriverService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_IteratorHandlerService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_FormErrorHandlerService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_DoctrineProxySubscriberService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_DeserializationContextFactoryService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_DatetimeHandlerService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_ConstraintViolationHandlerService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_Cache_CacheClearerService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializer_ArrayCollectionHandlerService.php';
require __DIR__.'/ContainerDybuRbA/getJmsSerializerService.php';
require __DIR__.'/ContainerDybuRbA/getErrorControllerService.php';
require __DIR__.'/ContainerDybuRbA/getDoctrineOdm_Mongodb_Validator_UniqueService.php';
require __DIR__.'/ContainerDybuRbA/getDoctrineMongodb_Odm_DefaultDocumentManagerService.php';
require __DIR__.'/ContainerDybuRbA/getDoctrineMongodb_Odm_DefaultConnectionService.php';
require __DIR__.'/ContainerDybuRbA/getDoctrineMongodb_Odm_CommandLoggerRegistryService.php';
require __DIR__.'/ContainerDybuRbA/getDoctrineMongodb_Odm_CommandLoggerService.php';
require __DIR__.'/ContainerDybuRbA/getDoctrineMongodbService.php';
require __DIR__.'/ContainerDybuRbA/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerDybuRbA/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerDybuRbA/getCache_SystemClearerService.php';
require __DIR__.'/ContainerDybuRbA/getCache_SystemService.php';
require __DIR__.'/ContainerDybuRbA/getCache_SerializerService.php';
require __DIR__.'/ContainerDybuRbA/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerDybuRbA/getCache_AppClearerService.php';
require __DIR__.'/ContainerDybuRbA/getCache_AppService.php';
require __DIR__.'/ContainerDybuRbA/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerDybuRbA/getTemplateControllerService.php';
require __DIR__.'/ContainerDybuRbA/getRedirectControllerService.php';
require __DIR__.'/ContainerDybuRbA/getUserControllerService.php';
require __DIR__.'/ContainerDybuRbA/getOrderControllerService.php';
require __DIR__.'/ContainerDybuRbA/getCatalogueControllerService.php';
require __DIR__.'/ContainerDybuRbA/getCartControllerService.php';
require __DIR__.'/ContainerDybuRbA/get_ServiceLocator_KQ3e_YtService.php';
require __DIR__.'/ContainerDybuRbA/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerDybuRbA/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerDybuRbA/get_ServiceLocator_5nX7ca3Service.php';
require __DIR__.'/ContainerDybuRbA/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerDybuRbA/get_Container_Private_SerializerService.php';
require __DIR__.'/ContainerDybuRbA/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerDybuRbA/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle';
$classes[] = 'SymfonyBundles\JsonRequestBundle\JsonRequestBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\CartController';
$classes[] = 'App\Controller\CatalogueController';
$classes[] = 'App\Controller\OrderController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'SymfonyBundles\JsonRequestBundle\EventListener\RequestTransformerListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerRegistry';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\CommandLoggerRegistry';
$classes[] = 'Doctrine\ODM\MongoDB\APM\CommandLogger';
$classes[] = 'MongoDB\Client';
$classes[] = 'Doctrine\ODM\MongoDB\DocumentManager';
$classes[] = 'Doctrine\ODM\MongoDB\Configuration';
$classes[] = 'Doctrine\Common\Cache\ArrayCache';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\Serializer\EventDispatcher\LazyEventDispatcher';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'JMS\SerializerBundle\Cache\CacheClearer';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'JMS\Serializer\Metadata\Driver\TypedPropertiesDriver';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationDriver';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Routing\\Annotation\\Route';
Preloader::preload($classes);
