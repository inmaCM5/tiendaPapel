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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/productos' => [[['_route' => 'productos', '_controller' => 'App\\Controller\\BaseController::productosGlobales'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto', '_controller' => 'App\\Controller\\BaseController::contacto'], null, null, null, false, false, null]],
        '/adminProductos' => [[['_route' => 'adminProductos', '_controller' => 'App\\Controller\\BaseController::administrarProductos'], null, null, null, false, false, null]],
        '/adminCategorias' => [[['_route' => 'adminCategorias', '_controller' => 'App\\Controller\\BaseController::administrarCategorias'], null, null, null, false, false, null]],
        '/adminPedidos' => [[['_route' => 'adminPedidos', '_controller' => 'App\\Controller\\BaseController::administrarPedidos'], null, null, null, false, false, null]],
        '/resumenCesta' => [[['_route' => 'resumenCesta', '_controller' => 'App\\Controller\\BaseController::resumenCesta'], null, null, null, false, false, null]],
        '/pedido' => [[['_route' => 'pedido', '_controller' => 'App\\Controller\\BaseController::realizarPedido'], null, null, null, false, false, null]],
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
                .'|/p(?'
                    .'|roductos(?'
                        .'|/([^/]++)(*:194)'
                        .'|Prueba/([^/]++)(?'
                            .'|(*:220)'
                            .'|/edit(*:233)'
                            .'|(*:241)'
                        .')'
                    .')'
                    .'|edidosProductos/([^/]++)(*:275)'
                .')'
                .'|/detalles/([^/]++)(*:302)'
                .'|/anadir/([^/]++)(*:326)'
                .'|/c(?'
                    .'|ambiarUnidades(?'
                        .'|/([^/]++)(*:365)'
                        .'|Resumen/([^/]++)(*:389)'
                    .')'
                    .'|ompletarPedido/([^/]++)(*:421)'
                .')'
                .'|/eliminarProductosCesta/([^/]++)(*:462)'
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
        194 => [[['_route' => 'productosCat', '_controller' => 'App\\Controller\\BaseController::productos'], ['categoria'], null, null, false, true, null]],
        220 => [[['_route' => 'app_productos_show', '_controller' => 'App\\Controller\\ProductosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        233 => [[['_route' => 'app_productos_edit', '_controller' => 'App\\Controller\\ProductosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_productos_delete', '_controller' => 'App\\Controller\\ProductosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        275 => [[['_route' => 'pedidosProductos', '_controller' => 'App\\Controller\\BaseController::mostrarPedidosProductos'], ['idPedido'], null, null, false, true, null]],
        302 => [[['_route' => 'detalles', '_controller' => 'App\\Controller\\BaseController::detalleProducto'], ['producto'], null, null, false, true, null]],
        326 => [[['_route' => 'anadir', '_controller' => 'App\\Controller\\BaseController::anadir'], ['idProducto'], null, null, false, true, null]],
        365 => [[['_route' => 'cambiarUnidades', '_controller' => 'App\\Controller\\BaseController::cambiarUnidades'], ['idProducto'], null, null, false, true, null]],
        389 => [[['_route' => 'cambiarUnidadesResumen', '_controller' => 'App\\Controller\\BaseController::cambiarUnidadesResumen'], ['idProducto'], null, null, false, true, null]],
        421 => [[['_route' => 'completarPedido', '_controller' => 'App\\Controller\\BaseController::completarPedido'], ['idPedido'], null, null, false, true, null]],
        462 => [
            [['_route' => 'eliminarProductosCesta', '_controller' => 'App\\Controller\\BaseController::eliminarProductosCesta'], ['idProducto'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
