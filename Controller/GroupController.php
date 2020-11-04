<?php

Class GroupController{

    public function __construct()
    {
        $connection = new Connection();

        if($_POST["groupSubmit"] == "Delete")
        {
            $connection->deleteGroup($_POST["id"]);
        }
        elseif(isset($_POST["id"]))
        {
            //do an edit query
        }
        elseif(isset($_POST["name"]))
        {
            $connection->addGroup($_POST["name"], $_POST["location"]);
        }
        elseif($_POST["groupSubmit"] == "Overview")
        {
            $array = $connection->getGroupOverview()->getSelectedObjectArray();
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