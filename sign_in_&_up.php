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
  die("<h1 style='color: red; font-family: emailncy fb; font-weight: bold'>Connection denied".mysqli_connect_error()."</h1>");
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $national_id = $_POST["national_id"];
    $location = $_POST["location"];
    $area_of_interest = $_POST["area_of_interest"];
    $message = $_POST["message"];
    
    // Prepare the insert statement
    $sql = "INSERT INTO mentees (fullname, email, username, password, gender, age, phone, national_id, location, area_of_interest, message)
            VALUES ('$fullname', '$email', '$username', '$password', '$gender', $age, '$phone', $national_id, '$location', '$area_of_interest', '$message')";
    
    // Execute the insert statement
    if (mysqli_query($conn, $sql)) {
        include"sign_in_&_up.html";
        echo "<h1 style='color: white; font-family: emailncy fb; font-weight: bold; padding-left: 5%'>
        Your registration has been successful!<br> Login now and enjoy MM^S services.</h1>";
    } else {
        echo "<h1 style='color: red; font-family: emailncy fb; font-weight: bold'>Your registration failed: " . mysqli_error($conn) . "</h1>";
    }
}

?>