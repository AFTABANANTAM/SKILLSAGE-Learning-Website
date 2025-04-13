<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: http://localhost:8085/mongodb_php/BYTEVERSE_PROJECT/SignUp/login.php");
    exit();
}


require_once 'C:\xampp2\htdocs\BYTEVERSE_PROJECT\vendor\autoload.php';

//connect to MongoDB Database
$databaseCollection = new MongoDB\Client;

//Cnnecting to specific database in mongoDB
$myDatabase = $databaseCollection->skillSage;

//connecting to our mongoDB Collection
$userCollection = $myDatabase->users;


$user = $userCollection->findOne(['Email' => $_SESSION['email']]);

if (!$user) {
    echo "<script>alert('User not found. Please log in again.'); window.location.href='login.php';</script>";
    session_destroy();
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo" title="University Management System">
            <!-- <img src="logo.png" alt="" > -->
            <h2>SKi<span class="danger">LL</span>SAGE</h2>
        </div>
        <div class="navbar">
            <a href="dash.php" class="active">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="timetable.php" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>DOMAINS</h3>
            </a> 
            <a href="exam.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Hackathons</h3>
            </a>
            <a href="password.php">
                <span class="material-icons-sharp"><?php echo $user['password']; ?> </span>
                <h3>Change Password</h3>
            </a>
            <a href="/mongodb_php/BYTEVERSE_PROJECT/logout.php">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>
    <div class="container">
        <aside>
            <div class="profile">
                <div class="top">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>Hey, <b><?php echo $user["Name"];?></b> </p>
                    </div>
                </div>
                <div class="about">
                    <h5>Course</h5>
                    <p><?php echo $user["Course"]?></p>
                    <h5>Contact</h5>
                    <p><?php  echo $user["Phone Number"];?></p>
                    <h5>Email</h5>
                    <p><?php  echo $user["Email"];?></p> <!--email-->
                    <h5>Designation</h5>
                    <p><?php echo $user["Designation"];?></p>
                    <br>
                    <button style="background-color: #3998c7 ; width: 120px;height: 40px; color: azure; border-radius: 10px;" onclick="window.location.href='profile.html'""> Profile Update </button>
                </div>
            </div>
        </aside>

        <main>
            <h1> Session Attended</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp"><img src="htmlicon..png" style="width: 30px; height: 30px;"></span>
                    <h3>HTML</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

                <div class="mth">
                    <span class="material-icons-sharp"><img src="cssicon..png" style="width: 30px; height: 30px;"></span>
                    <h3>CSS</h3>
                    <h2>27/29</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>93%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                
                <div class="cs">
                    <span class="material-icons-sharp"><img src="jsicon..png" style="width: 30px; height: 30px;"></span>
                    <h3> Java Script</h3>
                    <h2>27/30</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>81%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">dns</span>
                    <h3>Mongo DB</h3>
                    <h2>24/25</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>96%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="net">
                    <span class="material-icons-sharp"><img src="reacticon..png" style="width: 30px; height: 30px; color:#c2c7f2;"></span>
                    <h3>React JS </h3>
                    <h2>25/27</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>92%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>

            <div class="timetable" id="timetable">
                <div>
                    <span id="prevDay">&lt;</span>
                    <h2>Today's Timetable</h2>
                    <span id="nextDay">&gt;</span>
                </div>
                <span class="closeBtn" onclick="timeTableAll()">X</span>
                <table>
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Mentors</th>
                            <th>Subject</th>
                            <th>Language</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </main>

        <div class="right">
            <div class="announcements">
                <h2>Announcements</h2>
                <div class="updates">
                    <div class="message">
                        <p> <b>Academic</b> Summer training internship with Live Projects.</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Co-curricular</b> Global internship oportunity by Student organization.</p>
                        <small class="text-muted">10 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Examination</b> Instructions for Mid Term Examination.</p>
                        <small class="text-muted">Yesterday</small>
                    </div>
                </div>
            </div>

            <div class="leaves">
                <h2>Mentors on leave</h2>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-2.jpeg" alt=""></div>
                    <div class="info">
                        <h3>Rakesh Ranjan</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-3.jpg" alt=""></div>
                    <div class="info">
                        <h3> R K Mondal</h3>
                        <small class="text-muted">Half Day</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-4.jpg" alt=""></div>
                    <div class="info">
                        <h3> Rajib Ghosh</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="timeTable.js"></script>
    <script src="app.js"></script>
</body>
</html>