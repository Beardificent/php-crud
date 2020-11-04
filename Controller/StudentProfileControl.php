<?php


class StudentProfileControl
{
    public function render(array $GET, array $POST)
    {
        //new connection
        $connection = new Connection();
        //get function from connection.php. add intval to use integer w $_GET
        $student = $connection->getStudentProfile(intval($GET['user']));

        $path = '../View/studentProfile.php';
        // NEEDS TO BE THIS FUNCTION OF OVERVIEWCONTROLLER $this->checkForm($POST);
        require $path;


    }


}
