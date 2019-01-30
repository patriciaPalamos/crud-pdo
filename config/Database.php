<?php 
    class Database {
        //Database Parameters
        private $host = 'localhost';
        private $dbname = 'practice-pdo';
        private $username = 'root';
        private $password = '';
        private $conn;

        function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO('mysql:host='. $this->host . ';dbname='. $this->dbname,
                $this->username, $this->password);

                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e) {
                echo 'Connection Error: ', $e->getMessage();
            }

            return $this->conn;
        }
    }
?>