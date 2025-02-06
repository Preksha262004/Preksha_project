<?php
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "sdp");
  
  // Handle form submission
  if (isset($_POST['submit'])) 
  {
  $uname = $_POST['uname'];
  $password = $_POST['pass'];
  $email = $_POST['mail'];

  // Validate input
  $uname = mysqli_real_escape_string($conn, $uname);
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);

  // Check if admin exists
  $stmt = $conn->prepare("SELECT * FROM admin WHERE admin_name = ? AND email = ?");
  $stmt->bind_param("ss", $uname, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) 
  {
      // Fetch data
      $row = $result->fetch_assoc();

      // Verify password
      if ($password === $row['password']) 
      {
        //   echo "Welcome to the home page, admin!<br>";
          include 'admin_dashboard.php';
      } 
      else 
      {
          echo "Invalid password. Please try again.<br>";
      }
  } 
}

// Close database connection
$conn->close();
?>