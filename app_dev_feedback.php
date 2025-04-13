<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="app_dev_feedback.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Poetsen+One&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script defer src="app_dev_feedback.js"></script>
  </head>
  <body>
    <!-- /*header-section*/ -->

    <h1 id="heading" class="poetsen-one-regular">Our Suggestions</h1>
    <div class="information">
      <div id="visible-content">
        <p id="visible-feedback"></p>
      </div>

      <div id="invisible-content">
        <p id="invisible-feedback"></p>
      </div>
      <span id="showMore" style="font-weight: 600">Show More</span>
    </div>

    <div id="level">
      <h1 class="poetsen-one-regular">Beginner Level</h1>
      <div id="knowledge-guide">
        <div class="content">
          <ul class="tech">
            <li> <span style="font-weight:600">Learn Programming Fundamentals</span>
                Learn a beginner-friendly language like JavaScript, Python, or Dart (for Flutter).</li>

            <li><span style="font-weight:600">Choose Your Platform</span>
                Decide between Android (Java/Kotlin), iOS (Swift), or cross-platform like Flutter or React Native.
            </li>

            <li><span style="font-weight:600">Understand UI/UX Design Basics</span>Learn to design clean, intuitive interfaces and user flows.</li>

            <li><span style="font-weight:600">Learn App Navigation</span>
                Understand screen transitions, menus, and layout organization
            </li>

            <li><span style="font-weight:600">Test and Debug Apps</span>
                Run your app on emulators or real devices and fix any issues.
            </li>

            <li><span style="font-weight:600">Handle User Input and State</span>
                Learn how to capture user input and update app data dynamically.
            </li>

            <li><span style="font-weight:600">Use APIs and JSON</span>Fetch and send data using APIs, and parse JSON responses.</li>
          </ul>
          <button id="learnMore" window.location.href='app_dev_basic.php'>View Roadmap</button>
        </div>
        <div class="image">
          <img src="basic_image.jpg" width="600" height="300" />
        </div>
      </div>
    </div>

    <div id="level">
      <h1 class="poetsen-one-regular">Intermediate Level</h1>
      <div id="knowledge-guide">
        <div class="image">
          <img src="intermediate_image.jpg" width="600" height="300" />
        </div>
        <div class="content">
          <ul class="tech">
            <li><span style="font-weight:900">State Management Mastery:</span>
                Use patterns like Provider, Bloc (Flutter) or Redux (React Native) for scalable state handling.
            </li>

            <li><span style="font-weight:900">Navigation & Routing:</span>
               Implement dynamic routing, deep linking, and navigation stacks.
            </li>

            <li><span style="font-weight:900">Authentication & Authorization:</span>
                Integrate Firebase Auth, OAuth, or JWT for user login and access control.
             </li>

             <li><span style="font-weight:900">Consume Advanced APIs:</span>
                Work with real-world APIs: payment gateways, social media logins, or maps.
             </li>

             <li><span style="font-weight:900">Responsive Design & UI Polishing:</span>
                Build adaptive UIs for various screen sizes and refine user experience.
             </li>


             <li><span style="font-weight:900">Error Handling & Debugging:</span>
                Set up proper exception handling and use tools like Flipper or Firebase Crashlytics.
            </li>

            <li><span style="font-weight:900">Database Integration:</span>
               Connect to cloud databases like Firebase Firestore or local storage like Realm or Room.
            </li>
          </ul>
          <button id="learnMore" onclick="window.location.href='app_dev_moderate.php'">View Roadmap</button>
        </div
      </div>
    </div>

    <div id="level">
      <h1 class="poetsen-one-regular">Advanced Level</h1>
      <div id="knowledge-guide">
        <div class="content">
          <ul class="tech">
            <li><span style="font-weight:900">Advanced State Management</span>
                Master complex state management libraries like Redux, Riverpod, or MobX to manage large-scale apps.</li>

            <li><span style="font-weight:900">Custom UI/UX Design</span>
                Create unique, custom UI components and advanced animations using libraries like Lottie or Framer Motion.
            </li>

            <li><span style="font-weight:900">Cross-Platform Development</span>
                Dive into cross-platform tools like Flutter, React Native, or Xamarin for writing apps that work across iOS and Android.
            </li>

            <li><span style="font-weight:900">Real-Time Data Handling</span>
                Implement real-time updates using WebSockets or Firebase Realtime Database for live data sync.</li>

            <li><span style="font-weight:900">Advanced Database Usage</span>
                Work with complex data models in SQL (PostgreSQL) or NoSQL (MongoDB) databases, and integrate offline-first strategies.
            </li>

            <li><span style="font-weight:900">CI/CD Automation</span>
                Set up Continuous Integration (CI) and Continuous Deployment (CD) pipelines using tools like Jenkins, GitLab, or Bitrise.
            </li>

            <li><span style="font-weight:900">App Performance Optimization</span>
                Use profiling tools to identify bottlenecks, optimize memory usage, and enhance app speed.</li>
          </ul>
          <button id="learnMore" onclick="window.location.href='app_dev_advanced.php'">View Roadmap</button>
        </div>
        <div class="image">
          <img src="advanced_image.jpg" width="600" height="300" />
        </div>
      </div>
    </div>
  </body>
</html>
