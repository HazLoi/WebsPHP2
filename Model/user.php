<?php

class user
{
    public function __construct()
    {
    }

    public function register($fullname, $phone, $email, $password)
    {

        $db = new connect();

        $insert = "INSERT INTO user (fullname, phone, email, password)
         VALUES ('$fullname', '$phone', '$email', '$password')";

        $result = $db->exec($insert);
        return $result;
    }

    public function login($email, $password)
    {

        $db = new connect();
        $select = "SELECT * FROM user where email = '$email' and password = '$password' ";

        $result = $db->getInstance($select);
        return $result;
    }

    public function checkEmail($email)
    {

        $db = new connect();
        $select = "SELECT * FROM user where email = '$email'";

        $result = $db->getInstance($select);
        return $result;
    }

    public function logout()
    {
        unset($_SESSION['makh']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        if (isset($_SESSION['cartProdcut']) && count($_SESSION['cartProduct']) > 0) {
            array_splice($_SESSION['cartProduct'], 0, count($_SESSION['cartProduct']));
        }
    }

    public function getCheckout($makh, $page)
    {
        $db = new connect();

        $index = ($page - 1) * 5;

        $select = "SELECT a.mahd, b.mahh, b.soluongmua, b.mausac, b.size, b.thanhtien, a.ngay FROM `hoadon` as a, `ct_hoadon` as b WHERE a.makh = $makh and a.mahd = b.mahd ORDER BY a.mahd DESC LIMIT $index, 5";

        $result = $db->getlist($select);
        return $result;
    }

    public function getNumCheckout($makh)
    {
        $db = new connect();

        $count = "SELECT COUNT(b.mahd) FROM `hoadon` as a, `ct_hoadon` as b WHERE a.makh = $makh and a.mahd = b.mahd";

        $result = $db->getInstance($count);

        return $result[0];
    }

    public function getByCheckout($makh, $mahd)
    {
        $db = new connect();

        $select = "SELECT a.mahd, b.mahh, b.soluongmua, b.mausac, b.size, b.thanhtien, a.ngay FROM `hoadon` as a, `ct_hoadon` as b WHERE a.makh = $makh and a.mahd = b.mahd and b.mahd = $mahd ORDER BY a.mahd DESC";

        $result = $db->getlist($select);

        return $result;
    }

    public function resetPassword($makh, $mkmoi)
    {
        $db = new connect();

        $update = "UPDATE `user` SET password = '$mkmoi' WHERE id = $makh";

        $result = $db->exec($update);

        return $result;
    }

    public function checkPassword($makh, $mk)
    {
        $db = new connect();

        $select = "SELECT * FROM user WHERE id = $makh and password = '$mk'";

        $result = $db->getInstance($select);

        return $result;

    }
}
