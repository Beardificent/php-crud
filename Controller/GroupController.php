<?php

Class GroupController{

    public function __construct()
    {
        if($_POST["groupSubmit"] == "Delete")
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
        elseif($_POST["groupSubmit"] == "Overview")
        {
            //do an overview query
            include 'View/groupOverview.php';
        }
        elseif($_POST["groupSubmit"] == "Edit")
        {
            // include edit page
        }
        elseif($_POST["groupSubmit"] == "Add")
        {
            include 'View/groupView.php';
        }


    }


}