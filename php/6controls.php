<?php
$age = 20;
if ($age >= 18) {
    echo "You are an adult.\n";
} else {
    echo "You are a minor.\n";
}


$day = "Tuesday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.\n";
        break;
    case "Tuesday":
        echo "Today is Tuesday.\n";
        break;
    default:
        echo "It's not Monday or Tuesday.\n";
}

$i = 1;
while ($i <= 5) {
    echo "The number is: $i \n";
    $i++;
}

$i = 1;
do {
    echo "The number is: $i \n";
    $i++;
} while ($i <= 5);

for ($i = 1; $i <= 5; $i++) {
    echo "The number is: $i \n";
}

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $color) {
    echo "$color \n";
}
