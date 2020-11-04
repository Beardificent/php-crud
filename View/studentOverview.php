<?php
//Button to redirect to studentaddform when pressed.
echo '<form action="?page=studentAddForm" method="post"><button name="add_student"">DELETE</button></form>';

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
     //FIX: Changing input to button will make it so that the value is not displaying on the button itself.
     echo '<form action="?page=studentOverview" method="post"><button name="delete_student" value="' . $student['id'] . '">DELETE</button></form>';





}



