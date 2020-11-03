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
    echo '<input type="submit" name="edit_student" value="edit student">';
    echo '<input type="submit" name="user" value="' . $student['id'] .'" >';
    //tried creating a link as delete function, also adding a 'send = del' to be able to look in url if send === to del a
     //and only if send = del, will it delete. but it's not working as I thought it would. But think the href is the problem.
    //echo '<a href="StudentOverviewControl.php?id=' . $student['id'] . '?' . '&send=del">Delete</a>';

}

