<?php
class connect
{
    //thuột tính
    var $db = null;
    // Hàm tạo PDO(dsn,user,pass,array(...))
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=webshop';
        $user = 'root';
        $pass = '';
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8;"));
        } catch (\Throwable $th) {
            echo $th;
            echo "Không thành công";
        }
    }

    public function getlist($select)
    {
        $result = $this->db->query($select);
        return $result;
    }

    public function getInstance($select)
    {
        $result = $this->db->query($select);
        $result = $result->fetch();
        return $result;
    }
    
    public function exec($query)
    {
        $result = $this->db->exec($query);
        return ($result);
    }
}
