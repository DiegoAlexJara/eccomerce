<?php
class BDD
{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname;
    private $conn;

    public function __construct($dbname)
    {

        $this->dbname = $dbname;
    }

    public function connect(): mysqli|bool
    {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

            if ($this->conn->connect_error) {
                // die("Conexion Fallda" . $this->conn->connect_error);
                return false;
            }

            return $this->conn;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function disconected()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    function exequteQuery(string $query): mysqli_result|bool
    {
        try {
            $conn = $this->connect();

            if (!$conn) return false;

            $result = $conn->query($query);

            $conn->close();

            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function resultToArray(mysqli_result $result): array|null|false
    {
        return mysqli_fetch_row($result);
    }
}
