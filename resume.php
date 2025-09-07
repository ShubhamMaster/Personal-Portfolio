<?php
$skills = json_decode(file_get_contents("skills.json"), true);
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Resume - Shubham Dighe</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
  .popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 1000;
  }

  .popup-content {
      max-width: 90%;
      max-height: 80%;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .close-btn {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 30px;
      font-weight: bold;
      color: white;
      cursor: pointer;
      background: rgba(0, 0, 0, 0.6);
      padding: 5px 10px;
      border-radius: 5px;
  }

  .close-btn:hover {
      background: rgba(255, 0, 0, 0.8);
  }

   .verify-btn {
    background: none;
    border: none;
    color: #28a745; /* Green color */
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    text-decoration: underline;
  }

  .verify-btn:hover {
    color: #218838; /* Darker green */
  }

  .floating-btn {
    position: fixed;
    bottom: 130px;
    left:50%;
    transform: translateX(-50%);
    background-color: #28a745; /* Light Green */
    color: #000;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 30px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    transition: background 0.3s ease, transform 0.2s ease;
  }

  .floating-btn:hover {
    background-color: #77DD77; /* Slightly darker green */
    transform: translateX(-50%) scale(1.05);
  }
</style>
</head>
<!-- Popup Modal -->
<div id="certificatePopup" class="popup">
  <span class="close-btn" onclick="closePopup()">&times;</span>
  <img id="popupImage" class="popup-content">
</div>


<body class="resume-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
  <?php include 'header.php'; ?>

  </header>

  <main class="main">

    <!-- Resume Section -->
<section id="resume" class="resume section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Resume</h2>
  <p>Web Development | Cloud Computing | DevOps | AI/ML | Data Science</p>
</div><!-- End Section Title -->

<div class="container">
  <div class="row">

    <!-- Summary Section -->
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <h3 class="resume-title">Summary</h3>
      <div class="resume-item pb-0">
        <h4>Shubham Dighe</h4>
        <p><em>I'm Shubham, a tech enthusiast passionate about web development, cloud computing, DevOps, AI/ML, and data science. As SECT's Web Dev Lead, I build impactful projects, mentor developers, and explore innovations.</em></p>
        <ul>
          <li>Sangamner, India</li>
          <li>+91 9146268710</li>
          <li>shubhamsocse@gmail.com</li>
        </ul>
      </div><!-- End Resume Item -->

      <!-- Education Section -->
      <h3 class="resume-title">Education</h3>
      <div class="resume-item">
        <h4>Bachelor of Technology in Computer Science</h4>
        <h5>2023 - Present</h5>
        <p>
          <img src="assets/img/SandipUnivercity.png" alt="Sandip University Logo" class="img-fluid me-2" style="height:40px;">
          <em>Sandip University, Nashik</em>
        </p>
        <p>Key Courses: Data Structures & Algorithms, Web Development, Cloud Computing & DevOps, Artificial Intelligence & Machine Learning, Computer Networks & Cybersecurity, Operating Systems, Database Management Systems, Software Engineering, Computer Architecture, Theory of Computation, Distributed Systems, and Cybersecurity.</p>
      </div><!-- End Education Section -->
    </div><!-- End Summary Section -->

    <!-- Professional Experience Section -->
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
  <h3 class="resume-title">Professional Experience</h3>

  <div class="resume-item">
  <h4>President – ML, AI & Robotics Club</h4>
    <h5>05/2025 - Present</h5>
    <p>
      <img src="assets/img/sun-crop.png" alt="SECT Club Logo" style="height:40px; vertical-align:middle; margin-right:10px;">
      <em>Sandip University, Nashik</em>
    </p>
    <ul>
      <li>Led the university's ML, AI, and Robotics Club, organizing workshops and events to enhance student knowledge.</li>
      <li>Mentored peers in building real-world projects using Python, TensorFlow, OpenCV, and Arduino.</li>
      <li>Built a strong tech community through hackathons, coding contests, and collaborative projects.</li>
    </ul>
  </div>

  <div class="resume-item">
    <h4>Web Development Lead</h4>
    <h5>09/2024 - 03/2025</h5>
    <p>
      <img src="assets/img/sect.png" alt="SECT Club Logo" style="height:40px; vertical-align:middle; margin-right:10px;">
      <em>Sandip University SECT Club, Nashik</em>
    </p>
    <ul>
      <li>Hosted 5+ coding workshops on web development, training over 70 students in modern frameworks and best practices, leading to a 30% increase in project completion rates.</li>
      <li>Mentored 20+ juniors, boosting coding skills and project delivery efficiency by 40%.</li>
      <li>Built dynamic dashboards for 5+ roles, cutting data retrieval time by 50%.</li>
      <li>Boosted site speed by 30% and strengthened security, reducing vulnerabilities by 40%.</li>
    </ul>
  </div>
  
  
</div>


    <!-- for update skill  update json file -->
<!-- Skills Section -->

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
    <h3 class="resume-title">Skills</h3>
    <?php foreach ($skills as $category => $skillList): ?>
        <div class="resume-item">
            <h4><i class="bi bi-check-circle"></i> <?php echo $category; ?></h4>
            <p><?php echo implode(", ", $skillList); ?></p>
        </div>
    <?php endforeach; ?>
</div>
    <!--  -->
  

    <!-- Key Achievements Section -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
  <h3 class="resume-title">Key Achievements</h3>
  
  <div class="resume-item">
    <h4><i class="bi bi-bar-chart-line"></i> Smart Global Pest Alert Network Project</h4>
    <p>Developed comprehensive dashboards for farmers, increasing user engagement by 60% and facilitating quicker responses to agricultural trends.</p>
  </div>

  <div class="resume-item">
    <h4><i class="bi bi-people"></i> Web Development Leadership</h4>
    <p>Led workshops and projects, building high-performance websites and mentoring peers in coding best practices.</p>
  </div>

</div><!-- End Key Achievements Section -->

<!-- Certification Section -->

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" id="Certifications">
  <h3 class="resume-title">Certifications</h3>

  <div class="resume-item">
    <h4><i class="bi bi-award"></i> Certifications</h4>
    <ul>
      <li>
        <span id="certificate">Participation in NASA Space Apps Hackathon (NASA)</span>
        <button class="verify-btn" onclick="openPopup('assets/img/certificate/NS63856.jpg')">
          <i class="bi bi-check-circle-fill"></i> Verify <i class="bi bi-arrow-up-right"></i>
        </button>
      </li>
      <li>
        <span id="certificate">Machine Learning (SimpleiLearn)</span>
        <button class="verify-btn" onclick="openPopup('assets/img/certificate/ML125362.jpg')">
          <i class="bi bi-check-circle-fill"></i> Verify <i class="bi bi-arrow-up-right"></i>
        </button>
      </li>
      <li>
        <span id="certificate">Fundamentals of Generative AI (Microsoft)</span>
        <button class="verify-btn" onclick="openPopup('assets/img/certificate/FG35685.jpg')">
          <i class="bi bi-check-circle-fill"></i> Verify <i class="bi bi-arrow-up-right"></i>
        </button>
      </li>
      <li>
        <span id="certificate">Agile Project Management (HP)</span>
        <button class="verify-btn" onclick="openPopup('assets/img/certificate/PM45685.jpg')">
          <i class="bi bi-check-circle-fill"></i> Verify <i class="bi bi-arrow-up-right"></i>
        </button>
      </li>
      <li>
        <span id="certificate">Design Thinking (HP)</span>
        <button class="verify-btn" onclick="openPopup('assets/img/certificate/DT86957.jpg')">
          <i class="bi bi-check-circle-fill"></i> Verify <i class="bi bi-arrow-up-right"></i>
        </button>
      </li>
    </ul>
  </div>
</div>
<!--  -->
<!-- End Certification Section -->
<!-- Projects Section -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
  <h3 class="resume-title">Projects</h3>

  <div class="resume-item">
    <h4><i class="bi bi-folder"></i> Internet Café Management System</h4>
    <h5>05/2022 - 09/2022</h5>
    <p><strong>Internet Café Management System for Improving Customer Engagement</strong></p>
    <p>Developed interactive dashboards for real-time agricultural insights, integrating satellite imagery, weather data, and AI-driven pest predictions using Python, JavaScript, and SQL.</p>
  </div>

  <div class="resume-item">
    <h4><i class="bi bi-folder"></i> Smart Global Pest Alert Network</h4>
    <h5>09/2024 - 10/2024</h5>
    <p><strong>A project aimed at improving agricultural data response.</strong></p>
    <p>Developed interactive dashboards for real-time agricultural insights, integrating satellite imagery, weather data, and AI-driven pest predictions using Python, JavaScript, and SQL.</p>
  </div>
</div>
<!-- End Projects Section -->

<!-- Languages Section -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
  <h3 class="resume-title">Languages</h3>

  <div class="resume-item">
    <h4><i class="bi bi-translate"></i> Languages</h4>
    <ul>
      <li><span>French</span> - Intermediate</li>
      <li><span>English</span> - Advanced</li>
      <li><span>Hindi</span> - Proficient</li>
      <li><span>Marathi</span> - Native</li>
    </ul>
  </div>
</div>
<!-- End Languages Section -->

<!-- Interests Section -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
  <h3 class="resume-title">Interests</h3>

  <div class="resume-item">
    <h4><i class="bi bi-lightbulb"></i> Interests</h4>
    <ul>
      <li>
        <span>AI/ML & Data Science</span> - Passionate about data-driven solutions and AI-powered systems for optimization.
      </li>
      <li>
        <span>AI in Space Exploration</span> - Interested in AI-driven satellite imaging, data analysis, and autonomous space missions.
      </li>
    </ul>
  </div>
</div>
<!-- End Interests Section -->


  </div><!-- End Row -->
</div><!-- End Container -->

</section><!-- End Resume Section -->

   
  </main>



reformat  recorect  


  
  <footer id="footer" class="footer light-background">

  <?php include 'footer.php'; ?>


  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
<!-- Floating Download Button -->
<a href="file/shubham-dighe-cv.pdf" onclick="downloadResume()" class="floating-btn">
  <i class="bi bi-download"></i> Download Resume
</a>





  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  function openPopup(imageSrc) {
      var popup = document.getElementById("certificatePopup");
      var popupImage = document.getElementById("popupImage");
      popup.style.display = "flex";
      popupImage.src = imageSrc;
  }

  function closePopup() {
      document.getElementById("certificatePopup").style.display = "none";
  }

  // Close popup if clicked outside the image
  window.onclick = function(event) {
      var popup = document.getElementById("certificatePopup");
      if (event.target === popup) {
          closePopup();
      }
  };
</script>
</body>

</html>