<?php

Class StudentController{

    public function __construct()
    {
        $connection = new Connection();

        if($_POST["studentSubmit"] == "Delete")
        {
            $connection->deleteStudent($_POST["id"]);
        }
        elseif(isset($_POST["id"]))
        {
            //do an edit query
        }
        elseif(isset($_POST["name"]))
        {
            $connection->addStudent($_POST["name"], $_POST["email"], $_POST["group"]);
        }

        elseif($_POST["studentSubmit"] == "Overview")
        {
            $array = $connection->getStudentOverview()->getSelectedObjectArray();
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