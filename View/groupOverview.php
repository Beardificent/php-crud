<table>

    <?php foreach ($connection->getOverview()->getSummary() AS $student){
        echo "<tr><th>".$student->getFirstName()."</th><th>".$student->getLastName()."</th><th>".$student->getEmail()."</th><th><form method='get'><button type='submit' value='".$student->getId()."' name='user'>Profile</form></th>";
    } ?>

</table>