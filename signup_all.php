<?php
   $conn = mysqli_connect("localhost", "root", "");
   if (!$conn) 
   {
       die("Connection failed: " . mysqli_connect_error());
   }
   mysqli_select_db($conn, "sdp");
   
   if (isset($_POST['sign_up'])) 
   {
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $number = $_POST['number'];
       $password = $_POST['password'];
       $rdate = $_POST['edate'];
       $dob = $_POST['dob'];
       $role=$_POST['role'];

    if($role=="Student")
    {   

       // Prepare and execute query
       $query = "INSERT INTO student (firstname, lastname, email, phone, password, register_date, dob) VALUES (?, ?, ?, ?, ?, ?, ?)";
       $stmt = $conn->prepare($query);
       $stmt->bind_param("sssssss", $firstname, $lastname, $email, $number, $password, $rdate, $dob);
       if ($stmt->execute()) 
       {
          echo "Registered successfully!..Please SignIn..";
        //   header("Location: login2.php");
        //   exit;
       } 
       else 
       {
          echo "Error: " . $stmt->error;
       }
    }
    
    else if ($role=="Instructor")
    {
        $stmt = $conn->prepare("INSERT INTO instructor (firstname, lastname, email, phone, password, register_date, dob) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $firstname, $lastname, $email, $number, $password, $rdate, $dob);
        $stmt->execute();

        // Check for errors
        if ($stmt->affected_rows > 0) 
        {
           echo "Registered successfully!..Please SignIn..";

        //    header("Location: login3.php");
        //    exit;
        } 
        else 
        {
           echo "Error: " . $stmt->error;
        }
    }

    else if($role=="Bookdeller")
    {
        $stmt = $conn->prepare("INSERT INTO bookdeller (firstname, lastname, email, phone, password, register_date, dob) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $firstname, $lastname, $email, $number, $password, $rdate, $dob);
        $stmt->execute();
      
        // Check for errors
        if ($stmt->affected_rows > 0) 
        {
          echo "Registered successfully!..Please SignIn..";
        //   header("Location: login4.php");
        //   exit;
        } 
        else 
        {
          echo "Error: " . $stmt->error;
        }
    }

    // Close the prepared statement and connection
    $stmt->close();
    mysqli_close($conn);
    }

?>