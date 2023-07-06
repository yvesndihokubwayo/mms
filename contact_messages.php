<?php
#creating connection
$s = "localhost";
$u = "root";
$p = "";
$db = "menteementorspace";

$conn = mysqli_connect($s, $u, $p, $db);

# testing connection
if (!$conn) {
    die("<h1 style='color: red; font-family: Calibri, sans-serif; font-weight: bold;'>Connection denied: " . mysqli_connect_error() . "</h1>");
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Prepare the insert statement
    $sql = "INSERT INTO contact_messages (name, email, subject, message)
            VALUES ('$name', '$email', '$subject', '$message')";

    // Execute the insert statement
    if (mysqli_query($conn, $sql)) {
        echo "<div class='sent-message'>Your message has been sent. Thank you!</div>";
    } else {
        echo "<div class='error-message'>Error inserting data: " . mysqli_error($conn) . "</div>";
    }
}

# ...
?>
