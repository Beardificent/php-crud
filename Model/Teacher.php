<?php


class Teacher extends DataBaseConnection
{

    private string $name;
    private string $email;
    private int $id;
    private string $list_of_students;
    private int $class_number;


    /**
     * Teacher constructor.
     * @param $name
     * @param $email
     * @param $list_of_students
     * @param $class_number
     */
    public function __construct($id, $name, $email, $list_of_students, $class_number)
    {

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->list_of_students = $list_of_students;
        $this->class_number = $class_number;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */


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
    public function getClassNumber(): int
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

// this function is to update to the teachers in the database

    public function update()
    {
        $handle = $this->connection()->prepare('UPDATE Teacher SET name = :name, WHERE email = : email');
        $handle->bindValue('name', $this->getName());
        $handle->bindValue('email', $this->getEmail());
        $handle->execute();

    }


    // this function is to delete a teacher from the database

    public function delete()
    {
        $handle = $this->connection()->prepare('DELETE FROM teacher WHERE name = : name');
        $handle->bindValue('id', $this->getName());
        $handle->execute();

    }


}