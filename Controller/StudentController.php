<?php

Class StudentController{

    public function __construct()
    {
        $connection = new Connection();

        if($_POST["studentSubmit"] == "Delete")
        {
            $id = $_POST['studentSubmit'];

            $connection->deleteStudent($id);
        }
        elseif(isset($_POST["id"]))
        {
            //do an edit query
        }
        elseif(isset($_POST["name"]))
        {
            $connection->addStudent($_POST['name'], $_POST['email'], $_POST['group'], $_POST['coach']);
        }
        elseif($_POST["studentSubmit"] == "Overview")
        {
            $students = $connection->getStudentOverview();
            include 'View/studentOverview.php';
        }
        elseif($_POST["studentSubmit"] == "Edit")
        {
            // include edit page
        }
        elseif($_POST["studentSubmit"] == "Add")
        {
            require 'View/studentAddForm.php';

        }


    }


}