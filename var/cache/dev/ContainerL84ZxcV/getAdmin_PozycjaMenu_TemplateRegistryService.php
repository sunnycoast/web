<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'admin.pozycja_menu.template_registry' shared service.

return $this->services['admin.pozycja_menu.template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
