<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>

    <div class="container" id="container">
        <!-- Sign Up Form -->
        <div class="form-container sign-up">
            <form method="POST" action="signup_all.php">
                <h1>Create Account</h1>

                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="number" placeholder="Phone Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="date" name="edate" placeholder="Registration Date" required>
                <input type="date" name="dob" placeholder="Birthdate" required>

                
                    <div class="select">
                    <select id="role-signup" name="role" required>
                       <option value="" disabled selected>Select Role</option>
                       <option value="Student">Student</option>
                       <option value="Instructor">Instructor</option>
                       <option value="Bookdeller">Bookdeller</option>
                    </select>
                    </div>
                
                
                <button type="submit" name="sign_up">Sign Up</button>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="form-container sign-in">
            <form method="POST" action="login.php">
                <h1>Sign In</h1>
                <input type="text" name="firstname" placeholder="FirstName" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>

                <select id="role-signin" name="role" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="Student" name="Student">Student</option>
                    <option value="Instructor" name="Instructor">Instructor</option>
                    <option value="Bookdeller" name="Bookdeller">Bookdeller</option>
                </select>

                <a href="forgot-password.php">Forgot Your Password?</a>
                <button type="submit" name="sign_in">Sign In</button>
            </form>
        </div>

        <!-- Toggle Section -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
