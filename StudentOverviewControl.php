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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_POST['delete_student']){
                echo "the student has been deleted";
                //Need to get the id again, can I link this to the button value?
                $id = $_POST['delete_student'];
                $connection = new Connection();
                $connection->deleteStudent($id);
            }
        }
    }


}
