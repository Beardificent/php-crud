<?php


declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require "Model/DataBaseConnection.php";
require "Model/TeacherLoader.php";
require "Controller/Controller.php";



if (isset($_GET['page']) && $_GET['page'] == "insert") {
    $Teacher = new TeacherLoader();
    $Teacher->getTeacher();
} else  {
    $Controller = new Controller();
    $Controller->Render();
}






