<?php
#creating connection
$s = "localhost";
$u = "root";
$p = "";
$db = "menteementorspace";
$conn = mysqli_connect($s, $u, $p, $db);

#testing connection
if(!$conn)
{
  die("<h1 style='color: red; font-family: emailncy fb; font-weight: bold'>Connection denied"."</h1>".mysqli_error($conn));
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare the insert statement
    $sql = "INSERT INTO mentors (name, email, password)  VALUES ('$name', '$email', '$password')";
    
    // Execute the insert statement
    if (mysqli_query($conn, $sql)) {
        echo "<h3 style='color: darkblue; font-family: emailncy fb; font-weight: bold; padding-left: 5%'; text-align: center>
        Your account was successfully created!<br> Now fill the form below and enroll at MM^S a mentor</h3>";
        include "mentors_reg.html";
        
    } else {
        echo "<h1 style='color: red; font-family: emailncy fb; font-weight: bold'>Your registration failed: " .mysqli_error($conn). "</h1>";
        echo "<h3 style='color: orange; font-family: harrington; font-size: 30px; font-weight: bold; text-align: center;'>Click of TRY AGAIN to login</h3>";
    }
}

?>