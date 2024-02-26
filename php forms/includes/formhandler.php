<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pet = htmlspecialchars($_POST["pet"]);

    if (empty($firstname)) {
        exit();
    }


    echo "data user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pet;

    header("Location: ../index.php");

}else {
    header("Location: ../index.php");  
}