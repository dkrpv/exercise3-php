<!DOCTYPE html>
<html>
<body>

<?php
/*
1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
*/

$t = date("F");
$aug = "August";

if (strcmp($t, $aug) == 0) {
    echo "It's August, so it's still holiday.";
    echo "<br>";
} else {
    echo "Not August, This is $t so i don't have any holidays";
    echo "<br>";
}

/*
2. Assign color red to a variable name $color and check to print one the following responses using if else statement 
*/

$Color = "red";

if (strcmp("red", $Color) == 0) {
    echo '<p style="Color:'.$Color.'">The color is red.</p>';
    echo "<br>";
} else {
    echo "<p style='.$color.'>The color is not red.</p>";
    echo "<br>";
}

/*
3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50
*/

function gradeStudent($grade) {
    if ($grade >= 80) {
        echo "Excellent <br>";
    } elseif ($grade >= 70 and $grade < 80) {
        echo "Great <br>";
    } elseif ($grade >= 60 and $grade < 70) {
        echo "Good <br>";
    } elseif ($grade >= 50 and $grade < 60) {
        echo "Pass <br>";
    } else {
        echo "Fail <br>";
    }

}

gradeStudent(80);

/*
4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)

*/
/* Commented this stuff out cuz running with php -S
$name = readline('Name: ');
$age = readline('Age: ');
if ($age >= 18) {
    echo "you can vote";
} else {
    echo "you cant vote";
}
*/


/*
5. Use a looping statement to construct the following pattern: 

*/

$length = 8;
$array = range(1,$length);
for ($x = 0; $x < 8; $x++) {
    echo json_encode($array) . "<br>";
    array_pop($array);
}

/*
6. Use While loop to print the following pattern: 

*/
$star = "*";
$x = 0;
while($x <= $length) {
    echo "$star <br>";
    $star = $star . "*";
    $x++;
}

?>

</body>
</html>