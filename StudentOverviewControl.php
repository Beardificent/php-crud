<?php


class StudentOverviewControl
{
    public function render (array $GET, array $POST)
    {
        //new connection
        $connection = new Connection();
        //get function from connection.php.
        $students = $connection->getStudentOverview();
        $path = 'studentOverview.php';
        require $path;
        $this->deleteRow();
    }

    //Function doesn't work. this where i'd ask $GET to see if send = del in url to delete but it's not picking up the required page after.
    public function deleteRow()
    {
       /* if ($_GET['send'] === 'del') {
         echo "student has been deleted";
        }
       */if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST['delete_student']){
            echo "the student has been deleted";
            $id = $_GET['id'];
            $connection = new Connection();
            $connection->deleteStudent($id);
        }
    }

    }

}
