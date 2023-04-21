<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
//
$routes = new RouteCollection();
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/products', array('controller' => 'ProductController', 'method'=>'showAction'), array()));
$routes->add('product-edit', new Route(constant('URL_SUBFOLDER') . '/edit/{id}', array('controller' => 'ProductController', 'method'=>'editAction'), array('id' => '[0-9]+')));
$routes->add('product-delete', new Route(constant('URL_SUBFOLDER') . '/delete/{id}', array('controller' => 'ProductController', 'method'=>'deleteAction'), array('id' => '[0-9]+')));
$routes->add('product-create', new Route(constant('URL_SUBFOLDER') . '/create', array('controller' => 'ProductController', 'method'=>'createAction'), array()));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));