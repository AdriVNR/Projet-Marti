<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/culture' => [[['_route' => 'culture_index', '_controller' => 'App\\Controller\\CultureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/culture/new' => [[['_route' => 'culture_new', '_controller' => 'App\\Controller\\CultureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/sk' => [[['_route' => 'app_page_kestion', '_controller' => 'App\\Controller\\PageController::Kestion'], null, null, null, false, false, null]],
        '/patient' => [[['_route' => 'patient_index', '_controller' => 'App\\Controller\\PatientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/patient/new' => [[['_route' => 'patient_new', '_controller' => 'App\\Controller\\PatientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/question' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/question/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reporting' => [[['_route' => 'reporting_index', '_controller' => 'App\\Controller\\ReportingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reporting/new' => [[['_route' => 'reporting_new', '_controller' => 'App\\Controller\\ReportingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/response' => [[['_route' => 'response_index', '_controller' => 'App\\Controller\\ResponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/response/new' => [[['_route' => 'response_new', '_controller' => 'App\\Controller\\ResponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/translation' => [[['_route' => 'translation_index', '_controller' => 'App\\Controller\\TranslationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/translation/new' => [[['_route' => 'translation_new', '_controller' => 'App\\Controller\\TranslationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/culture/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/patient/([^/]++)(?'
                    .'|(*:239)'
                    .'|/edit(*:252)'
                    .'|(*:260)'
                .')'
                .'|/question/([^/]++)(?'
                    .'|(*:290)'
                    .'|/edit(*:303)'
                    .'|(*:311)'
                .')'
                .'|/re(?'
                    .'|porting/([^/]++)(?'
                        .'|(*:345)'
                        .'|/edit(*:358)'
                        .'|(*:366)'
                    .')'
                    .'|sponse/([^/]++)(?'
                        .'|(*:393)'
                        .'|/edit(*:406)'
                        .'|(*:414)'
                    .')'
                .')'
                .'|/translation/([^/]++)(?'
                    .'|(*:448)'
                    .'|/edit(*:461)'
                    .'|(*:469)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'culture_show', '_controller' => 'App\\Controller\\CultureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'culture_edit', '_controller' => 'App\\Controller\\CultureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'culture_delete', '_controller' => 'App\\Controller\\CultureController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        239 => [[['_route' => 'patient_show', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'patient_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'patient_delete', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        290 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        303 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        311 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        345 => [[['_route' => 'reporting_show', '_controller' => 'App\\Controller\\ReportingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        358 => [[['_route' => 'reporting_edit', '_controller' => 'App\\Controller\\ReportingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        366 => [[['_route' => 'reporting_delete', '_controller' => 'App\\Controller\\ReportingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        393 => [[['_route' => 'response_show', '_controller' => 'App\\Controller\\ResponseController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        406 => [[['_route' => 'response_edit', '_controller' => 'App\\Controller\\ResponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'response_delete', '_controller' => 'App\\Controller\\ResponseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        448 => [[['_route' => 'translation_show', '_controller' => 'App\\Controller\\TranslationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'translation_edit', '_controller' => 'App\\Controller\\TranslationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        469 => [
            [['_route' => 'translation_delete', '_controller' => 'App\\Controller\\TranslationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
