<?php

Class StudentController{

    public function __construct()
    {
        $connection = new Connection();

        if($_POST["StudentSubmit"] == "Delete")
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

        elseif($_POST["StudentSubmit"] == "Overview")
        {
            $array = $connection->getStudentOverview()->getSelectedObjectArray();
            include 'View/studentOverview.php';
        }
        elseif($_POST["StudentSubmit"] == "Edit")
        {
            // include edit page
        }
        elseif($_POST["StudentSubmit"] == "Add")
        {
            require 'View/studentAddForm.php';

        }


    }


}
