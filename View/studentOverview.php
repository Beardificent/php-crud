<?php
 foreach($students as $student){
    echo '<div class="card">
            <div class="card-header">
                '. $student['name'] . '
    </div>
            <div class="card-body">
                <h4 class="card-title"><a href="/?user=' . $student['id'] . '">Profile</a></h4>
           <p class="card-text">' . $student['email'] . '</p>
            </div>
            </div><br/>';
    echo '<form action="" method="post"></form><input type="submit" name="edit_student" value="edit student"></form>';

    //By changing the value to $studentID, the button now says the id ofcourse. Do I need a hidden input? Nope, it works the numbers stay for now.
     echo '<form action="?page=studentOverview" method="post"><input type="submit" name="delete_student" value="' . $student['id'] . '">DELETE</form>';

    //tried creating a link as delete function, also adding a 'send = del' to be able to look in url if send === to del a
     //and only if send = del, will it delete. but it's not working as I thought it would. But think the href is the problem.
    //echo '<a href="StudentOverviewControl.php?id=' . $student['id'] . '?' . '&send=del">Delete</a>';



}
