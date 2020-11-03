<?php

if(isset($_POST["StudentSubmit"]))
{

}
elseif (isset($_POST["TeacherSubmit"]))
{

}
elseif (isset($_POST["GroupSubmit"]))
{
    $app = new GroupController();
}