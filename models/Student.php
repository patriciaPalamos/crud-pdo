<?php

    class Student {
        // DB Param
        private $conn;
        private $table = 'students';

        // Student Properties
        public $id;
        public $name;
        public $age;
        public $phone;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function read() {
            $query = 'SELECT * FROM '.$this->table.' ';

            // Prepare Statement
            $stmt = $this->conn->prepare($query);

            // Execute Query
            $stmt->execute();
            return $stmt;

        }  // End of read function

        public function create() {
            $query = 'INSERT INTO '.$this->table.' 
                        SET 
                         name = :name,
                         age = :age,
                         phone = :phone';
            
            // Prepare Statement
            $stmt = $this->conn->prepare($query);

            // Clean Data
            $this->name = htmlspecialchars(strip_tags($this->name));
            $this->age = htmlspecialchars(strip_tags($this->age));
            $this->phone = htmlspecialchars(strip_tags($this->phone));

            // Bind Data
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':age', $this->age);
            $stmt->bindParam(':phone', $this->phone);

            // Execute Query
            if($stmt->execute()) {
                return true;
            }

        }

        public function edit() {
            // Select Query
            $query = 'SELECT * FROM '.$this->table.' WHERE id = :id';

            // Prepare Statement
            $stmt = $this->conn->prepare($query);

            // Clean Data
            $this->id = htmlspecialchars(strip_tags($this->id));

            // Bind Data
            $stmt->bindParam(':id', $this->id);

            // Execute Query
            $stmt->execute();

            return $stmt;
    
        }

        public function update() {
            $query = 'UPDATE '.$this->table.' 
                        SET 
                         name = :name,
                         age = :age,
                         phone = :phone
                        WHERE
                         id = :id';
            
            // Prepare Statement
            $stmt = $this->conn->prepare($query);

            // Clean Data
            $this->id = htmlspecialchars(strip_tags($this->id));
            $this->name = htmlspecialchars(strip_tags($this->name));
            $this->age = htmlspecialchars(strip_tags($this->age));
            $this->phone = htmlspecialchars(strip_tags($this->phone));

            // Bind Data
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':age', $this->age);
            $stmt->bindParam(':phone', $this->phone);

            // Execute Query
            if($stmt->execute()) {
                return true;
            }
        }

        public function delete() {
            $query = 'DELETE FROM '.$this->table.' WHERE id = :id';
            
            // Prepate Statement
            $stmt = $this->conn->prepare($query);

            // Clean ID
            $this->id = htmlspecialchars(strip_tags($this->id));

            // Bind ID
            $stmt->bindParam(':id', $this->id);

            // Execute Query
            if($stmt->execute()) {
                return true;
            }


        }
    }

?>