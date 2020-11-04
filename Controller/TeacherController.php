<?php

Class TeacherController{

    public function __construct()
    {
        $connection = new DataBaseConnection();

        if($_POST["teacherSubmit"] == "Delete")
        {
            //do a delete query
        }
        elseif(isset($_POST["id"]))
        {
            //do an edit query
        }
        elseif(isset($_POST["name"]))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];


            $connection->createTeacher($name, $email);
        }
        elseif($_POST["teacherSubmit"] == "Overview")
        {
            $getTeacher = new TeacherLoader();
            $getTeacher = $getTeacher->getTeacher();


            require "View/TeacherView.php";
        }
        elseif($_POST["teacherSubmit"] == "Edit")
        {
            // include edit page
        }
        elseif($_POST["teacherSubmit"] == "Add")
        {
            // include add page
        }


    }


}