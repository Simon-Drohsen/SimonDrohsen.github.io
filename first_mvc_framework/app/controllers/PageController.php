<?php

namespace App\controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        $routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());

        require_once APP_ROOT . '/views/home.php';

        $routeToEdit = str_replace('{id}', 1, $routes->get('product-edit')->getPath());

        require_once APP_ROOT . '/views/home.php';

        //$routeToDelete = str_replace('{id}', 3, $routes->get('product-delete')->getPath());

        // require_once APP_ROOT . '/views/home.php';
    }
}