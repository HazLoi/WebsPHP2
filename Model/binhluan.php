<?php
class binhluan
{
    public function __construct()
    {
    }
    public function insertComments($mahh, $author, $email, $comment)
    {
        $db = new connect();

        $date = new DateTime('now');
        $dateFixed = $date->format('Y-m-d');

        $query = "INSERT INTO binhluan (mahh, author, email, comment, date)
        VALUES ($mahh, '$author', '$email', '$comment', '$dateFixed')";

        $db->exec($query);
    }

    public function getProductComments($mahh)
    {
        $db = new connect();

        $select = "SELECT * FROM binhluan WHERE mahh = $mahh ORDER BY id DESC";

        $result = $db->getlist($select);
        return $result;
    }
}
