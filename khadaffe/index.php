<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sulaiman</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">Khadaffe Sulaiman</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="logout.php"a>logout</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Khadaffe Sulaiman</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/sulaimanpro.png" alt="Khadaffe Sulaiman profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Khadaffe Sulaiman</h1>
        <p class="section__text__p2">Junior Developer</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/sulaimancv.pdf')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://linkedin.com/'"
          />
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/'"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="./assets/aboutdaff.png"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>Experience</h3>
              <p>1+ years<br />Full-Stack Development</p>
            </div>
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p>Information Technology<br />2021-2023 GPA 3.5</p>
            </div>
          </div>
          <div class="text-container">
            <p>
              Hello, I'm Khadaffe Sulaiman, a dedicated and enthusiastic
              junior programmer and developer with a passion for crafting digital solutions.
              My journey into the world of technology began with a fascination
              for turning lines of code into functional, elegant applications.
              As a programmer, I'm committed to continuous learning and
              honing my skills to stay ahead in the fast-paced world of software development.
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Front-End Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JAVA</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>.Net</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Python</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Material UI</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Back-End Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JAVA</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Python</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>.Net</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Basic</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project-1.png"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Student Permit & Payment</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project-2.png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Enrollment Database System</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project-3.png"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">AC Marketplace</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:kcpersonalacc@gmail.com">kcpersonalacc@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com/in/khadaffe-sulaiman-232199194/">LinkedIn</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2023 Content Management System. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>

<?php
// Check if the user is logged in (you may need to adjust this based on your actual login mechanism)
    if (isset($_SESSION['username'])) {
        echo '<li><a href="logout.php">Logout</a></li>';
    }
?>