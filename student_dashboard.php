<!-- <!DOCTYPE html>
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

<body> -->

  <!-- <div class="sidebar">
    <a href="#dashboard">Dashboard</a>
    <a href="#course-catalog">Course Catalog</a>
    <!-- <a href="#community">Community</a> -->
    <a href="#profile-management">Profile Management</a>
    <!-- <a href="#feedback">Feedback</a> -->
    <a href="#multiple-courses">Your Selected Courses</a>
    <!-- <a href="#financial-management">Financial Management</a> -->
    <a href="#book-management">Book Management</a>
  <!-- </div>

  <div class="main-content">
    <div class="section" id="dashboard">
        <h2>Dashboard</h2>
        <p>Personalized recommendations, course enrollments, and progress tracking for your learning journey.</p>
    </div> -->

    <!-- <div class="section" id="course-catalog">
        <h2>Course Catalog</h2>
        <p>Browse and search courses, read descriptions, and explore reviews to find the right course for you.</p>
    </div> -->

    <!-- <div class="section" id="community">
        <h2>Community</h2>
        <p>Engage in discussion forums, join groups, and message instructors and peers.</p>
    </div> -->

    <!-- <div class="section" id="profile-management">
        <h2>Profile Management</h2>
        <p>Update your profile, upload required documents, and manage contact details.</p>
    </div> -->

    <!-- <div class="section" id="feedback">
        <h2>Feedback</h2>
        <p>Provide feedback on your learning experience and help improve the platform.</p>
    </div> -->

    <!-- <div class="section" id="multiple-courses">
        <h2>Multiple Course Selection</h2>
        <p>Select multiple courses for learning and enroll in them at once.</p>
    </div> -->

    <!-- <div class="section" id="financial-management">
        <h2>Financial Management</h2>
        <p>Pay for premium courses and books through our secure payment system.</p>
    </div> -->

    <!-- <div class="section" id="book-management">
        <h2>Book Management</h2>
        <p>Download, view, or purchase books related to your courses.</p>
    </div>  -->
<!-- </div> -->

<!-- </body> -->

<!-- </html>  -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .sidebar {
      width: 250px;
      background-color: #343a40;
      padding-top: 20px;
      height: 100vh;
      position: fixed;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .sidebar a {
      padding: 15px;
      text-decoration: none;
      font-size: 18px;
      color: white;
      display: block;
      width: 100%;
      text-align: center;
      transition: 0.3s;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .main-content {
      margin-left: 260px;
      padding: 20px;
      flex-grow: 1;
    }

    .section {
      background-color: white;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .section h2 {
      margin-top: 0;
    }

    @media screen and (max-width: 600px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Student Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#dashboard">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="#course-catalog">Course Catalog</a></li>
          <li class="nav-item"><a class="nav-link" href="#community">Community</a></li>
          <li class="nav-item"><a class="nav-link" href="#profile-management">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="#feedback">Feedback</a></li>
          <li class="nav-item"><a class="nav-link" href="#multiple-courses">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="#financial-management">Finance</a></li>
          <li class="nav-item"><a class="nav-link" href="#book-management">Books</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="main-content container mt-4">
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
  </div>
</body>
</html>
