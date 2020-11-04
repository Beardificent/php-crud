<?php

Class SuperLoader
{
    protected array $objectArr = [];
    protected array $dataArr = [];
    protected Student $student;
    protected Teacher $teacher;
    protected Group $group;

    public function __construct(array $dataArr)
    {
        $this->dataArr = $dataArr;
    }

    public function getSelectedObjectArray()
    {
        return $this->objectArr;
    }
}
