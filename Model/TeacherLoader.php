<?php


class TeacherLoader extends DataBaseConnection
{
    private array $Teacher;

    /**
     * TeacherLoader constructor.
     * @param array $Teacher
     */
    public function __construct()
    {
        $handle = $this->Connection()->prepare("SELECT * FROM Teacher");
        $handle->execute();
        $this->Teacher = $handle->fetchAll();
       // return $Teacher;

        // $this->Teacher = $Teacher;
    }

    /**
     * @return array
     */
    public function getTeacher(): array
    {
        return $this->Teacher;
    }

    /**
     * @param array $Teacher
     */
    public function setTeacher(array $Teacher): void
    {
        $this->Teacher = $Teacher;
    }




}

