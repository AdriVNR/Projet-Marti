<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._F4eCeU' shared service.

return $this->privates['.service_locator._F4eCeU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'culture' => ['privates', '.errored..service_locator._F4eCeU.App\\Entity\\Culture', NULL, 'Cannot autowire service ".service_locator._F4eCeU": it references class "App\\Entity\\Culture" but no such service exists.'],
], [
    'culture' => 'App\\Entity\\Culture',
]);
