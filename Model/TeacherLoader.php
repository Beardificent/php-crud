<?php

Class TeacherLoader extends SuperLoader{

    public function construct(){
        foreach ($this->dataArr AS $teacherData){
            $teacherObj = new Teacher($teacherData['id'], $teacherData['name'], $teacherData['class']);
            array_push($this->objectArr, $teacherObj->getObject());
        }
    }
}
