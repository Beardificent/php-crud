<?php


class TeacherLoader extends DataBaseConnection
{
    private array $Teachers;

    /**
     * TeacherLoader constructor.
     * @param array $Teachers
     */
    //This function is to select from the teachers

    public function __construct()
    {
        $handle = $this->Connection()->prepare("SELECT * FROM Teacher");
        $handle->execute();
        $this->Teachers = $handle->fetchAll();

    }

    /**
     * @return array
     */
    public function getTeacher(): array
    {
        return $this->Teachers;
    }

    /**
     * @param array $Teacher
     */
    public function setTeacher(array $Teacher): void
    {
        $this->Teacher = $Teacher;
    }




}

