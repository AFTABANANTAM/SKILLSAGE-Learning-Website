# SKILLSAGE - "WHERE SKILLS MEET SAGES"

Skill Sage is a smart, interactive, and mentorship-powered web platform that offers IQ-based roadmaps tailored for different technical domains. The platform guides learners from beginner to advanced levels, provides curated learning sources, and connects them with expert mentors to resolve doubts and accelerate their journey. It is designed for both students and mentors, each having their own dashboard with dedicated functionalities.

---

## 🚀 Features

- **Student & Mentor Role-Based Registration/Login**
- **1-on-1 Mentorship Requests & Responses**
- **IQ-Based Career Path Recommendation**
- **Domain-Specific Mentor Matching**
- **Real-Time Discussion Forum for Q&A**
- **Profile Filtering by Domain, Skills, or Interests**
- **Clean UI for Students and Professionals**

---

## 🛠️ Tech Stack

| Layer       | Technology                    |
| Frontend    | HTML, CSS, JavaScript         |
| Backend     | PHP                           |
| Database    | MongoDB                       |
| Auth        | PHP Sessions                  |
| Hosting     | COMING SOON.....              |

---

## 📁 Folder Structure (Core PHP)

```
SkillSage/
├── /auth/             → register.php, login.php, logout.php
├── /dashboard/        → student_dashboard.php, mentor_dashboard.php
├── /forum/            → post.php, reply.php
├── /iq/               → test.php, result.php
├── /mentorship/       → match.php, request.php, response.php
├── /config/           → database.php
├── /assets/           → images/, css/, js/
├── index.php          → Landing page
└── README.md
```

---

## 🧠 IQ-Based Career Suggestion Logic

- User takes a basic IQ/aptitude test
- Based on score ranges, user gets a **suggested career roadmap**
- Mapped domains:
  - Web and App Development 
  - AI&ML and Data Science
  - BlockChain

---

## 🧪 Database Tables

| Table Name       | Purpose                         |
|------------------|---------------------------------|
| users            | Stores student & mentor info    |
| iq_results       | IQ test scores + suggested path |
| requests         | Mentorship connection requests  |
| forum_posts      | Forum questions                 |
| forum_replies    | Replies to posts                |

---

## 🧑‍💻 How to Run Locally

1. **Clone the Repository**

```bash
git clone https://github.com/AFTABANANTAM/SkillSage.git
```

2. **Set Up PHP Environment**
   - Use [XAMPP](https://www.apachefriends.org/index.html).
   - Place project folder in `htdocs` or `www`

3. **Create MongoDB Database**
   - Import the provided `skillsage.sql` file (if available)
   - Update database credentials in `/config/database.php`

4. **Run the Project**
   - Features Coming Soon

---

## 📸 Screenshots (Optional)

- Insert dashboard, forum, mentor profile images, etc.

---

## ✅ Future Improvements

- Websites Link Soon
- Database and Authentication Coming Soon..

---

## 🤝 Contribution Guidelines

1. Fork the repo and create your branch: `git checkout -b feature/feature-name`
2. Commit your changes: `git commit -m 'Add feature'`
3. Push to the branch: `git push origin feature/feature-name`
4. Submit a pull request

---

## 📬 Contact

For questions or contributions:  
Email:  dikshab.ug24.cs@nitp.ac.in
---

## ⭐ License

This project is open-source under the [MIT License](LICENSE).

