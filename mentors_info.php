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
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $diploma_degree_file = $_POST["diploma_degree_file"];
    $national_id_file = $_POST["national_id_file"];
    $cv_resume_file = $_POST["cv_resume_file"];
    $profile_photo_file = $_POST["profile_photo_file"];
    $education_level = $_POST["education_level"];
    $field_of_interest = $_POST["field_of_interest"];
    $location = $_POST["location"];
    $bio = $_POST["bio"];
    
    // Prepare the insert statement
    $sql = "INSERT INTO mentors_info (first_name, last_name, phone, age, gender, diploma_degree_file, national_id_file, cv_resume_file, profile_photo_file, education_level, field_of_interest, location, bio)
            VALUES ('$first_name', '$last_name', '$phone', '$age', '$gender', '$diploma_degree_file', '$national_id_file', '$cv_resume_file', '$profile_photo_file', '$education_level', '$field_of_interest', '$location', '$bio')";
    
    // Execute the insert statement
    if (mysqli_query($conn, $sql)) {
        echo "<h1 style='color: darkblue; font-family: emailncy fb; font-weight: bold; padding-left: 5%'>
        Your registration has been successful!<br> Login now and enjoy MM^S services.</h1>";
        include"mentors_sign_in&up.html";
    } else {
        echo "<center><h1 style='color: orange; font-family: emailncy fb; font-weight: bold'>Your registration failed: " . mysqli_error($conn) . "</h1></center>";
        echo "<center><a href='mentors_reg.html'><img src='assets/img/try_again2.png' width='600px' height='350px'></a></center>";
    }
}

?>