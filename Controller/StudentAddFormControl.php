<?php


class StudentAddFormControl
{
    public function render ()
    {
        $path = '../View/studentAddForm.php';
        $this->addStudentControl();
        require $path;
    }

    public function addStudentControl ()
    {
        if (isset($_POST['submit']))
        {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $class = $_POST['group'];
            $teacher = $_POST['coach'];

            $connection = new Connection();
            $connection->addStudent($name, $email, $class, $teacher);
        }
    }


}
