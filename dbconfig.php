<?php
class Database
{
     
    private $host = "localhost";
    private $db_name = "dbtest";
    private $username = "root";
    private $password = "cbb446bb";
    public $conn;
     
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            /*$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);*/
			$this->conn = new PDO("sqlsrv:server = tcp:bazapwa.database.windows.net,1433; Database = pwa2017", "{your_username}", "{your_password}");
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>
