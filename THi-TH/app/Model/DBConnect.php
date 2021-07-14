<?php


namespace App\Model;


class DBConnect
{
    private $dsn;
    private $username;
    private $password;


    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=QLHH;charset=utf8";
        $this->username = "root";
        $this->password = "Nguyenngoc@123";
    }


    public function connect(){
        try {
            $conn= new \PDO($this->dsn,$this->username,$this->password);
//            echo "hello";
            return $conn;
        }
        catch (\PDOException $exception){
            die($exception->getMessage());
        }
    }


}