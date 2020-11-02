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

}
