<?php
$num = 50;
if ($num > 50) {
    echo "number is greater than 50 \n";
} else if($num < 50) {
    echo "number is less than 50 \n";
} else {
    echo "number is 50 \n";
    
}

echo ("<br><br>");

for ($i=0; $i < 5; $i++) { 
    echo "loops varible $i <br>";
}

echo ("<br><br>");

function greet($name) {
    echo "heloo, $name <br>";
}

greet("Alice");
greet("Bob");
