<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Dealer Dashboard</title>
  <style>
    /* Global Styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    /* Sidebar styling */
    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #333;
      padding-top: 20px;
    }

    .sidebar a {
      padding: 15px;
      text-decoration: none;
      font-size: 18px;
      color: white;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      background-color: #575757;
    }

    /* Main content styling */
    .main-content {
      margin-left: 260px;
      padding: 20px;
    }

    /* Section styling */
    .section {
      background-color: white;
      margin-bottom: 20px;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .section h2 {
      margin-top: 0;
    }

    /* Responsive layout for smaller screens */
    @media screen and (max-width: 600px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }

      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <a href="#profile-management">Profile Management</a>
    <a href="#book-management">Book Management</a>
    <a href="#payments">Payments</a>
  </div>

  <!-- <div class="main-content">
    <div class="section" id="profile-management">
        <h2>Profile Management</h2>
        <p>Update your profile information, upload profile picture and certificates, and manage your contact details.</p>
    </div>

    <div class="section" id="book-management">
        <h2>Book Management</h2>
        <p>Upload books for sale in both physical and PDF formats, manage book details, and update stock information.</p>
    </div>

    <div class="section" id="payments">
        <h2>Payments</h2>
        <p>Manage payments made by students for purchasing books, view transaction history, and process refunds if necessary.</p>
    </div>
</div> -->

</body>

</html>