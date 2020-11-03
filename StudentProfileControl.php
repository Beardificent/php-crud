<?php


class StudentProfileControl
{
    public function render(array $GET, array $POST)
    {
        //new connection
        $connection = new Connection();
        //get function from connection.php. add intval to use integer w $_GET
        $student = $connection->getStudentProfile(intval($GET['user']));

        $path = 'studentProfile.php';
        // NEEDS TO BE THIS FUNCTION OF OVERVIEWCONTROLLER $this->checkForm($POST);
        require $path;


        $this->deleteRow();
    }

    //Function doesn't work.
    public function deleteRow()
    {
        if ($_REQUEST($_POST['delete_student'])) {
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
