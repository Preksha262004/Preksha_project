<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn, "sdp");

$role=$_POST['role'];

if($role=="student")
{
    if (!empty($_POST['email']) && ($_POST['pass'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $sql = "UPDATE student SET password='$password' WHERE email='$email'";
        $table = mysqli_query($conn, $sql);
        if ($table) 
        {
          header("Location: index.php");
          exit;
        } 
        else 
        {
          die("Error: " . $conn->error);
        }
      }
}
else if($role=="instructor")
{
    if (!empty($_POST['email']) && ($_POST['pass'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $sql = "UPDATE instructor SET password='$password' WHERE email='$email'";
        $table = mysqli_query($conn, $sql);
        if ($table) 
        {
          header("Location: index.php");
          exit;
        } 
        else 
        {
          die("Error: " . $conn->error);
        }
      }
}
else if($role=="bookdeller")
{
    if (!empty($_POST['email']) && ($_POST['pass'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $sql = "UPDATE bookdeller SET password='$password' WHERE email='$email'";
        $table = mysqli_query($conn, $sql);
        if ($table) 
        {
          header("Location: index.php");
          exit;
        } 
        else 
        {
          die("Error: " . $conn->error);
        }
      }
}
?>