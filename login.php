
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="Assets/login.css" />
    <title>Login Page | Caged coder</title>
  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
      <form action="http://localhost:8085/mongodb_php/BYTEVERSE_PROJECT/SignUp/login.php" method="POST">
  <h1>Create Account</h1>
  <span>or use your email for registration</span>

  <input type="text" placeholder="Name" name="name" required />
  <input type="email" placeholder="Email" name="email" required />
  <input type="text" placeholder="Course" name="course" required />
  <input type="number" placeholder="Phone Number" name="phone" required />

  <select name="student" id="student" style="border:none;outline:none;width:300px" required>
    <option value="student">Student</option>
    <option value="mentor">Mentor</option>
  </select>

  <input type="password" placeholder="Password" name="password" required />
  <input type="submit" name="signup" value="SignUp">
</form>
      </div>
      <div class="form-container sign-in">
      <form action="http://localhost:8085/mongodb_php/BYTEVERSE_PROJECT/SignUp/login.php" method="POST">
  <h1>Sign In</h1>
  <div class="social-icons">
    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
  </div>
  <span>or use your email password</span>

  <input type="email" placeholder="Email" name="email" required />
  <input type="password" placeholder="Password" name="password" required />
  <a href="#">Forget Your Password?</a>

  <input type="submit" name="signin" value="SignIn">
</form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello, Friend!</h1>
            <p>
              Register with your personal details to use all of site features
            </p>
            <button class="hidden" id="register">Sign Up </button>
          </div>
        </div>
      </div>
    </div>

    <script src="Assets/login.js"></script>
  </body>
</html>
<?php
session_start();

require 'C:\xampp2\htdocs\mongodb_php\vendor\autoload.php';

// Connect to MongoDB
$client = new MongoDB\Client;
$database = $client->skillSage;
$users = $database->users;

// SIGNUP Handling
if (isset($_POST['signup'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $phone = $_POST["phone"];
    $designation = $_POST["student"];
    $password = sha1($_POST["password"]);

    // Check if user already exists
    $existingUser = $users->findOne(['Email' => $email]);
    if ($existingUser) {
        echo "<script>alert('User already exists! Try signing in.'); window.location.href='login.php';</script>";
        exit();
    }

    $userData = [
        "Name" => $name,
        "Email" => $email,
        "Course" => $course,
        "Phone Number" => $phone,
        "password" => $password,
        "Designation" => $designation
    ];

    $insertResult = $users->insertOne($userData);

    if ($insertResult->getInsertedCount() > 0) {
        // Set session
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['course'] = $course;
        $_SESSION['phone'] = $phone;
        $_SESSION['designation'] = $designation;
        $_SESSION['password'] = $password;
        header("Location: http://localhost:8085/mongodb_php/User_Dashboard/dash.php");
        exit();
    } else {
        echo "<script>alert('Registration failed. Try again.');</script>";
    }
}

// SIGNIN Handling
if (isset($_POST['signin'])) {
    $email = $_POST["email"];
    $password = sha1($_POST["password"]);

    $user = $users->findOne(["Email" => $email, "password" => $password]);

    if ($user) {
        $_SESSION['email'] = $user['Email'];
        $_SESSION['name'] = $user['Name'];
        $_SESSION['course'] = $user['Course'];
        $_SESSION['phone'] = $user['Phone Number'];
        $_SESSION['designation'] = $user['Designation'];

        header("Location: http://localhost:8085/mongodb_php/User_Dashboard/dash.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password.'); window.location.href='login.php';</script>";
        exit();
    }
}
?>
