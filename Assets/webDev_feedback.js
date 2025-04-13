$(document).ready(function () {
  let params = new URLSearchParams(window.location.search);
  let score = parseInt(params.get("score")); // Ensure it's treated as a number

  $("#invisible-content").hide();

  // Beginner Level: Score 0–4
  if (score >= 0 && score <= 4) {
    document.getElementById(
      "visible-feedback"
    ).innerHTML = `<p>Based on your score, you're at the beginning of your web development journey. Start by learning HTML for structure, CSS for styling, and JavaScript for interactivity. Focus on small projects to practice. Stay consistent, be curious, and take one step at a time — progress will come with practice!</p>
            <p>Refer this: 👇</p>
<ul class="info">
    <li><strong>Start with the basics:</strong>
        <ul class="sub-info">
            <li>Learn HTML: structure of a webpage using headings, paragraphs, images, and links.</li>
            <li>Dive into CSS: styling pages using colors, fonts, Flexbox, and Grid.</li>
            <li>Start JavaScript: variables, data types, functions, events, and DOM manipulation.</li>
        </ul>
    </li>
</ul>`;

    document.getElementById("invisible-feedback").innerHTML = `<ul class="info">
    <li><strong>Build simple projects:</strong>
        <ul class="sub-info">
            <li>Create a personal webpage or basic portfolio.</li>
            <li>Try building small interactive features (e.g., to-do list or quiz app).</li>
        </ul>
    </li>
    <li><strong>Learn essential tools:</strong>
        <ul class="sub-info">
            <li>Use Visual Studio Code as your code editor.</li>
            <li>Learn Git and GitHub for version control.</li>
        </ul>
    </li>
    <li><strong>Tip:</strong>
        <ul class="sub-info">
            <li>Stay consistent — practice regularly and follow tutorials.</li>
        </ul>
    </li>
</ul>`;
  }

  // Intermediate Level: Score 5–8
  else if (score >= 5 && score <= 8) {
    document.getElementById(
      "visible-feedback"
    ).innerHTML = `<p>You’re at an intermediate level! You likely have a good grasp of HTML, CSS, and JavaScript. Now is the time to explore more advanced topics and frameworks to elevate your skills.</p>
            <p>Refer this: 👇</p>
<ul class="info">
    <li><strong>Deepen your JavaScript skills:</strong>
        <ul class="sub-info">
            <li>Learn closures, promises, async/await, and ES6+ features.</li>
        </ul>
    </li>
    <li><strong>Learn a frontend framework:</strong>
        <ul class="sub-info">
            <li>Start with React (popular), or try Vue or Svelte.</li>
        </ul>
    </li>
</ul>`;

    document.getElementById("invisible-feedback").innerHTML = `<ul class="info">
    <li><strong>Start backend development:</strong>
        <ul class="sub-info">
            <li>Learn Node.js with Express, or Python with Django/Flask.</li>
            <li>Understand REST APIs, databases, and basic authentication.</li>
        </ul>
    </li>
    <li><strong>Work with tools:</strong>
        <ul class="sub-info">
            <li>Master Git and GitHub.</li>
            <li>Deploy using platforms like Vercel, Netlify, or Render.</li>
        </ul>
    </li>
    <li><strong>Tip:</strong>
        <ul class="sub-info">
            <li>Build real-world projects and join dev communities to grow.</li>
        </ul>
    </li>
</ul>`;
  }

  // Advanced Level: Score 9–12
  else if (score >= 9 && score <= 12) {
    document.getElementById(
      "visible-feedback"
    ).innerHTML = `<p>You’ve demonstrated advanced skills in web development! You likely have strong knowledge of core technologies and modern frameworks. It's time to refine your expertise and explore deeper areas of specialization.</p>
            <p>Refer this: 👇</p>
        <ul class="info">
        <li><strong>Enhance frontend skills:</strong>
        <ul class="sub-info">
            <li>Use state management (Redux, Zustand).</li>
            <li>Focus on performance, accessibility, and testing (Jest, Cypress).</li>
        </ul>
    </li>
</ul>`;

    document.getElementById("invisible-feedback").innerHTML = `<ul class="info">
    <li><strong>Master backend & DevOps:</strong>
        <ul class="sub-info">
            <li>Advanced authentication, scalable APIs, database optimization.</li>
            <li>CI/CD pipelines, containerization (Docker), and system design.</li>
        </ul>
    </li>
    <li><strong>Explore advanced topics:</strong>
        <ul class="sub-info">
            <li>WebAssembly, GraphQL, serverless architecture, and open-source contributions.</li>
        </ul>
    </li>
    <li><strong>Tip:</strong>
        <ul class="sub-info">
            <li>Keep pushing boundaries — you're ready for senior roles or specialization.</li>
        </ul>
    </li>
</ul>`;
  }

  // Toggle functionality
  $("#showMore").click(function () {
    if ($("#invisible-content").is(":visible")) {
      $("#invisible-content").slideUp(500);
      $("#showMore").text("Show More");
    } else {
      $("#invisible-content").slideDown(500);
      $("#showMore").text("Show Less");
    }
  });
});
