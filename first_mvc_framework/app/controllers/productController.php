<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    public function showAction(RouteCollection $routes)
    {
        $conn =new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error . " Das?");
        }
        $product = new Product();

        if(isset($_POST["search"])){

            $arrCustomers = $product->searchAll();
            $searchTerm = $_POST["search"];
        }
        else {
            $arrCustomers = $product->readAll();
        }

        require_once APP_ROOT . '/views/product.php';
    }

    public function editAction(int $id, RouteCollection $routes)
    {
        $conn =new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $product = new Product();
        $values = $product->getById($id);

        if (isset($_POST['done'])) {
            $product->setCompany($_POST['editCompanyName']);
            $product->setAddress($_POST['editAddress']);
            $product->setNumber($_POST['editNumber']);
            $product->setPlz($_POST['editPlz']);
            $product->setPlace($_POST['editPlace']);
            $product->setMail($_POST['editMail']);
            $product->setPhone($_POST['editPhone']);
            $product->setOk($_POST['editOk']);
            $product->setOkFirst($_POST['editOkFirst']);
            $product->setStatus($_POST['editStatus']);
            $product->save();
        }
        require_once APP_ROOT . '/views/edit.php';
    }

    public function deleteAction(int $id, RouteCollection $routes)
    {
        $product = new Product();
        $product->delete($id);
        header("location: ../products");
    }


    public function createAction(RouteCollection $routes)
    {
        $conn =new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $id = 0;

        if(isset($_POST['create'])) {
            $product = new Product();
            $product->setCompany($_POST['createCompany']);
            $product->setAddress($_POST['createAddress']);
            $product->setNumber($_POST['createStreetNumber']);
            $product->setPlz($_POST['createPlz']);
            $product->setPlace($_POST['createPlace']);
            $product->setMail($_POST['createMail']);
            $product->setPhone($_POST['createPhone']);
            $product->setOk($_POST['createOk']);
            $product->setOkFirst($_POST['createOkFirst']);
            $product->setStatus($_POST['createStatus']);
            $product->save();
        }

        require_once APP_ROOT . '/views/create.php';
    }
}

