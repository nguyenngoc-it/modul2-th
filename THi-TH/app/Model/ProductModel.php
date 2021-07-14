<?php


namespace App\Model;


class ProductModel
{
    private $dbConnect;

    /**
     * ProductModel constructor.
     * @param $dbConnect
     */
    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAll(){

        try {
            $sql= "SELECT * FROM hanghoa
            JOIN loaihang ON hanghoa.id_loaihang=loaihang.id ";
            $stmt= $this->dbConnect->connect()->query($sql);
            $stmt->execute();

         $result = $stmt->fetchAll();

            return $this->convertAllObj($stmt->fetchAll());

        }catch (\PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function createProduct($request){


        try {
            $sql= "INSERT INTO `hanghoa`(`tenhang`, `id_loaihang`, `gia`, `soluong`, `ngaytao`, `mota`) VALUES (?,?,?,?,?,?)";
            $stmt= $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['id']);
            $stmt->bindParam(3, $request['price']);
            $stmt->bindParam(4, $request['soluong']);
            $stmt->bindParam(5, $request['date']);
            $stmt->bindParam(6, $request['mota']);
            $stmt->execute();
        }catch (\PDOException $exception)
        {
            echo  $exception->getMessage();
        }
    }


    public function convertToBobject($data){
        $product = new Product($data['tenhang'],$data['id_loaihang'],$data['gia'],$data['soluong'],$data['ngaytao'],$data['mota']);
        $product->setMahang($data['mahang']);
        return $product;
    }
    public function convertAllObj($data)
    {
        $objs=[];
        foreach ($data as $item){
            $objs[]= $this->convertToBobject($item);
        }
    }
//    public function convertToObject($data){
//
//        $product= new Product($data['tenhang'],$data['id_loaihang'],$data['gia'],$data['soluong'],$data['ngaytao'],$data['mota']);
//
//        $product->setMahang($data['mahang']);
//        return $product;
//    }
//    public function convertAllObj($data){
//        $objs=[];
//        foreach ($data as $item){
//            $objs= $this->convertToObject($item);
//        }
//        return $objs;
//    }

}