<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Ie2j2hx' shared service.

return $this->privates['.service_locator.Ie2j2hx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'translation' => ['privates', '.errored..service_locator.Ie2j2hx.App\\Entity\\Translation', NULL, 'Cannot autowire service ".service_locator.Ie2j2hx": it references class "App\\Entity\\Translation" but no such service exists.'],
], [
    'translation' => 'App\\Entity\\Translation',
]);
