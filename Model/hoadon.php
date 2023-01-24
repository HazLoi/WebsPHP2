<?php

class hoadon
{
    public function __construct()
    {
    }

    public function insertOrder($makh)
    {
        $db = new connect();
        $date = new DateTime('now');
        $dateFixed = $date->format('Y-m-d');

        $query = "INSERT INTO hoadon (mahd, makh, ngay, tongtien)
         VALUES (null, $makh, '$dateFixed' , 0 )";
        $db->exec($query);


        $select = "SELECT mahd FROM hoadon ORDER BY mahd DESC limit 1";
        $int = $db->getInstance($select);
        return $int[0];
    }

    public function insertOrderDetail($mahd, $mahh, $soluongmua, $mausac, $size, $thanhtien)
    {
        $db = new connect();

        $query = "INSERT INTO ct_hoadon (id, mahd, mahh, soluongmua, mausac, size, thanhtien, tinhtrang) 
        VALUES (null ,$mahd, $mahh, '$soluongmua', '$mausac', '$size', '$thanhtien', '0' )";

        $db->exec($query);
    }

    public function updateOrderTotal($mahd, $tongtien)
    {
        $db = new connect();

        $query = "UPDATE hoadon SET tongtien= '$tongtien' WHERE mahd = $mahd";

        array_splice($_SESSION['cartProduct'], 0, count($_SESSION['cartProduct']));
        $db->exec($query);
    }

    public function insertUser($makh, $fullname, $phone, $email, $address1, $address2, $city, $state, $zip)
    {
        $db = new connect();

        $query = "INSERT INTO thanh_toan (id, makh, fullname, phone, email, address1, address2, city, state, zip)
        VALUES (null, $makh, '$fullname', '$phone', '$email', '$address1', '$address2', '$city', '$state', '$zip')";

        $db->exec($query);
    }
}
