<?php

class Connection
{
    private PDO $pdo;

    private PDOStatement $handle;
    private Overview $overview;

    private PDOStatement $result;


    public function __construct()
    {
        $this->pdo = $this->openConnection();
    }

    public function openConnection(): PDO
    {
        $dbhost = "localhost";
        $dbuser = "becode";
        $dbpass = "becode123";
        $db = "php_crud";


        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }

    public function addStudent($name, $email, $class)
    {
            $pdo = $this->openConnection();
            $sql ="INSERT INTO student (name, email, class) VALUES (:name, :email, class)";
            $result = $pdo->prepare($sql);
            $result->bindValue(':name', $name);
            $result->bindValue(':email', $email);
            $result->bindValue(':group', $class);
            $result->execute();


    }

    public function addTeacher($name ,$class)
    {
        $pdo = $this->openConnection();
        $sql ="INSERT INTO teacher (name, class) VALUES (:name, :class)";
        $result = $pdo->prepare($sql);
        $result->bindValue(':name', $name);
        $result->bindValue(':group', $class);
        $result->execute();


    }

    public function addGroup($name, $location)
    {

        $pdo = $this->openConnection();
        $sql ="INSERT INTO group (name, location) VALUES (:name, :location)";
        $result = $pdo->prepare($sql);
        $result->bindValue(':name', $name);
        $result->bindValue(':location', $location);
        $result->execute();

    }

    public function getStudentOverview()
    {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM student";
        $result = $pdo->query($sql);
        return $result->fetchAll();

    }
    public function getTeacherOverview()
    {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM teacher";
        $result = $pdo->query($sql);
        return $result->fetchAll();

    }
    public function getGroupOverview()
    {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM `group`";
        $result = $pdo->query($sql);
        return $result->fetchAll();

    }
    public function deleteStudent($id)
    {
        $pdo = $this->openConnection();
        $sql = "DELETE FROM student WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
    }
    public function deleteTeacher($id)
    {
        $pdo = $this->openConnection();
        $sql = "DELETE FROM teacher WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
    }
    public function deleteGroup($id)
    {
        $pdo = $this->openConnection();
        $sql = "DELETE FROM group WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
    }


    public function getStudentProfile($id)
    {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM student WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
        $student = $result->fetch();
        return $student;

    }
    public function getStudentsInGroup($id){
        $pdo = $this->openConnection();
        $sql ="SELECT * FROM student  WHERE id = :id";//class_id is a placeholder for now
        $result = $pdo->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
        $result->fetchAll();
    }

}
