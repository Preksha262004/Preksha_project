<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "sdp");

if (isset($_POST['submit'])) {
  $firstname = $_POST['uname'];
  $password = $_POST['pass'];
  $email = $_POST['mail'];

  // Check if the user already exists in the database
  $stmt = $conn->prepare("SELECT * FROM bookdeller WHERE firstname = ? AND password = ? AND email = ?");
  $stmt->bind_param("sss", $firstname, $password, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // If user is found, show welcome message
    // echo "Welcome to Home page, bookdeller..<br>";
    include 'bookdeller_dashboard.php';
  } else {
    include 'login4.php';
  }

}

// Close the database connection
mysqli_close($conn);
?>