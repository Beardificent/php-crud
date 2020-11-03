<?php

Class GroupController{

    function showAllStudents(){
    $connection = new Connection();
    $connection->getGroups();
    include 'View/groupOverview.php';
    }
}