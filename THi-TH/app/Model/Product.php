<?php


namespace App\Model;


class Product
{
    private $mahang;
    private $tenhang;
    private $id_loaihang;
    private $gia;
    private $soluong;
    private $ngaytao;
    private $mota;


    public function __construct($tenhang, $id_loaihang, $gia, $soluong, $ngaytao, $mota)
    {
        $this->tenhang = $tenhang;
        $this->id_loaihang = $id_loaihang;
        $this->gia = $gia;
        $this->soluong = $soluong;
        $this->ngaytao = $ngaytao;
        $this->mota = $mota;
    }

    /**
     * @return mixed
     */
    public function getMahang()
    {
        return $this->mahang;
    }

    /**
     * @param mixed $mahang
     */
    public function setMahang($mahang)
    {
        $this->mahang = $mahang;
    }

    /**
     * @return mixed
     */
    public function getTenhang()
    {
        return $this->tenhang;
    }

    /**
     * @param mixed $tenhang
     */
    public function setTenhang($tenhang)
    {
        $this->tenhang = $tenhang;
    }

    /**
     * @return mixed
     */
    public function getIdLoaihang()
    {
        return $this->id_loaihang;
    }

    /**
     * @param mixed $id_loaihang
     */
    public function setIdLoaihang($id_loaihang)
    {
        $this->id_loaihang = $id_loaihang;
    }

    /**
     * @return mixed
     */
    public function getGia()
    {
        return $this->gia;
    }

    /**
     * @param mixed $gia
     */
    public function setGia($gia)
    {
        $this->gia = $gia;
    }

    /**
     * @return mixed
     */
    public function getSoluong()
    {
        return $this->soluong;
    }

    /**
     * @param mixed $soluong
     */
    public function setSoluong($soluong)
    {
        $this->soluong = $soluong;
    }

    /**
     * @return mixed
     */
    public function getNgaytao()
    {
        return $this->ngaytao;
    }

    /**
     * @param mixed $ngaytao
     */
    public function setNgaytao($ngaytao)
    {
        $this->ngaytao = $ngaytao;
    }

    /**
     * @return mixed
     */
    public function getMota()
    {
        return $this->mota;
    }

    /**
     * @param mixed $mota
     */
    public function setMota($mota)
    {
        $this->mota = $mota;
    }



}