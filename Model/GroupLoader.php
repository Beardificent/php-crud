<?php

Class GroupLoader extends SuperLoader{

    public function construct(){
        foreach ($this->dataArr AS $groupData){
            $groupObject = new Group($groupData['id'], $groupData['name'], $groupData['location']);
            array_push($this->objectArr, $groupObject->getObject());
        }
    }
}