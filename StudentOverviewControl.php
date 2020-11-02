<?php


class StudentOverviewControl
{
    public function render (array $GET, array $POST)
    {
        //new connection
        $connection = new Connection();
        //get function from connection.php.
        $students = $connection->getUsers();
        $path = 'studentOverview.php';
        require $path;
    }

}
