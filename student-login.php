<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning Website - Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
      /* Use a light background color */
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 8px;
      width: 250px;
      /* Reduced the width of the form */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .form-container h3 {
      color: #01579b;
      margin-bottom: 15px;
      /* Reduced margin to fit */
    }

    .form-container label {
      display: block;
      margin: 5px 0 3px;
      /* Reduced margin for compactness */
      color: #0277bd;
      text-align: left;
      font-size: 14px;
      /* Reduced font size for smaller form */
    }

    .form-container input[type="text"],
    .form-container input[type="password"],
    .form-container input[type="email"] {
      width: 100%;
      padding: 8px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #0288d1;
      border: none;
      color: white;
      font-size: 14px;
      /* Reduced font size for button */
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-container input[type="submit"]:hover {
      background-color: #0277bd;
    }

    .form-container p {
      margin: 10px 0;
      font-size: 13px;
      /* Reduced font size for links */
    }

    .form-container a {
      color: #0288d1;
      text-decoration: none;
    }

    .form-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h3>Login</h3>
    <form action="homestudent.php" method="POST">
      <label for="uname">Username</label>
      <input type="text" id="uname" name="uname" required />

      <label for="pass">Password</label>
      <input type="password" id="pass" name="pass" required />

      <label for="mail">Email</label>
      <input type="email" id="mail" name="mail" required />

      <input type="submit" name="submit" value="Login" />
    </form>

    <p>Don't have an account?
      <a href="signup.php">Sign Up</a>
    </p>
    <p>
      <a href="forgot2.php">Forgot password?</a>
    </p>
  </div>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn, "sdp");

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $password = $_POST['password'];
  $rdate = $_POST['edate'];
  $dob = $_POST['dob'];

  // Prepare and execute query
  $query = "INSERT INTO student (firstname, lastname, email, phone, password, register_date, dob) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("sssssss", $firstname, $lastname, $email, $number, $password, $rdate, $dob);
  if ($stmt->execute()) {
    echo "Registered successfully!";
    header("Location: student-login.php");
    exit;
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the prepared statement and connection
  $stmt->close();
  mysqli_close($conn);
}

?>