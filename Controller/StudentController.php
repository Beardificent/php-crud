<?php

Class StudentController{

    public function __construct()
    {
        if($_POST["studentSubmit"] == "Delete")
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
        elseif($_POST["studentSubmit"] == "Overview"))
        {
            //do an overview query
            // include overview page
        }
        elseif($_POST["studentSubmit"] == "Edit"))
        {
            // include edit page
        }
        elseif($_POST["studentSubmit"] == "Add"))
        {
            // include add page
        }


    }


}