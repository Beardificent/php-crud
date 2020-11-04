<?php


class Controller
{
    public function addTeacher() //this function was created to add teacher to the database
    {
        if (!empty($_POST['name']) && !empty($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $connection = new DataBaseConnection();
            $connection->createTeacher($name, $email);

        }

    }

    public function Render()
    {

        $this->addTeacher();

        require "View/insert.php";
    }


}