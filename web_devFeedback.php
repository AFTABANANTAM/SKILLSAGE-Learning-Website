<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="web_dev_feedback.css" />
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
    <script defer src="webDev_feedback.js"></script>
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
            <li>Learning the basics of HTML, CSS, and JavaScript</li>

            <li>
              Understanding the structure of a webpage (head, body, elements,
              tags)
            </li>

            <li>Practicing simple static websites and small projects</li>

            <li>
              Exploring CSS layouts (Flexbox, Grid) and basic responsive design
            </li>

            <li>
              Using beginner-friendly platforms like freeCodeCamp, The Odin
              Project, or MDN Web Docs
            </li>

            <li>
              Building confidence by replicating simple websites or UI
              components
            </li>

            <li>Focusing on consistent practice and foundational knowledge</li>
          </ul>
          <button id="learnMore" onclick="window.location.href='web_dev_basic.php'">View Roadmap</button>
        </div>
        <div class="image">
          <img src="beginner_logo.jpg" width="600" height="300" />
        </div>
      </div>
    </div>

    <div id="level">
      <h1 class="poetsen-one-regular">Intermediate Level</h1>
      <div id="knowledge-guide">
        <div class="image">
          <img src="moderate_level.png" width="600" height="300" />
        </div>
        <div class="content">
          <ul class="tech">
            <li>
              Comfortable with core web technologies and basic scripting logic
            </li>

            <li>
              Deepening JavaScript knowledge (ES6+, async/await, promises, DOM)
            </li>

            <li>Learning a frontend framework (React, Vue, or Svelte)</li>

            <li>
              Starting with backend development using Node.js + Express, Flask,
              or Django
            </li>

            <li>
              Understanding REST APIs, CRUD operations, and working with
              databases (MongoDB, PostgreSQL)
            </li>

            <li>Using Git & GitHub for version control and collaboration</li>

            <li>
              Building and deploying full-stack projects using platforms like
              Vercel, Netlify, or Render
            </li>
          </ul>
          <button id="learnMore" onclick="window.location.href='WebDevModerate.php'">View Roadmap</button>
        </div>
      </div>
    </div>

    <div id="level">
      <h1 class="poetsen-one-regular">Advanced Level</h1>
      <div id="knowledge-guide">
        <div class="content">
          <ul class="tech">
            <li>Optimizing performance, accessibility (a11y), and SEO</li>

            <li>
              Using advanced state management tools (Redux, Zustand, Context
              API)
            </li>

            <li>
              Exploring GraphQL, WebSockets, and Server-Side Rendering (SSR)
            </li>

            <li>
              Understanding DevOps basics: CI/CD, Docker, deployment workflows
            </li>

            <li>
              Writing tests using tools like Jest, Cypress, or Testing Library
            </li>

            <li>
              Contributing to open-source, mentoring, or leading team projects
            </li>

            <li>
              Keeping up with industry trends and continuously refining your
              expertise
            </li>
          </ul>
          <button id="learnMore" onclick="window.location.href='WebDevAdvanced.php'">View Roadmap</button>
        </div>
        <div class="image">
          <img src="advanced_logo.png" width="600" height="300" />
        </div>
      </div>
    </div>
  </body>
</html>
