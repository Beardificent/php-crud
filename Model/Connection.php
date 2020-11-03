<?php

class Connection
{
    private PDO $pdo;
    private PDOStatement $handle;
    private Overview $overview;

    public function __construct()
    {
        $this->pdo = $this->openConnection();
    }

    public function openConnection(): PDO
    {
        $dbhost = "localhost";
        $dbuser = "becode";
        $dbpass = "becode123";
        $db = "becode";

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
        $student = $result->fetch();

        return $student;

    }

    public function deleteStudent()
    {
        $pdo = $this->openConnection();
        $sql = "DELETE FROM Students WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindParam(':id', $id);
        $result->execute();

    }

    public function addGroup($name, $location, $teacher)
    {

        $pdo = $this->openConnection();
        $sql ="INSERT INTO Class (name, Location) VALUES (:name, :location)";
        $result = $pdo->prepare($sql);
        $result->bindValue(':name', $name);
        $result->bindValue(':location', $location);
        $result->bindValue(':teacher', $teacher);
        $result->execute();

    }
    public function getGroup($id){
        $pdo = $this->openConnection();
        $sql ="SELECT * FROM Class  WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->bindValue(':name', $id);
        $result->execute();
        return $result->fetch();
    }

    public function getStudentsInGroup($id){
        $pdo = $this->openConnection();
        $sql ="SELECT * FROM Students  WHERE id = :id";//class_id is a placeholder for now
        $result = $pdo->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
        $result->fetchAll();


    }
    public function getGroups(){

        $pdo = $this->openConnection();
        $sql ="SELECT * FROM Class";
        $result = $pdo->prepare($sql);
        $result->execute();
        $toOverview = $result->fetchAll();
        $this->overview = new Overview();
        $array = [];
        foreach ($toOverview as $group){
            $newGroup = new Group($group['id'], $group['name'], $group['Location']);
            array_push($array, $newGroup->getGroupObj());
        } $this->overview->setSummary($array);
    }

}
