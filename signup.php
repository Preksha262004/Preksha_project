<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning Website - Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 400px;
      /* Adjust for larger screens */
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s;
    }

    .form-container:hover {
      transform: translateY(-5px);
    }

    .form-container h3 {
      text-align: center;
      color: #01579b;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .form-container label {
      display: block;
      margin: 8px 0 5px;
      color: #0277bd;
      font-size: 16px;
    }

    .form-container input[type="text"],
    .form-container input[type="password"],
    .form-container input[type="email"],
    .form-container input[type="date"] {
      width: 100%;
      padding: 12px;
      margin: 6px 0 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
    }

    .form-container input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #0288d1;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-container input[type="submit"]:hover {
      background-color: #0277bd;
    }

    .form-footer {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .form-footer a {
      color: #0288d1;
      text-decoration: none;
    }

    .form-footer a:hover {
      text-decoration: underline;
    }

    /* Responsive adjustments */
    @media (max-width: 600px) {
      body {
        padding: 0 10px;
        /* Prevents overflow on small screens */
      }

      .form-container {
        padding: 15px;
        max-width: 90vw;
        /* Makes it responsive to viewport width */
      }

      .form-container h3 {
        font-size: 22px;
      }

      .form-container input[type="text"],
      .form-container input[type="password"],
      .form-container input[type="email"],
      .form-container input[type="date"] {
        font-size: 13px;
        padding: 10px;
      }

      .form-container input[type="submit"] {
        font-size: 14px;
        padding: 10px;
      }
    }

    @media (max-width: 400px) {
      .form-container h3 {
        font-size: 20px;
      }

      .form-container input[type="submit"] {
        font-size: 12px;
        padding: 8px;
      }

      .form-container input[type="text"],
      .form-container input[type="password"],
      .form-container input[type="email"],
      .form-container input[type="date"] {
        font-size: 12px;
        padding: 8px;
      }

      .form-footer {
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h3>Sign Up</h3>
    <form action="student-login.php" method="POST">
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" required />
      </div>

      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" required />
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div class="form-group">
        <label for="number">Phone No.</label>
        <input type="text" id="number" name="number" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
      </div>

      <div class="form-group">
        <label for="edate">Registration Date</label>
        <input type="date" id="edate" name="edate" required />
      </div>

      <div class="form-group">
        <label for="dob">Birthdate</label>
        <input type="date" id="dob" name="dob" />
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Sign Up" />
      </div>
    </form>

    <div class="form-footer">
      <p>Already have an account? <a href="student-login.php">Login</a></p>
    </div>
  </div>
</body>

</html>