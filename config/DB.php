<?php
class dataBase
{
    private $dbhost = 'BD_IP';
    private $dbuser = 'BD_USER';
    private $dbpassword = 'BD_PASSWD';
    private $db_name = 'BD_NAME';
    public function connDb()
    {
        $link = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword, $this->db_name);
        return $link;
    }
}