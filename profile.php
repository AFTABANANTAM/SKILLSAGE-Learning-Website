<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Profile Update</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #74ebd5, #9face6);
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .profile-card {
      background: #fff;
      width: 100%;
      max-width: 450px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      padding: 25px;
      animation: fadeIn 1s ease;
    }

    .profile-pic {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      margin: 0 auto 20px;
      border: 4px solid #74ebd5;
      transition: transform 0.4s ease;
    }

    .profile-pic:hover {
      transform: scale(1.1);
    }

    .dropdown {
      margin-bottom: 15px;
    }

    .dropdown-toggle {
      width: 100%;
      padding: 12px;
      background: #74ebd5;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      text-align: left;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .dropdown-toggle:hover {
      background: #67d1c8;
    }

    .dropdown-content {
      display: none;
      margin-top: 10px;
      animation: slideDown 0.4s ease-in-out;
    }

    .input-group {
      margin-bottom: 12px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 2px solid #ddd;
      border-radius: 10px;
    }

    .input-group input:focus {
      border-color: #74ebd5;
      outline: none;
    }

    .update-btn {
      width: 100%;
      padding: 12px;
      background: #74ebd5;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 20px;
    }

    .update-btn:hover {
      background: #67d1c8;
      transform: translateY(-2px);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes slideDown {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="profile-card">
    <img src="https://i.pravatar.cc/100" class="profile-pic" alt="Profile Picture" />

    <!-- Basic Info -->
    <div class="dropdown">
      <button class="dropdown-toggle" onclick="toggleDropdown('basic-info')">Basic Info</button>
      <div class="dropdown-content" id="basic-info">
        <div class="input-group">
          <label for="name">Name</label>
          <input type="text" id="name" value="John Doe" />
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" value="john@example.com" />
        </div>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="dropdown">
      <button class="dropdown-toggle" onclick="toggleDropdown('contact-info')">Contact Info</button>
      <div class="dropdown-content" id="contact-info">
        <div class="input-group">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" value="+91 9876543210" />
        </div>
      </div>
    </div>

    <!-- Social Profiles -->
    <div class="dropdown">
      <button class="dropdown-toggle" onclick="toggleDropdown('social-info')">Social Profiles</button>
      <div class="dropdown-content" id="social-info">
        <div class="input-group">
          <label for="linkedin">LinkedIn</label>
          <input type="url" id="linkedin" value="https://linkedin.com/in/johndoe" />
        </div>
        <div class="input-group">
          <label for="github">GitHub</label>
          <input type="url" id="github" value="https://github.com/johndoe" />
        </div>
      </div>
    </div>

    <!-- Other Info -->
    <div class="dropdown">
      <button class="dropdown-toggle" onclick="toggleDropdown('other-info')">Other Info</button>
      <div class="dropdown-content" id="other-info">
        <div class="input-group">
          <label for="bio">Bio</label>
          <input type="text" id="bio" value="Passionate web dev from NITP." />
        </div>
        <div class="input-group">
          <label for="location">Location</label>
          <input type="text" id="location" value="Patna, India" />
        </div>
      </div>
    </div>

    <button class="update-btn" onclick="updateProfile()">Update Profile</button>
  </div>

  <script>
    function toggleDropdown(id) {
      const section = document.getElementById(id);
      section.style.display = section.style.display === 'block' ? 'none' : 'block';
    }

    function updateProfile() {
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const linkedin = document.getElementById('linkedin').value;
      const github = document.getElementById('github').value;
      const bio = document.getElementById('bio').value;
      const location = document.getElementById('location').value;

      alert(`Updated Info:\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nLinkedIn: ${linkedin}\nGitHub: ${github}\nBio: ${bio}\nLocation: ${location}`);
    }
  </script>
</body>
</html>