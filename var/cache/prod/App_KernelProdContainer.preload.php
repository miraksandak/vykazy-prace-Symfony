<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\ContainerErrQsAY\App_KernelProdContainer::class, null);
require __DIR__.'/ContainerErrQsAY/EntityManagerGhostC7f04bd.php';
require __DIR__.'/ContainerErrQsAY/getValidator_WhenService.php';
require __DIR__.'/ContainerErrQsAY/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerErrQsAY/getValidator_ExpressionLanguageService.php';
require __DIR__.'/ContainerErrQsAY/getValidator_ExpressionService.php';
require __DIR__.'/ContainerErrQsAY/getValidator_EmailService.php';
require __DIR__.'/ContainerErrQsAY/getValidator_BuilderService.php';
require __DIR__.'/ContainerErrQsAY/getValidatorService.php';
require __DIR__.'/ContainerErrQsAY/getTwig_Runtime_SerializerService.php';
require __DIR__.'/ContainerErrQsAY/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerErrQsAY/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerErrQsAY/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerErrQsAY/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerErrQsAY/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerErrQsAY/getTwigService.php';
require __DIR__.'/ContainerErrQsAY/getTranslatorService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_LocaleSwitcherService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerErrQsAY/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerErrQsAY/getSession_FactoryService.php';
require __DIR__.'/ContainerErrQsAY/getServicesResetterService.php';
require __DIR__.'/ContainerErrQsAY/getSerializer_Mapping_CacheClassMetadataFactoryService.php';
require __DIR__.'/ContainerErrQsAY/getSerializerService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Authenticator_FormLogin_MainService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerErrQsAY/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerErrQsAY/getSecrets_VaultService.php';
require __DIR__.'/ContainerErrQsAY/getRouting_LoaderService.php';
require __DIR__.'/ContainerErrQsAY/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerErrQsAY/getPropertyInfo_CacheService.php';
require __DIR__.'/ContainerErrQsAY/getPropertyAccessorService.php';
require __DIR__.'/ContainerErrQsAY/getMimeTypesService.php';
require __DIR__.'/ContainerErrQsAY/getHttpClientService.php';
require __DIR__.'/ContainerErrQsAY/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeExtension_Password_PasswordHasherService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeExtension_Form_PasswordHasherService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerErrQsAY/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerErrQsAY/getForm_Type_FormService.php';
require __DIR__.'/ContainerErrQsAY/getForm_Type_FileService.php';
require __DIR__.'/ContainerErrQsAY/getForm_Type_EntityService.php';
require __DIR__.'/ContainerErrQsAY/getForm_Type_ColorService.php';
require __DIR__.'/ContainerErrQsAY/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerErrQsAY/getForm_ServerParamsService.php';
require __DIR__.'/ContainerErrQsAY/getForm_RegistryService.php';
require __DIR__.'/ContainerErrQsAY/getForm_Listener_PasswordHasherService.php';
require __DIR__.'/ContainerErrQsAY/getForm_FactoryService.php';
require __DIR__.'/ContainerErrQsAY/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerErrQsAY/getErrorControllerService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_SystemCachePoolService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_ResultCachePoolService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerErrQsAY/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerErrQsAY/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerErrQsAY/getContainer_GetenvService.php';
require __DIR__.'/ContainerErrQsAY/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerErrQsAY/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerErrQsAY/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerErrQsAY/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerErrQsAY/getCache_ValidatorService.php';
require __DIR__.'/ContainerErrQsAY/getCache_SystemClearerService.php';
require __DIR__.'/ContainerErrQsAY/getCache_SystemService.php';
require __DIR__.'/ContainerErrQsAY/getCache_SerializerService.php';
require __DIR__.'/ContainerErrQsAY/getCache_SecurityExpressionLanguageService.php';
require __DIR__.'/ContainerErrQsAY/getCache_PropertyInfoService.php';
require __DIR__.'/ContainerErrQsAY/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerErrQsAY/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerErrQsAY/getCache_AppClearerService.php';
require __DIR__.'/ContainerErrQsAY/getCache_AppService.php';
require __DIR__.'/ContainerErrQsAY/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerErrQsAY/getTemplateControllerService.php';
require __DIR__.'/ContainerErrQsAY/getRedirectControllerService.php';
require __DIR__.'/ContainerErrQsAY/getTimeIntervalValidatorService.php';
require __DIR__.'/ContainerErrQsAY/getWorkRecordRepositoryService.php';
require __DIR__.'/ContainerErrQsAY/getUserRepositoryService.php';
require __DIR__.'/ContainerErrQsAY/getWorkRecordTypeService.php';
require __DIR__.'/ContainerErrQsAY/getWorkRecordControllerService.php';
require __DIR__.'/ContainerErrQsAY/getOverviewControllerService.php';
require __DIR__.'/ContainerErrQsAY/getMainControllerService.php';
require __DIR__.'/ContainerErrQsAY/getLoginControllerService.php';
require __DIR__.'/ContainerErrQsAY/getEditRecordControllerService.php';
require __DIR__.'/ContainerErrQsAY/getDeleteRecordControllerService.php';
require __DIR__.'/ContainerErrQsAY/getAdminerControllerService.php';
require __DIR__.'/ContainerErrQsAY/getAdminControllerService.php';
require __DIR__.'/ContainerErrQsAY/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerErrQsAY/get_ServiceLocator_RSTd_NAService.php';
require __DIR__.'/ContainerErrQsAY/get_ServiceLocator_FaLKlJnService.php';
require __DIR__.'/ContainerErrQsAY/get_ServiceLocator_WeUTIKeService.php';
require __DIR__.'/ContainerErrQsAY/get_ServiceLocator_JhatSQqService.php';
require __DIR__.'/ContainerErrQsAY/get_ServiceLocator_CshazM0Service.php';
require __DIR__.'/ContainerErrQsAY/get_ServiceLocator_CsMkqUaService.php';
require __DIR__.'/ContainerErrQsAY/get_Security_RequestMatcher_KLbKLHaService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\AdminController';
$classes[] = 'App\Controller\AdminerController';
$classes[] = 'App\Controller\DeleteRecordController';
$classes[] = 'App\Controller\EditRecordController';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\MainController';
$classes[] = 'App\Controller\OverviewController';
$classes[] = 'App\Controller\WorkRecordController';
$classes[] = 'App\Form\WorkRecordType';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Repository\WorkRecordRepository';
$classes[] = 'App\Validator\TimeIntervalValidator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy';
$classes[] = 'Symfony\Component\Notifier\EventListener\NotificationLoggerListener';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Translation\LocaleSwitcher';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'App\Framework\VersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

$preloaded = Preloader::preload($classes);
