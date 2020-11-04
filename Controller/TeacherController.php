<?php

Class TeacherController{

    public function __construct()
    {
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
            //do an add query
        }
        elseif($_POST["teacherSubmit"] == "Overview"))
        {
            //do an overview query
            // include overview page
        }
        elseif($_POST["teacherSubmit"] == "Edit"))
        {
            // include edit page
        }
        elseif($_POST["teacherSubmit"] == "Add"))
        {
            // include add page
        }


    }


}