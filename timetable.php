<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="Resources.css"> -->
</head>
<body>
    <header>
        <div class="logo">
            <!-- <img src="./images/logo.png" alt=""> -->
            <h2>SKi<span class="danger">LL</span>SAGE</h2>
        </div>
        <div class="navbar">
            <a href="index.html">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="timetable.html" class="active" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>DOMAINS</h3>
            </a> 
            <a href="exam.html">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="password.html">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn" style="display: none;">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>
    <br>
    <br>
    <br>
    <br>
<main>
    <h1>Domains Available</h1>
    <br>
            <div class="subjects">
                <div class="eg" onclick="window.location.href='../BYTEVERSE_PROJECT/webDev/Webresource.php'">
                    <span class="material-icons-sharp"><img src="/BYTEVERSE_PROJECT/images/WebDev.png" style="width: 30px; height: 30px;"></span>
                    <h2>Web Developement</h2>
                    <!-- <h2>12/14</h2> -->
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                    <small class="text-muted">% of users who liked our sessions.</small>
                </div>

                <div class="mth" onclick="window .location.href='../BYTEVERSE_PROJECT/AI_ML/AI&ML.php'">
                    <span class="material-icons-sharp"><img src="/BYTEVERSE_PROJECT/images/AI&ML.png" style="width: 30px; height: 30px;"></span>
                    <h2>App Developement</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>93%</p></div>
                    </div>
                    <small class="text-muted">% of users who liked our sessions.</small>
                </div>
                
                <div class="cs" onclick="window.location.href='../BYTEVERSE_PROJECT/dataScience/DataScienceresource.php'">
                    <span class="material-icons-sharp"><img src="/BYTEVERSE_PROJECT/images/dataScience.png" style="width: 30px; height: 30px;"></span>
                    <h2>Data Science</h2>
                    <!-- <h2>27/30</h2> -->
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>81%</p></div>
                    </div>
                    <small class="text-muted">% of users who liked our sessions.</small>
                </div>
                <div class="cg" onclick="window .location.href='../BYTEVERSE_PROJECT/appDev/AppDev.php'">
                    <span class="material-icons-sharp" ><img src="/BYTEVERSE_PROJECT/images/AppDev.png" style="width: 30px; height: 30px;"></span>
                    <h2>AI & ML</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>96%</p></div>
                    </div>
                    <small class="text-muted">% of users who liked our sessions.</small>
                </div>
                <div class="net" onclick="window.location.href='../BYTEVERSE_PROJECT/Blockchain/Blockchain.php'">
                    <span class="material-icons-sharp"><img src="/BYTEVERSE_PROJECT/images/blockchain.png" style="width: 30px; height: 30px; color:#c2c7f2;"></span>
                    <h2>BlockChain</h2>
                    <!-- <h2>25/27</h2> -->
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>92%</p></div>
                    </div>
                    <small class="text-muted">% of users who liked our sessions.</small>
                </div>
            </div>

</body>

<script src="timeTable.js"></script>
<script src="app.js"></script>
</html>