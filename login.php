<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) 
{
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "sdp");

if (isset($_POST['sign_in'])) 
{
  $firstname = $_POST['firstname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $role=$_POST['role'];

  // Check if the user already exists in the database
  if($role=="Student")
  {
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
    echo "<script>alert('Incorrect credentials. Please try again!');window.location.href='index.php';</script>";

   }
  }
  else if ($role=="Instructor")
  {
    $stmt1 = $conn->prepare("SELECT * FROM instructor WHERE firstname = ? AND password = ? AND email = ?");
    $stmt1->bind_param("sss", $firstname, $password, $email);
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    if ($result1->num_rows > 0) 
    {
      // If user is found, show welcome message
      // echo "Welcome to Home page, instructor..<br>";
      include 'instructor_dashboard.php';
    } 
    else 
    {
      echo "<script>alert('Incorrect credentials. Please try again!');window.location.href='index.php';</script>";
    }
    }
  }
  else if ($role=="Bookdeller")
  {
    $stmt2 = $conn->prepare("SELECT * FROM bookdeller WHERE firstname = ? AND password = ? AND email = ?");
    $stmt2->bind_param("sss", $firstname, $password, $email);
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    if ($result2->num_rows > 0) {
      // If user is found, show welcome message
      // echo "Welcome to Home page, bookdeller..<br>";
      include 'bookdeller_dashboard.php';
    } 
    else 
    {
      echo "<script>alert('Incorrect credentials. Please try again!');window.location.href='index.php';</script>";
    }
  }
// Close the database connection
mysqli_close($conn);
?>