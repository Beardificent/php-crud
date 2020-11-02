
<?php
require_once 'StudentControl.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="StudentControl.php" method="post">
    <p>
        <label for="name">name:</label><br/>
        <input type="text" name="name" value="enter your name">
    </p>
    <p>
        <label for="email">email:</label><br/>
        <input type="text" name="email" value="enter your email">
    </p>
    <p>
        <label for="group">group:</label><br/>
        <input type="text" name="group" value="Which group do you belong too?">
    </p>
    <p>
        <label for="coach">coach:</label><br/>
        <input type="text" name="coach" value="who is your coach?">
    </p>
    <input type="submit" value="Submit">
</form>



</body>
</html>
