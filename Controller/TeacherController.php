<?php

Class TeacherController{

    public function __construct()
    {
        $connection = new Connection();

        if($_POST["TeacherSubmit"] == "Delete")
        {
            $connection->deleteTeacher($_POST["id"]);
        }
        elseif(isset($_POST["id"]))
        {
            //do an edit query
        }
        elseif(isset($_POST["name"]))
        {
            $connection->addTeacher($_POST["name"], $_POST["group"]);

        }
        elseif($_POST["TeacherSubmit"] == "Overview")
        {
            $array = $connection->getTeacherOverview()->getSelectedObjectArray();
            require "View/TeacherView.php";
        }
        elseif($_POST["TeacherSubmit"] == "Edit")
        {
            // include edit page
        }
        elseif($_POST["TeacherSubmit"] == "Add")
        {
            // include add page
        }


    }


}
