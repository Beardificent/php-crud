<?php

class Connection
{
    private PDO $pdo;
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

//Function to ADD STUDENTS
    public function addStudent($name, $email, $class, $teacher)
    {
        //if thingamhjies become blue add backticks.
            $pdo = $this->openConnection();
            $sql ="INSERT INTO Students (`name`, email, assigned_teacher, `group`) VALUES (:name, :email, :teacher, :group)";
            $result = $pdo->prepare($sql);
            $result->bindValue(':name', $name);
            $result->bindValue(':email', $email);
            $result->bindValue(':teacher', $teacher);
            $result->bindValue(':group', $class);
            $result->execute();

    }

    //FUNCTION TO GET ALL STUDENTS FROM DB
    public function getStudentOverview()
    {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM Students";
        $result = $pdo->query($sql);
        return $result->fetchAll();

    }

    //Function to GET to the PROFILE
    public function getStudentProfile($id)
    {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM Students WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
        return $result->fetch();


    }

    //Doesnt work.
    public function deleteStudent($id)
    {
        $pdo = $this->openConnection();
        $sql = "DELETE FROM Students WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

    }

}
