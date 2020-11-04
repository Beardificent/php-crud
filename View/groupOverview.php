<table>

    <?php foreach ($connection->getStudentOverview()->getSelectedObjectArray() AS $group){
        echo "<tr><th>".$group->getName()."</th><th>".$group->getLocation()."</th><th><form method='get'>";
        echo '<form action="?page=studentOverview" method="post"><button type="submit" name="Delete" value="' . $group->getId() . '">DELETE</button></form>';

    } ?>

</table>
