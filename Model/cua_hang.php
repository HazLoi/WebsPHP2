<?php
class cua_hang
{
    public function __construct()
    {
    }

    public function getAllProduct()
    {
        $db = new connect();
        $select = "SELECT * FROM cua_hang";
        $result = $db->getlist($select);
        return $result;
    }

    public function getTrangThai($loaisp)
    {
        $db = new connect();
        $select = "SELECT trangthai, idhtml FROM loai_sanpham WHERE loaisp='{$loaisp}'";
        $result = $db->getlist($select);
        return $result;
    }

    public function getProduct($trangthai, $loaisp)
    {
        $db = new connect();
        $select = "SELECT * FROM cua_hang WHERE trangthai = '{$trangthai}' and loaisp='{$loaisp}'";
        $result = $db->getlist($select);
        return $result;
    }

    public function getProductSize($trangthai, $loaisp)
    {
        $db = new connect();
        $select = "SELECT distinct size FROM cua_hang WHERE trangthai = '{$trangthai}' and loaisp='{$loaisp}'";
        $result = $db->getlist($select);
        return $result;
    }

    public function getBestSellers()
    {
        $db = new connect();
        $select = "SELECT * FROM cua_hang WHERE trangthai = 'Best Sellers' ";
        $result = $db->getlist($select);
        return $result;
    }

    public function getProductId($id)
    {
        $db = new connect();

        $select = "SELECT * FROM chi_tiet_san_pham WHERE id = $id ";

        $result = $db->getInstance($select);

        return $result;
    }

    public function getAnhPhu($trangthai)
    {
        $db = new connect();
        $select = "SELECT anhsp FROM cua_hang WHERE trangthai='$trangthai' ";
        $result = $db->getInstance($select);
        return $result;
    }

    public function getSearchProduct($tensp)
    {
        $db = new connect();
        $select = "SELECT * FROM cua_hang WHERE tensp like '%$tensp%' ";
        $result = $db->getlist($select);
        return $result;
    }

    public function getProductForPage($page)
    {
        $db = new connect();

        $index = ($page - 1) * 9;

        $select = "SELECT * FROM cua_hang limit $index , 9 ";

        $result = $db->getlist($select);
        
        return $result;
    }
    
    public function getNumProducts()
    {
        $db = new connect();

        $select = "SELECT COUNT(*) FROM cua_hang";

        $result = $db->getInstance($select);

        return $result[0];
    }
}
