<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


if(isset($_POST["StudentSubmit"]))
{
    $app = new StudentController();
}
elseif (isset($_POST["TeacherSubmit"]))
{
    $app = new TeacherController();
}
elseif (isset($_POST["GroupSubmit"]))
{
    $app = new GroupController();
}








if (isset($_GET['page']) && $_GET['page'] == "insert") {
    $TeacherOverView = new TeacherOverView();
    $TeacherOverView->displayTeachers();

} elseif (isset($_GET['user'])) {
    $Teacher = new TeacherLoader();
    $Teacher->getTeacher();

} else {
    $Controller = new Controller();
    $Controller->Render();
}






