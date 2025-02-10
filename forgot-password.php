<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning Website - Forgot Password</title>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      /* background: linear-gradient(to right, #42a5f5, #1e88e5); */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: #ffffff;
      padding: 25px;
      border-radius: 10px;
      width: 300px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
      text-align: center;
      animation: fadeIn 0.5s ease-in-out;
    }

    /* Form Heading */
    .form-container h3 {
      color: #01579b;
      margin-bottom: 20px;
      font-size: 22px;
    }

    /* Label Styling */
    .form-container label {
      display: block;
      margin-bottom: 5px;
      color: #0277bd;
      text-align: left;
      font-weight: bold;
      font-size: 14px;
    }

    /* Input Field Styling */
    .form-container input[type="email"],
    .form-container input[type="password"],
    .form-container select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
      transition: border 0.3s ease-in-out;
    }

    .form-container input:focus,
    .form-container select:focus {
      border-color: #0288d1;
      outline: none;
    }

    /* Dropdown Styling */
    .form-container select {
      background-color: white;
      cursor: pointer;
    }

    /* Submit Button Styling */
    .form-container input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #0288d1;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .form-container input[type="submit"]:hover {
      background-color: #01579b;
    }

    /* Fade-In Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h3>Forgot Password</h3>
    <form action="change.php" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="pass">New Password</label>
        <input type="password" id="pass" name="pass" required />
      </div>

      <div class="form-group">
        <label for="role">Select Your Role</label>
        <select id="role" name="role" required>
          <option value="">Select your role</option>
          <option value="student">Student</option>
          <option value="instructor">Instructor</option>
          <option value="bookseller">Bookseller</option>
        </select>
      </div>

      <input type="submit" name="submit" value="Update Password" />
    </form>
  </div>
</body>

</html>
