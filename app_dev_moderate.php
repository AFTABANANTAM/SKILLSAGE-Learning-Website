<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Roadmap app beginner</title>
    <!-- Font Awesome Icons CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="app_dev_roadmap.css" />
  </head>
  <body>
    <!-- Container -->
    <div class="container">
      <!-- Vertical line -->
      <div class="vertical-line"></div>
      <!-- Box -->
      <div class="box box-left">
        <i class="fa-brands fa-android"></i>
        <!-- <i class="fa-brands fa-java"></i></i> -->
        <div class="info">
          <h2>Android Fundamentals</h2>
          <p>
            <ul>
                <li>Understand each lifecycle method </li>
                <li>Master UI design with Layouts and Views </li>
                <li>Learn explicit and Implicit Intents</li>
                <li>Learn to use Navigation Component for better fragment management</li>
                <li>Learn use of Services,BroadcastReceivers,and ContentProviders.</li>
            </ul>
          </p>
          <a href="AppDev.php">Go for Sources...</a>
        </div>
      </div>
      <div class="box box-right">
        <!-- <i class="fa-brands fa-flutter"></i> -->
        <i> <img  class="flutter" src="Flutter.png" alt="flutter"></i> 
        <div class="info">
          <h2>Flutter</h2>
          <p>
           <ul>
            <li>Master the widget tree mentality</li>
            <li>Focus on one state management approach at a tree</li>
            <li>Understand Asynchronous Programming</li>
            <li>UI/UX First,Then optimization</li>
            <li>Read Official Docs and Practice</li>
           </ul>
          </p>
          <a href="AppDev.php">Go for Sources...</a>
        </div>
      </div>
      <div class="box box-left">
        <i><img  class="apis" src="Apis.png" alt="apis"></i>
        <div class="info">
          <h2>APIs</h2>
          <p>
        <ul>
            <li>Understand REST API Basis</li>
            <li>Use Retrofit for API Calls</li>
            <li>Understand how to parse JSON into data models</li>
            <li>Learn to use coroutines with suspend function  </li>
            <li>Learn timeouts,no internet,and error resonses gracefully.</li>
        </ul>
          </p>
          <a href="AppDev.php">Go for Sources...</a>
        </div>
      
    </div>
</body>
</html>