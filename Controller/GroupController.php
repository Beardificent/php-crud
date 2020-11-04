<?php

Class GroupController{

    public function __construct()
    {
        $connection = new Connection();

        if($_POST["GroupSubmit"] == "Delete")
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
        elseif($_POST["GroupSubmit"] == "Overview")
        {
            $array = $connection->getGroupOverview()->getSelectedObjectArray();
            include 'View/groupOverview.php';
        }
        elseif($_POST["GroupSubmit"] == "Edit")
        {
            // include edit page NOT MADE YET
        }
        elseif($_POST["GroupSubmit"] == "Add")
        {
            include 'View/groupView.php';
        }


    }


}
