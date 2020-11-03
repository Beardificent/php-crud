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
    echo '<input type="submit" name="delete_student" value="delete student">';

}

