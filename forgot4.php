<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning Website - Forgot Password</title>
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
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 8px;
      width: 250px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .form-container h3 {
      color: #01579b;
      margin-bottom: 15px;
    }

    .form-container label {
      display: block;
      margin: 5px 0 3px;
      color: #0277bd;
      text-align: left;
      font-size: 14px;
    }

    .form-container input[type="email"],
    .form-container input[type="password"] {
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
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-container input[type="submit"]:hover {
      background-color: #0277bd;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h3>Forgot Password</h3>
    <form action="" method="POST">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required />

      <label for="pass">New Password</label>
      <input type="password" id="pass" name="pass" required />

      <input type="submit" name="submit" value="Update Password" />
    </form>
  </div>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn, "sdp");

if (!empty($_POST['email']) && ($_POST['pass'])) {
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $sql = "UPDATE bookdeller SET password='$password' WHERE email='$email'";
  $table = mysqli_query($conn, $sql);
  if ($table) {
    header("Location: login4.php");
    exit;
  } else {
    die("Error: " . $conn->error);
  }
}
?>