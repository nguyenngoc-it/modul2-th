<?php
require __DIR__."/vendor/autoload.php";
use App\Controller\ProductController;
$productController= new ProductController();
$page= isset($_REQUEST['page'])?$_REQUEST['page']:null;
include_once "app/View/backend/layout/header.php";
try {
    switch ($page){
        case 'create-product':
            $productController->create();
            break;
        default:
            $productController->showdata();
            break;
    }
}catch (PDOException $exception){
    $exception->getMessage();
}