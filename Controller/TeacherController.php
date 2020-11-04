<?php

Class TeacherController{

    public function __construct()
    {
        $connection = new Connection();

        if($_POST["teacherSubmit"] == "Delete")
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
        elseif($_POST["teacherSubmit"] == "Overview")
        {
            $array = $connection->getTeacherOverview()->getSelectedObjectArray();
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