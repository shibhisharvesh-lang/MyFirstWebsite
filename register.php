<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["student_name"]);
    $email = htmlspecialchars($_POST["email"]);
    $regno = htmlspecialchars($_POST["register_number"]);
    $department = htmlspecialchars($_POST["department"]);

    echo "<h1>Registration Successful!</h1>";

    echo "Student Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Register Number: " . $regno . "<br>";
    echo "Department: " . $department . "<br>";

} else {
    echo "Invalid request";
}

?>