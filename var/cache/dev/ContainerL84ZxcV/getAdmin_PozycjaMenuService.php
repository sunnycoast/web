<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'admin.pozycja_menu' autowired service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AccessRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\FieldDescriptionRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\LifecycleHookProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\MenuBuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\ParentAdminInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\UrlGeneratorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-acl\\Model\\DomainObjectInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminTreeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdmin.php';
include_once $this->targetDirs[3].'\\src\\Admin\\PozycjaMenuAdmin.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\SecurityHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Security\\Handler\\NoopSecurityHandler.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\NativeLabelTranslatorStrategy.php';

$this->factories['admin.pozycja_menu'] = function () {
    $instance = new \App\Admin\PozycjaMenuAdmin('admin.pozycja_menu', 'App\\Entity\\PozycjaMenu', 'SonataAdminBundle:CRUD');

    $instance->setManagerType('orm');
    $instance->setModelManager(($this->services['sonata.admin.manager.orm'] ?? $this->load('getSonata_Admin_Manager_OrmService.php')));
    $instance->setFormContractor(($this->privates['sonata.admin.builder.orm_form'] ?? $this->load('getSonata_Admin_Builder_OrmFormService.php')));
    $instance->setShowBuilder(($this->privates['sonata.admin.builder.orm_show'] ?? $this->load('getSonata_Admin_Builder_OrmShowService.php')));
    $instance->setListBuilder(($this->privates['sonata.admin.builder.orm_list'] ?? $this->load('getSonata_Admin_Builder_OrmListService.php')));
    $instance->setDatagridBuilder(($this->privates['sonata.admin.builder.orm_datagrid'] ?? $this->load('getSonata_Admin_Builder_OrmDatagridService.php')));
    $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()), false);
    $instance->setConfigurationPool(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    $instance->setRouteGenerator(($this->services['sonata.admin.route.default_generator'] ?? $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')));
    $instance->setValidator(($this->services['validator'] ?? $this->getValidatorService()));
    $instance->setSecurityHandler(($this->privates['sonata.admin.security.handler.noop'] ?? $this->privates['sonata.admin.security.handler.noop'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()));
    $instance->setMenuFactory(($this->services['knp_menu.factory'] ?? $this->load('getKnpMenu_FactoryService.php')));
    $instance->setRouteBuilder(($this->services['sonata.admin.route.path_info'] ?? $this->load('getSonata_Admin_Route_PathInfoService.php')));
    $instance->setLabelTranslatorStrategy(($this->services['sonata.admin.label.strategy.native'] ?? $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()));
    $instance->setPagerType('default');
    $instance->setLabel('PozycjaMenu');
    $instance->showMosaicButton(true);
    $instance->setTemplateRegistry(($this->services['admin.pozycja_menu.template_registry'] ?? $this->load('getAdmin_PozycjaMenu_TemplateRegistryService.php')));
    $instance->setSecurityInformation(array());
    $instance->initialize();
    $instance->addExtension(($this->services['sonata.admin.event.extension'] ?? $this->load('getSonata_Admin_Event_ExtensionService.php')));
    $instance->setFormTheme(array(0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig'));
    $instance->setFilterTheme(array(0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig'));

    return $instance;
};

return $this->factories['admin.pozycja_menu']();
