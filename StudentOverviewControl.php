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

    //Function doesn't work.
    public function deleteRow()
    {
        if (isset($_POST['delete_student'])) {
            $id = 0;

            if (!empty($_GET['id'])) {
                $id = $_REQUEST['id'];
            }

            if (!empty($_POST)) {
                // keep track post values
                $obj = new Connection();
                $obj->deleteStudent($id);
            }
        }

    }

}
