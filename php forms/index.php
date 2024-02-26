<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Favorite Pet Form</title>
</head>
<body>

<h2>Favorite Pet Form</h2>

<form action="includes/formhandler.php" method="post">
    <label for="firstname">First Name:</label><br>
    <input required type="text" id="firstname" name="firstname" required><br><br>

    <label for="lastname">Last Name:</label><br>
    <input required type="text" id="lastname" name="lastname" required><br><br>

    <label for="pet">Favorite Pet:</label><br>
    <select id="pet" name="pet">
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
        <option value="fish">Fish</option>
        <option value="none">None</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>



</body>
</html>
