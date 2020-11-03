<?php
foreach($groups as $group){
    echo '<div class="card">
            <div class="card-header">
                '. $group['name'] . '
    </div>
            <div class="card-body">
                <h4 class="card-title"><a href="/?Class=' . $group['id'] . '">Class</a></h4>
           <p class="card-text">' . $group['location'] . '</p>
            </div>
            </div><br/>';
    echo '<input type="submit" name="edit_class" value="edit class">';
    echo '<input type="submit" name="delete_class" value="delete class">';

}