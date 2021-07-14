<?php


namespace App\Controller;


use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    /**
     * ProductController constructor.
     * @param $productModel
     */
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function showdata(){

        $products = $this->productModel->getAll();

        include_once "app/View/backend/product/list.php";
    }
    public function create(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include_once "app/View/backend/product/create.php";
        }else{

            $this->productModel->createProduct($_REQUEST);
            header("location:index.php");
        }

//        if (isset($_REQUEST['createproduct']))
//        {
//            include_once "app/View/backend/product/create.php";
//            $this->productModel->createProduct($_REQUEST);
//            header("location:index.php");
//        }
    }


}