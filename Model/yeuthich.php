<?php
class yeuthich
{
    public function __construct()
    {
    }

    public function addFavoriteProducts($mahh, $makh, $name, $color, $size, $money)
    {
        $db = new connect();

        $date = new DateTime('now');
        $dateFixed = $date->format('Y-m-d');

        $query = "INSERT INTO yeuthich (id, mahh, makh, name, color, size, money, date)
        VALUES (null ,$mahh, $makh, '$name', '$color', '$size', $money, '$dateFixed')";

        $result = $db->exec($query);
        return $result;
    }

    public function checkFavoriteProduct($mahh, $makh)
    {
        $db = new connect();

        $select = "SELECT * FROM yeuthich WHERE mahh = $mahh and makh = $makh";

        $result = $db->getInstance($select);
        return $result;
    }

    public function getMyFavoriteProducts($makh)
    {
        $db = new connect();

        $select = "SELECT * FROM yeuthich WHERE makh = $makh";

        $result = $db->getlist($select);
        return $result;
    }

    public function deleteFavoriteProduct($makh, $mahh)
    {
        $db = new connect();
        
        $delete = "DELETE FROM yeuthich WHERE makh = $makh and mahh = $mahh";

        $result = $db->exec($delete);
        
    }
}
