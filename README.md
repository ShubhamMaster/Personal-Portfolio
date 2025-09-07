🌐 Personal Portfolio (PHP + MySQL)

This is my personal portfolio website built with PHP, MySQL, HTML, CSS, and JavaScript.
It showcases my work, skills, and resume while also including a backend tracking system that logs visitor activity.

🚀 Features
🖥️ Portfolio Pages

Home Page – Introduction and highlights

About Me – Education, experience, and background

Projects – List of projects with descriptions and links

Skills – Technical and soft skills overview

Resume – Downloadable PDF resume

Contact Form – Send direct messages via email/database

⚙️ Backend (Visitor Tracking System)

Logs visitor details (IP address, browser, device info)

Tracks which pages were visited

Records resume download activity

Measures time spent on the site

Tracks number of visits & last seen date/time

Stores analytics data in MySQL database

📊 Example Visitor Analytics
Visitor IP	Pages Visited	Resume Download	Total Visits	Last Seen
115.247.104.226	Home, Projects, Contact	✅	5	Sept 7, 2025
192.168.1.45	Home, About	❌	2	Sept 6, 2025
🛠️ Tech Stack

Frontend: HTML, CSS, JavaScript, Bootstrap

Backend: PHP (Core PHP)

Database: MySQL

Other Tools:

PHP Sessions (for tracking)

MySQL Triggers/Queries for analytics

Chart.js (for visual analytics, optional)

📂 Folder Structure
portfolio/
│── assets/             # CSS, JS, Images
│── pages/              # About, Projects, Skills, Contact
│── backend/            # Visitor tracking scripts
│   ├── track.php       # Logs visits & downloads
│   ├── analytics.php   # Analytics dashboard
│── includes/           # Navbar, Footer, DB connection
│   ├── connection.php  # Database connection file
│── index.php           # Homepage
│── resume/             # Resume PDF
│── README.md           # Documentation

⚙️ Installation & Setup

Clone Repository

git clone https://github.com/yourusername/portfolio.git
cd portfolio


Set Up Database

Create a new MySQL database (e.g., portfolio_db)

Import the provided database.sql file

Update includes/connection.php with your DB credentials:

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "portfolio_db";


Start Local Server

Place files in htdocs/ (XAMPP/LAMP)

Start Apache & MySQL

Open in browser:

http://localhost/portfolio/

📸 Screenshots

Add screenshots of your portfolio and analytics dashboard here.

🔗 Live Demo

👉 Visit My Portfolio

📧 Contact

If you’d like to connect or collaborate:

📩 Email: youremail@example.com

💼 LinkedIn: Your Profile

🐙 GitHub: @yourusername
