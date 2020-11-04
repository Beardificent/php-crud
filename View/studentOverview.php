<?php
//Button to redirect to studentaddform when pressed.
echo '<form action="" method="post"><button name="add_student"">CREATE NEW</button></form>';

 foreach($array AS $student){
    echo '<div class="card">
            <div class="card-header">
                '. $student->getName() . '
    </div>
            <div class="card-body">
                <h4 class="card-title"><a href="/?user=' . $student->getId() . '">Profile</a></h4>
           <p class="card-text">' . $student->getEmail() . '</p>
            </div>
            </div><br/>';

    echo '<form action="?page=editStudentForm" method="post"></form><button type="submit" name="edit_student" value="' . $_POST['name'] = $name . $_POST['email'] = $email . '">EDIT</button></form>';

    //By changing the value to $studentID, the button now says the id ofcourse. Do I need a hidden input? Nope, it works the numbers stay for now.
     //FIX: Changing input to button will make it so that the value is not displaying on the button itself.
     echo '<form action="?page=studentOverview" method="post"><button type="submit" name="delete_student" value="' . $student->getId() . '">DELETE</button></form>';





}



