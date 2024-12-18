<?php
require_once __DIR__ . "/define.php";
class Database
{
    public $connection;
    protected $servername = SERVER_NAME;
    protected $username = SERVER_USER_NAME;
    protected $password = SERVER_PASSWORD;
    protected $dbname = DB_NAME;

    function __construct()
    {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->connection, $this->dbname);
        mysqli_query($this->connection, "SET NAMES 'utf8'");
    }
}
