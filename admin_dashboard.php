<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            margin-left: 260px; /* Same as the width of the sidebar */
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

            .sidebar a {float: left;}
            .main-content {margin-left: 0;}
        }
    </style>
</head>
<body>

<div class="sidebar">
    <!-- <a href="#dashboard">Dashboard</a> -->
    <a href="#user-management">User Management</a>
    <a href="#course-management">Course Management</a>
    <a href="#content-management">Content Management</a>
    <a href="#reports">Reports & Analytics</a>
    <a href="#notifications">Notification System</a>
    <a href="#settings">System Settings</a>
    <a href="#financials">Financial Management</a>
</div>

<!-- <div class="main-content">
    <div class="section" id="dashboard">
        <h2>Dashboard</h2>
        <p>View analytics, user statistics, and track course sales & revenue.</p>
    </div>

    <div class="section" id="user-management">
        <h2>User Management</h2>
        <p>Manage user accounts, roles, and permissions for students and instructors.</p>
    </div>

    <div class="section" id="course-management">
        <h2>Course Management</h2>
        <p>Approve, reject, or edit courses submitted by instructors.</p>
    </div>

    <div class="section" id="content-management">
        <h2>Content Management</h2>
        <p>Manage website content such as videos, PDFs, and other materials.</p>
    </div>

    <div class="section" id="reports">
        <h2>Reports & Analytics</h2>
        <p>Generate reports on user engagement, course sales, and revenue tracking.</p>
    </div>

    <div class="section" id="notifications">
        <h2>Notification System</h2>
        <p>Send notifications to users regarding course updates or new announcements.</p>
    </div>

    <div class="section" id="settings">
        <h2>System Settings</h2>
        <p>Manage site settings, themes, and branding to customize the platform.</p>
    </div>

    <div class="section" id="financials">
        <h2>Financial Management</h2>
        <p>Manage course payments, refunds, and financial reports for transactions.</p>
    </div>
</div> -->

</body>
</html>
