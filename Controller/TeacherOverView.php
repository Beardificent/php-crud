<?php


class TeacherOverView
{
    public function displayTeachers()
    {

        $getTeacher = new TeacherLoader();
        $getTeacher = $getTeacher->getTeacher();


        require "View/TeacherView.php";
    }

}