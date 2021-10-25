<?php

namespace App\Model;

use PDOException;

class BookModel
{
    private $dbConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM books";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function showDetail($id)
    {
        $sql = "SELECT * FROM books WHERE bID=$id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM books WHERE bID = :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function add($data)
    {
        $sql = "INSERT INTO books (bName, bPrice, bCategory, bDescription, bImage) VALUES (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['description']);
        $stmt->bindParam(5, $data['image']);
        $stmt->execute();
    }

    public function category($ctg)
    {
        $sql = "SELECT * FROM books WHERE bCategory =" . $ctg;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM `admin` WHERE aEmail=:email AND aPassword=:password";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function update($id, $data)
    {
        $sql = "UPDATE books SET bName= ?,bPrice= ?,bCategory= ?,bDescription= ?,bImage= ? WHERE bID =".$id;
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['description']);
        $stmt->bindParam(5, $data['image']);
        $stmt->execute();
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM books WHERE bName LIKE N'%$keyword%'";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }
}