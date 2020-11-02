<?php


class StudentControl
{


    public function addStudent()
    {
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $class = $_POST['group'];
            $teacher = $_POST['coach'];

            $pdo->prepare("INSERT INTO student (name, email, class, teacher) VALUES ($name', '$email', '$class', '$teacher')")
        }
    }
}
