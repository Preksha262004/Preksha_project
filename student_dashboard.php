<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
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
    <!-- <a href="#dashboard">Dashboard</a> -->
    <a href="#course-catalog">Course Catalog</a>
    <a href="#community">Community</a>
    <a href="#profile-management">Profile Management</a>
    <a href="#feedback">Feedback</a>
    <!-- <a href="#multiple-courses">Multiple Course Selection</a> -->
    <a href="#financial-management">Financial Management</a>
    <a href="#book-management">Book Management</a>
  </div>

  <!-- <div class="main-content">
    <div class="section" id="dashboard">
        <h2>Dashboard</h2>
        <p>Personalized recommendations, course enrollments, and progress tracking for your learning journey.</p>
    </div>

    <div class="section" id="course-catalog">
        <h2>Course Catalog</h2>
        <p>Browse and search courses, read descriptions, and explore reviews to find the right course for you.</p>
    </div>

    <div class="section" id="community">
        <h2>Community</h2>
        <p>Engage in discussion forums, join groups, and message instructors and peers.</p>
    </div>

    <div class="section" id="profile-management">
        <h2>Profile Management</h2>
        <p>Update your profile, upload required documents, and manage contact details.</p>
    </div>

    <div class="section" id="feedback">
        <h2>Feedback</h2>
        <p>Provide feedback on your learning experience and help improve the platform.</p>
    </div>

    <div class="section" id="multiple-courses">
        <h2>Multiple Course Selection</h2>
        <p>Select multiple courses for learning and enroll in them at once.</p>
    </div>

    <div class="section" id="financial-management">
        <h2>Financial Management</h2>
        <p>Pay for premium courses and books through our secure payment system.</p>
    </div>

    <div class="section" id="book-management">
        <h2>Book Management</h2>
        <p>Download, view, or purchase books related to your courses.</p>
    </div>
</div> -->

</body>

</html>