<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.KljI1L2' shared service.

return $this->privates['.service_locator.KljI1L2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'reporting' => ['privates', '.errored..service_locator.KljI1L2.App\\Entity\\Reporting', NULL, 'Cannot autowire service ".service_locator.KljI1L2": it references class "App\\Entity\\Reporting" but no such service exists.'],
], [
    'reporting' => 'App\\Entity\\Reporting',
]);