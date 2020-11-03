<?php


class Teacher extends DataBaseConnection
{
    private $name;
    private $email;
    private $list_of_students;
    private $class_number;


    /**
     * Teacher constructor.
     * @param $name
     * @param $email
     * @param $list_of_students
     * @param $class_number
     */
    public function __construct($name, $email, $list_of_students, $class_number)
    {
        $this->name = $name;
        $this->email = $email;
        $this->list_of_students = $list_of_students;
        $this->class_number = $class_number;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getListOfStudents()
    {
        return $this->list_of_students;
    }

    /**
     * @param mixed $list_of_students
     */
    public function setListOfStudents($list_of_students): void
    {
        $this->list_of_students = $list_of_students;
    }

    /**
     * @return mixed
     */
    public function getClassNumber()
    {
        return $this->class_number;
    }

    /**
     * @param mixed $class_number
     */
    public function setClassNumber($class_number): void
    {
        $this->class_number = $class_number;
    }






}