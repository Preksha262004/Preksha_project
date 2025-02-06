<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "sdp");

if (isset($_POST['submit'])) {
  $firstname = $_POST['uname'];
  $password = $_POST['pass'];
  $email = $_POST['mail'];

  // Check if the user already exists in the database
  $stmt = $conn->prepare("SELECT * FROM student WHERE firstname = ? AND password = ? AND email = ?");
  $stmt->bind_param("sss", $firstname, $password, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) 
  {
    // If user is found, show welcome message
    echo "Welcome to Home page, student..<br>";
    include 'student_dashboard.php';
  } 
  else 
  {
    // include 'student-login.php';
    echo "You have not Registered..";
    include 'student-login.php';

  }

}

// Close the database connection
mysqli_close($conn);
?>