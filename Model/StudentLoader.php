<?php

Class StudentLoader extends SuperLoader{

    public function construct(){
        foreach ($this->dataArr AS $studentData){
            $studentObject = new Student($studentData['id'], $studentData['name'], $studentData['email'], $studentData['class']);
            array_push($this->objectArr, $studentObject->getObject());
        }
    }
}