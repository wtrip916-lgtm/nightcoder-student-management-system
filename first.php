<?php
echo "
 _   _ _       _     _   ____          _
| \ | (_) __ _| |__ | |_|  _ \ ___  __| | ___ _ __
|  \| | |/ _` | '_ \| __| |_) / _ \/ _` |/ _ \ '__|
| |\  | | (_| | | | | |_|  __/  __/ (_| |  __/ |
|_| \_|_|\__, |_| |_|\__|_|   \___|\__,_|\___|_|
         |___/

===========================================
       STUDENT MANAGEMENT SYSTEM
             Developed by NightCoder
===========================================

";
$runAgain = true;
while ($runAgain) {
    echo "Enter your name: ";
    $name = trim(fgets(STDIN));
    echo "Enter your age: ";
    $age = (int)trim(fgets(STDIN));
    echo "Enter your id number: ";
    $hasID = (int) trim(fgets(STDIN));
    echo "Enter your marks: ";
    $marks = (float) (int) trim(fgets(STDIN));
    $loggedIn = true;
    echo "Student: " . $name . "\n";
    echo "Age: " . $age . "\n";
    echo "Marks: " . $marks . "\n";
    echo "id number: " . $hasID . "\n";
    if ($age >= 18 ) {
        echo "adult\n";
    } elseif ($age >= 13) {
        echo "teenager\n";
    } else {
        echo "child\n";
    }
    if ($age >= 18 && $hasID == 17894523) {
        echo "full access granted\n";
    } else {
        echo "limited access\n";
    }
    if ($marks >= 90) {
        echo "excellent\n";
    } elseif ($marks >= 75) {
        echo "very good\n";
    } elseif ($marks >= 50) {
        echo "pass\n";
    } else {
        echo "needs improvement\n";
    }
    if (!$loggedIn) {
        echo "please login\n";
    } else {
        echo "welcome back\n";
    }
    echo "do you want to enter another student? ( yes / no ): ";
    $choice = strtolower(trim(fgets(STDIN)));
    if ($choice == "no") {
        $runAgain = false;
        echo "byeee";
    }
}
?>
