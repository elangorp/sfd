<?php
// Extend this class to re-use db connection
class DbConn
{
    public $conn;
    public function __construct()
    {
        require 'dbconf.php';
        $this->host = $host; // Host name
        $this->username = $username; // Mysql username
        $this->password = $password; // Mysql password
        $this->db_name = $db_name; // Database name
        
        $conn = mysql_connect($this->host,$this->username,$this->password);

        mysql_select_db($this->db_name, $conn);
    }
}

new DbConn();