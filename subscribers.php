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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $email = $_POST['email'];
  
  }


// Save data to database
$sql = "INSERT INTO subscribers(email) VALUES ('$email')";
$result = mysqli_query($conn, $sql);

if ($result) {
  //echo "Your subscription has been well received with thanks";
  include"index.php";
} else {
  echo "Error: " . mysqli_error($conn);
  echo "Your subsciption was not successfully sent. Please try again.";
}

mysqli_close($conn);
// Check if data is saved successfully
    if ($result) {
      // Display profile information
      echo "<p><strong>Your email:</strong> $email</p>";

    } else {
      // Display error message
      echo "Error: " . mysqli_error($conn);
    }
?>