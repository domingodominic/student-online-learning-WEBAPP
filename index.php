<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:name" content="Online Learning Education" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Free Online Education</title>
  </head>

  <body>
    <div class="loader">
      <div class="spinner"></div>
      <h5>LOADING..</h5>
    </div>

    <!-- header of the page  -->
    <header>

      <div class="website--name">Genius<span class="span"> IT</span></div>
      <nav class="main--navigation">
        <ul class="navigation">
          <li class="nav--item"><a href="#">Home</a></li>
          <li class="nav--item"><a href="#">About</a></li>
          <li class="nav--item"><a href="#">Courses</a></li>
          <li class="nav--item"><a href="#">Teachers</a></li>
          <li class="nav--item"><a href="#">Reviews</a></li>
          <li class="nav--item"><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="toggles">
        <input id="checkbox" type="checkbox" />
        <label class="toggle" for="checkbox">
          <div id="bar1" class="bars"></div>
          <div id="bar2" class="bars"></div>
          <div id="bar3" class="bars"></div>
        </label>
      </div>
      <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // User is logged in, hide the sign-up button
        // You can replace this button with a logout button if you have a logout feature
    } else {
        // User is not logged in, show the sign-up button
        echo ' <button class="login-btn"><a href="signup.php">Sign Up</a></button>';
    }
    ?>
    </header>


 
    <!-- the main section of the home page -->
    <section class="home--page" id="home--page">
      <div class="column--one">
        <div
          class="title--column"
          data-aos="fade-right"
          data-aos-duration="1500"
        >
          <h1 class="title">Free</h1>
          <h1 class="title">Online</h1>
          <h1 class="title">Education</h1>
          <button class="contact-us-btn">Enroll Now</button>
        </div>
        <div class="image">
          <img
            src="image/svg.svg"
            alt="education--image"
            id="home-img"
            style="width: 80%; height: 80%"
          />
        </div>
      </div>

      <ul class="dashboard--list">
        <li>
          <i class="bi bi-mortarboard-fill"></i>
          <div class="for--title">
            <h5 class="number">170+</h5>
            <p class="title">Sucribers</p>
          </div>
        </li>

        <li>
          <i class="bi bi-person-video3"></i>
          <div class="for--title">
            <h5 class="number">160+</h5>
            <p class="title">Students</p>
          </div>
        </li>
        <li>
          <i class="bi bi-person-workspace"></i>
          <div class="for--title">
            <h5 class="number">1500+</h5>
            <p class="title">Teachers</p>
          </div>
        </li>
        <li>
          <i class="bi bi-emoji-smile-fill"></i>
          <div class="for--title">
            <h5 class="number">100%</h5>
            <p class="title">Satisfaction</p>
          </div>
        </li>
      </ul>
    </section>

    <!-- about us section -->
    <section class="about-us" data-aos="flip-left" data-aos-duration="1500">
      <div class="aboutus-image">
        <img src="image/about-us.gif" alt="About us gif" />
      </div>
      <div class="content">
        <h4>Why Choose Us?</h4>
        <p>
          An online learning platform to support students, especially those
          unable to attend school. It provides free PDFs and readable materials
          for Web Development. Engage with interactive quizzes when ready
        </p>
        <button><a href="#">Contact Us</a></button>
      </div>
    </section>

    <!-- courses section -->
    <section class="courses">
      <div class="headings" data-aos="flip-up" data-aos-duration="1500">
        Available <span style="font-weight: bold; color: #17ab00">Courses</span>
      </div>
      <!-- Swiper -->
      <div class="swiper mySwiper coursesSwiper" data-aos="fade-up">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide">
              <img
                src="image/mobile-development.svg"
                alt="Mobile development picture"
                id="courses--img"
              />
              <h3>Mobile Development</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
              <button class="enroll-btn">Enroll Now</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide">
              <img
                src="image/designer.svg"
                alt="UI/UX Design"
                id="courses--img"
              />
              <h3>UI/UX Design</h3>
              <p>
                Learn how to create modern dynamic design. Begginers level no
                prior experience needed.
              </p>
              <button class="enroll-btn">Enroll Now</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide">
              <img
                src="image/data-analytics.svg"
                alt="data analytics picture"
                id="courses--img"
              />
              <h3>Data Analytics</h3>
              <p>
                Learn how to plan things and play with data to help big
                company's growth.
              </p>
              <button class="enroll-btn">Enroll Now</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide">
              <img
                src="image/web-development.svg"
                alt="web development picture"
                id="courses--img"
              />
              <h3>Web Development</h3>
              <p>Learn how to create modern dynamic web pages.</p>
              <button class="enroll-btn">Enroll Now</button>
            </div>
          </div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="reviews">
      <div class="headings" data-aos="fade-up" data-aos-duration="1500">
        Student <span style="font-weight: bold; color: #17ab00">Reviews</span>
      </div>

      <!-- Swiper -->
      <div
        class="swiper mySwiper reviewSwipper"
        data-aos="flip-left"
        data-aos-duration="1500"
      >
        <div class="swiper-wrapper review-wrapper">
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 1.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 2.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 3.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 4.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 5.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 6.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <q>
                I am so surprise with the ready quiz. This platforms really
                helps me in my web development learning journey.</q
              >
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 1.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 2.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
          <div class="swiper-slide review-slide">
            <div class="slide">
              <img
                src="image/student/student 3.jpg"
                alt="Student picture"
                id="student--picture"
              />
              <h3>John Doe</h3>
              <p>
                Learn how to create modern mobile applications used in different
                big companies.
              </p>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="contacts" id="contacts">
      <div class="headings" data-aos="fade-up" data-aos-duration="1500">
        Contact <span style="font-weight: bold; color: #17ab00">Us</span>
      </div>
      <div class="contact">
        <div class="image" data-aos="fade-right">
          <img src="image/contact-svg.svg" alt="contact svg" />
        </div>

        <form
          action=""
          method="post"
          data-aos="fade-left"
          data-aos-duration="1500"
        >
          <div>
            <label for="name">Your name</label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Enter your fullname"
            />
          </div>

          <div>
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter your email"
            />
          </div>
          <div>
            <label for="number">Number</label>
            <input
              type="number"
              name="number"
              id="number"
              minlength="11"
              maxlength="11"
              placeholder="Enter your number "
            />
          </div>

          <div>
            <label for="message">Message</label>
            <textarea
              name="message"
              id="message"
              cols="65"
              rows="5"
              placeholder="Message"
            ></textarea>
          </div>

          <input type="submit" value="Send" />
        </form>
      </div>
    </section>

    <footer>
      <p>All Rights Reserved. &copy;Domingo Dominic , 2023.</p>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="index.js"></script>

    <!-- Initialize Swiper -->
  </body>
</html>
