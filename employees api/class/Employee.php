<?php

class Employee
{
    // Connection
    private $conn;
    // Table
    private $db_table = 'employees';
    // Columns
    public $id;
    public $name;
    public $email;
    public $age;
    public $designation;
    public $created;

    // DB connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // GET ALL
    public function getEmployees()
    {
        $sqlQuery = 'SELECT * FROM ' . $this->db_table . '';
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    // CREATE
    public function createEmployee()
    {
        $sqlQuery = 'INSERT INTO ' . $this->db_table . ' SET 
        name = :name,
        email = :email,
        age = :age,
        designation = :designation,
        created = :created ';
        $stmt = $this->conn->prepare($sqlQuery);

        // Sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $this->designation = htmlspecialchars(strip_tags($this->designation));
        $this->created = htmlspecialchars(strip_tags($this->created));

        // Bind data
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':designation', $this->designation);
        $stmt->bindParam(':created', $this->created);

        // Try to execute
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // READ Single
    public function getSingleEmployee()
    {
        $sqlQuery = 'SELECT * FROM ' . $this->db_table . ' WHERE id = ? LIMIT 0,1';
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $dateRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $dateRow['name'];
        $this->email = $dateRow['email'];
        $this->age = $dateRow['age'];
        $this->designation = $dateRow['designation'];
        $this->created = $dateRow['created'];
    }

    // UPDATE 
    public function updateEmployee()
    {
        $sqlQuery = 'UPDATE ' . $this->db_table . ' SET 
        name = :name,
        email = :email,
        age = :age,
        designation = :designation, 
        created = :created
        WHERE id = :id';

        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $this->designation = htmlspecialchars(strip_tags($this->designation));
        $this->created = htmlspecialchars(strip_tags($this->created));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // bind data
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':designation', $this->designation);
        $stmt->bindParam(':created', $this->created);
        $stmt->bindParam(':id', $this->id);

        // Try to execute
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // DELETE
    public function deleteEmployee()
    {
        $sqlQuery = 'DELETE FROM ' . $this->db_table . ' WHERE id = ? ';
        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
