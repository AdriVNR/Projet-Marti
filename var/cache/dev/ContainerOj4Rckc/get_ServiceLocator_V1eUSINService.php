<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.V1eUSIN' shared service.

return $this->privates['.service_locator.V1eUSIN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cultureRepository' => ['privates', 'App\\Repository\\CultureRepository', 'getCultureRepositoryService.php', true],
    'question' => ['privates', '.errored..service_locator.V1eUSIN.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.V1eUSIN": it references class "App\\Entity\\Question" but no such service exists.'],
    'responseRepository' => ['privates', 'App\\Repository\\ResponseRepository', 'getResponseRepositoryService.php', true],
    'translationRepository' => ['privates', 'App\\Repository\\TranslationRepository', 'getTranslationRepositoryService.php', true],
], [
    'cultureRepository' => 'App\\Repository\\CultureRepository',
    'question' => 'App\\Entity\\Question',
    'responseRepository' => 'App\\Repository\\ResponseRepository',
    'translationRepository' => 'App\\Repository\\TranslationRepository',
]);
