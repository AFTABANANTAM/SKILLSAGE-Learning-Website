$(document).ready(function () {
    let params = new URLSearchParams(window.location.search);
    let score = parseInt(params.get("score")); // Ensure it's treated as a number
  
    $("#invisible-content").hide();
  
    // Beginner Level: Score 0–4
    if (score >= 0 && score <= 4) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>You're just starting your journey into app development, and that's great! Focus on building a solid foundation by learning the core concepts. Start by learning a programming language like Java or Kotlin for Android, or Swift for iOS. Dive into basic UI components, layout design, and navigation patterns. Build simple apps like a to-do list or a basic calculator to get hands-on experience. Progress will come with consistent effort and learning!</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <li><span style="font-weight:600">Learn the Basics of Programming:</span> Start with a beginner-friendly language like Java (for Android) or Swift (for iOS).</li>

      <li><span style="font-weight:600">Understand App Architecture:</span> Learn about the structure of apps, including user interfaces (UI), layouts, and navigation.</li>
  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = 
   `<ul class="info">
      <li><span style="font-weight:600">Build Simple Apps: </span> Create small, manageable projects like a to-do list or a calculator to practice basic functionality.</li>

      <li><span style="font-weight:600">Familiarize with IDEs: </span> Get comfortable with development environments like Android Studio or Xcode for building and testing your apps.</li>

      <li><span style="font-weight:600">Practice Regularly:</span> Consistent practice and exploring online tutorials will help you improve your skills and grow as a developer.</li>
    </ul>`;
    }
  
    // Intermediate Level: Score 5–8
    else if (score >= 5 && score <= 8) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>At the intermediate level, focus on mastering frameworks like React Native or Flutter for cross-platform development. Deepen your understanding of UI/UX design, integrate APIs, and learn state management techniques like Redux. Additionally, practice testing and debugging to ensure your apps are efficient, reliable, and scalable for real-world use.</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <li><span style="font-weight:600">Master a Framework/Library:</span> Learn and work with frameworks like React Native or Flutter to build cross-platform apps.</li>

      <li><span style="font-weight:600">Understand Advanced UI/UX: </span> Focus on creating polished, user-friendly interfaces with complex layouts and animations</li>
  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = 
      `<ul class="info">
      <li><span style="font-weight:600">Integrate APIs & Databases:</span>Work with RESTful APIs to fetch data and integrate with databases (e.g., Firebase, SQLite)./li>

      <li><span style="font-weight:600">Learn State Management:</span>Get comfortable with state management libraries like Redux (for React Native) to manage app states effectively.</li>

       <li><span style="font-weight:600">Test and Debug: </span> Start implementing unit tests and debugging tools to ensure your apps are robust and error-free.</li>

  </ul>`;
    }
  
    // Advanced Level: Score 9–12
    else if (score >= 9 && score <= 12) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>At the advanced level, continue pushing your boundaries by exploring cutting-edge technologies such as machine learning integration in apps, advanced architecture patterns, and optimizing performance for scalability. Focus on refining your skills with cloud services, microservices, and contributing to open-source projects to stay ahead in the field.</p>
              <p>Refer this: 👇</p>
          <ul class="info">
      <li><span style="font-weight:600">Master Native Development:</span>Deepen knowledge in iOS (Swift) and Android (Kotlin/Java), or explore cross-platform frameworks like Flutter and React Native./li>

      <li><span style="font-weight:600">Cloud Integration: </span> Learn cloud platforms (AWS, Google Cloud, Azure) for deploying and managing apps with scalability and reliability.</li>

  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = `<ul class="info">
      <li><span style="font-weight:600">App Architecture:</span>Master design patterns like MVVM, MVC, and Clean Architecture for building maintainable and scalable apps./li>

      <li><span style="font-weight:600">App Security: </span>Implement robust security practices, including encryption, secure authentication, and data privacy.</li>

       <li><span style="font-weight:600">CI/CD & Testing:  </span> Set up continuous integration/continuous deployment pipelines, and master automated testing tools for efficient development and deployment.</li>

  </ul>`;
    }
  
    // Toggle functionality
    $("#showMore").click(function () {
      if ($("#invisible-content").is(":visible")) {
        $("#invisible-content").slideUp(5000);
        $("#showMore").text("Show More");
      } else {
        $("#invisible-content").slideDown(5000);
        $("#showMore").text("Show Less");
      }
    });
  });
  