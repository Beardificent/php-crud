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

<form action="" method="post">
    <p>
        <label for="name">name:</label><br/>
        <input type="text" name="name" placeholder="enter your name">
    </p>
    <p>
        <label for="email">email:</label><br/>
        <input type="text" name="email" placeholder=" your email">
    </p>

    <select name="group">
        <option value="" disabled selected>Choose option</option>
        <option value="Giertz">Giertz</option>
        <option value="Lamarr">Lamarr</option>
    </select>

    <select name="coach">
        <option value="" disabled selected>Choose option</option>
        <option value="Sicco">Sicco</option>
        <option value="Koen">Koen</option>
    </select><br><br>
   <!--
   <p>
        <label for="group">group:</label><br/>
        <input type="text" name="group" placeholder="Which group do you belong too?">
    </p>
    <p>
        <label for="coach">coach:</label><br/>
        <input type="text" name="coach" placeholder="who is your coach?">
    </p>
    -->
    <input type="submit" name="submit" value="submit">
</form>



</body>
</html>
