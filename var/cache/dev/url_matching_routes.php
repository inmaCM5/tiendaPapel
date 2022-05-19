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
        '/productos' => [[['_route' => 'productos', '_controller' => 'App\\Controller\\BaseController::productosGlobales'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto', '_controller' => 'App\\Controller\\BaseController::contacto'], null, null, null, false, false, null]],
        '/adminProductos' => [[['_route' => 'adminProductos', '_controller' => 'App\\Controller\\BaseController::administrarProductos'], null, null, null, false, false, null]],
        '/anadirProducto' => [[['_route' => 'anadirProducto', '_controller' => 'App\\Controller\\BaseController::anadirProducto'], null, null, null, false, false, null]],
        '/resumenCesta' => [[['_route' => 'resumenCesta', '_controller' => 'App\\Controller\\BaseController::resumenCesta'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/productosPrueba' => [[['_route' => 'app_productos_index', '_controller' => 'App\\Controller\\ProductosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/productosPrueba/new' => [[['_route' => 'app_productos_new', '_controller' => 'App\\Controller\\ProductosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registro' => [[['_route' => 'registro', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
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
                .'|/productos(?'
                    .'|/([^/]++)(*:191)'
                    .'|Prueba/([^/]++)(?'
                        .'|(*:217)'
                        .'|/edit(*:230)'
                        .'|(*:238)'
                    .')'
                .')'
                .'|/detalles/([^/]++)(*:266)'
                .'|/anadir/([^/]++)(*:290)'
                .'|/cambiarUnidades/([^/]++)(*:323)'
                .'|/eliminarProductos(?'
                    .'|Cesta/([^/]++)(*:366)'
                    .'|/([^/]++)(*:383)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'productosCat', '_controller' => 'App\\Controller\\BaseController::productos'], ['categoria'], null, null, false, true, null]],
        217 => [[['_route' => 'app_productos_show', '_controller' => 'App\\Controller\\ProductosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'app_productos_edit', '_controller' => 'App\\Controller\\ProductosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'app_productos_delete', '_controller' => 'App\\Controller\\ProductosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        266 => [[['_route' => 'detalles', '_controller' => 'App\\Controller\\BaseController::detalleProducto'], ['producto'], null, null, false, true, null]],
        290 => [[['_route' => 'anadir', '_controller' => 'App\\Controller\\BaseController::anadir'], ['idProducto'], null, null, false, true, null]],
        323 => [[['_route' => 'cambiarUnidades', '_controller' => 'App\\Controller\\BaseController::cambiarUnidades'], ['idProducto'], null, null, false, true, null]],
        366 => [[['_route' => 'eliminarProductosCesta', '_controller' => 'App\\Controller\\BaseController::eliminarProductosCesta'], ['idProducto'], null, null, false, true, null]],
        383 => [
            [['_route' => 'eliminarProductos', '_controller' => 'App\\Controller\\BaseController::eliminarProductos'], ['idProducto'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
