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
			$this->conn = new PDO("sqlsrv:server = tcp:pwa.database.windows.net,1433; Database = Autotrader", "dkaluder", "Cbb446bb");
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

// PHP Data Objects(PDO) Sample Code:
		try {
			$dbc = new PDO("sqlsrv:server = tcp:pwa.database.windows.net,1433; Database = Autotrader", "dkaluder", "Cbb446bb");
			$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			print("Error connecting to SQL Server.");
			die(print_r($e));
		}