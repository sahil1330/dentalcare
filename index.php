<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Age Dental Care</title>
  <link rel="icon" type="image/x-icon" href="icons/logo.svg">
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/new-nav.css">
  <link rel="stylesheet" href="styles/fonts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: var(--main-font);
    }
  </style>
</head>

<body style="background: #ecf3f9;">
  <header>


    <!-- Navbar Box -->
    <div class="nav-bar-box">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container" style="justify-content: center;">
          
            <img src="icons/logo.svg" alt="Logo">
          
          <h1 class="logo-text-mobile"><i>NADC</i></h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <h1 class="logo-text-desktop align-items: flex-start;"><i>New Age Dental Clinic</i></h1>
            <ul class="navbar-nav mx-auto " style="align-items: center;">
              <li class="nav-item">
                <a class="nav-link active" style="margin: 0; width: 100%;" aria-current="page" href="./">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="margin: 0; width: 100%;" href="about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="margin: 0; width: 100%;" href="services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="margin: 0; width: 100%;" href="blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="margin: 0; width: 100%;" href="contactus">Contact</a>
              </li>
            </ul>
            <div class="d-flex align-items-center">
              <div class="search-box" id="mobileSearch">
                <input type="text" placeholder="Search">
              </div>
              <i class="bi bi-search ms-3" style="cursor: pointer;" id="searchIcon"></i>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!-- Search Box Overlay (PC) -->
    <div class="overlay-search" id="searchOverlay">
      <input type="text" placeholder="Search">
    </div>
  </header>
  <section class="hero-section">
    <div class="hero-content">
      <div class="hero-left">
        <h1 class="hero-left-row1" data-aos="fade-right">YOUR <b>SMILE IS</b></h1>
        <div class="hero-left-row2" data-aos="fade-right">
          <h1 class="hero-left-row2-text" data-aos="fade-right">YOUR <b>HIDDEN</b></h1>

        </div>
        <h1 class="" data-aos="fade-right"><b>SUPERPOWER</b></h1>
        <div class="hero-group-image-container" data-aos="fade-right">
          <div class="hero-group-image">
            <img src="images/dr-imgs/DR-INDEX-HERO.webp" alt="White Teeth" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <div class="hero-right">
        <div class="hero-right-row1">
          <button class="btn-contact" data-aos="fade-left" onclick="window.location.href='contactus'">Contact
            Us</button>
          <button class="btn-phone" data-aos="fade-left" onclick="window.location.href='tel:+918169523831'">
            <img src="icons/phoneblack.svg" alt="Telephone" />8169523831
          </button>
        </div>
        <div class="hero-right-row2" data-aos="fade-left">
          <p class="">
            New Age Dental Clinic, Panvel (2011 - Present): As a leading dentist, Dr. Shah provides comprehensive
            preventive and therapeutic dental care, educates patients on oral hygiene, and manages patient records with
            precision.
          </p>
        </div>
        <div class="hero-right-row3">
          <button class="btn-know-more" data-aos="fade-left">KNOW NOW!</button>
          <button class="btn-arrow2" data-aos="fade-left" style="background-color: #50aadc; border-color: #50aadc">
            <img src="icons/slant-arrow.svg" width="40px" height="40px" alt="" />
          </button>
          <a href="about" data-aos="fade-left">Learn More</a>
        </div>
        <div class="hero-right-row4 carousel slide " id="carouselExampleSlidesOnly">
          <div class="hero-right-row4-box1 carousel-inner" data-bs-ride="carousel" data-aos="fade-left">

            <div class="carousel-item active">
              <img src="images/dr-imgs/dr-slider-1.webp" class="slideimg w-100" alt="images/toothbrush.jpg">
            </div>
            <div class="carousel-item">
              <img src="images/dr-imgs/dr-slider-2.webp" class="slideimg w-100" alt="images/toothbrush.jpg">
            </div>
            <div class="carousel-item">
              <img src="images/dr-imgs/dr-slider-3.webp" class="slideimg w-100" alt="images/toothbrush.jpg">
            </div>
            <div class="carousel-item">
              <img src="images/dr-imgs/dr-slider-4.webp" class="slideimg w-100" alt="images/toothbrush.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="service-section">
    <h1 id="services-section-heading">SERVICES WE PROVIDE</h1>
    <div class="service-wrapper">
      <div class="service-boxes">
        <div class="box service-box1">
          <h2 data-aos="fade-right">All Types of Dental Services</h2>
          <button class="btn-service-section-arrow" onclick="window.location.href='services'" data-aos="fade-right">
            <img src="icons/black-slant-arrow.svg" width="32px" height="32px" alt="Arrow Right">
          </button>
        </div>
        <div class="box service-box2">
          <div class="service" data-aos="fade-up">
            <img src="icons/cavity color.png" alt="">
            <h3>Cavity Prevention</h3>
          </div>
          <div class="service" data-aos="fade-up">
            <img src="icons/root-canal color.png" alt="">
            <h3>Root Canal Treatment</h3>
          </div>
        </div>
        <div class="box service-box3">
          <div class="service" data-aos="fade-left">
            <img src="icons/implant.png" alt="">
            <h3>Dental Implants</h3>
          </div>
          <div class="service" data-aos="fade-left">
            <img src="icons/toothpaste color.png" alt="">
            <h3>Dental Products</h3>
          </div>
        </div>
        <div class="box service-box4">
          <div class="service" data-aos="fade-up">
            <img src="icons/extraction.png" alt="">
            <h3>Tooth Extraction</h3>
          </div>
          <div class="service" data-aos="fade-up">
            <img src="icons/tooth-whitening 2 color.png" alt="">
            <h3>Teeth Whitening</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="videoSection">
    <video id="lazy-video" autoplay loop muted>
      <source data-src="videos/video1.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <section class="short-about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="short-about-left">
            <div class="short-about-left-heading">
              <h1>ABOUT</h1>
            </div>
            <div class="short-about-left-description">
              <p style="font-size:larger;">
                Dr. Anand Rajnikant Shah is a dedicated and highly experienced dental professional with over 13 years of
                expertise in the field.
              </p>
              <p style="font-size:large;">
                Based in Panvel, he is recognized for his extensive knowledge and hands-on experience in a wide range of
                dental care processes and procedures.
              </p>
            </div>
            <div class="short-about-left-buttons row gap-3">
              <div class="col-md-4">
                <button class="btn-contact-about" onclick="window.location.href='contactus'">Contact Us</button>
              </div>
            </div>
            <div class="short-about-left-footer">
              <h6>Go to our About page</h6>
              <button onclick="window.location.href='about'" style="background-color: #000; border-color: #000">
                <img src="icons/slant-arrow.svg" width="24px" height="24px" alt="" />
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="short-about-right">
            <div class="boxes">
              <div class="img-box">
                <img src="images/dr-imgs/dr1-with-book.webp" width="80%" height="80%" alt="Short About" />
              </div>
              <div class="box box1">
                <h2 class="text-center d-flex align-items-center">Best Service</h2>
              </div>
              <div class="box box2">
                <h2 class="text-center d-flex align-items-center">Best In India</h2>
              </div>
              <div class="box box3">
                <h2 class="text-center d-flex align-items-center">Over 100+ patients</h2>
              </div>
              <div class="box box4">
                <h2 class="text-center d-flex align-items-center">Dental Care</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="margin-bottom: 20px;">
    <h2 class="blog-section-header">Our Blogs</h2>
    <?php include "blog-section-test.html"; ?>
  </section>
  <section class="exclusive-updates-part2">
    <div class="container">
      <h1>Subscribe for exclusive updates!</h1>
      <div class="form-wrapper">
        <form action="" class="form-exclusive">
          <div class="inputs">
            <div class="emaildiv" data-aos="fade-up">
              <input type="email" name="email" id="emailInput" placeholder="Enter your Email id"
                style="font-size: large;" require>
            </div>
            <div class="check-input" data-aos="fade-up">
              <input type="checkbox" name="agree" id="agree" class="tick-circle" require>
              <label for="agree">I agree to PRIVACY POLICY</label>
            </div>
          </div>
          <div class="" data-aos="fade-up">
            <button type="submit">Subscribe!</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="review">
    <div class="container my-4">
      <h1>PATIENT REVIEWS</h1>
      <p>Check our happy customers reviews and check their wonderful experience</p>
      <div class="cards row row-gap-4">
        <!-- First Card -->
        <div class="col-md-4">
          <div class="card" data-aos="fade-up" style="width: 22rem; height: auto;">
            <div class="card-body reviews-card-body text-center">
              <!-- Star Image -->
              <img src="icons/stars.svg" alt="Star Rating" class="img-fluid mb-2" style="width: 200px;">
              <!-- Card Title and Text -->

              <h3 class="card-title" style="padding:  20px 0;">Rajesh Kumar</h3>
              <p class="card-text">
                Love Dr. Shah and his wonderful staff! They always go above and beyond to be sure you are taken care of.
              </p>
              <!-- <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
        </div>
        <!-- Second Card -->
        <div class="col-md-4">
          <div class="card" data-aos="fade-up" style="width: 22rem; height: auto;">
            <div class="card-body reviews-card-body text-center">
              <!-- Star Image -->
              <img src="icons/stars.svg" alt="Star Rating" class="img-fluid mb-2" style="width: 200px;">
              <!-- Card Title and Text -->
              <h3 class="card-title" style="padding:  20px 0;">Ajay Nadar</h3>
              <p class="card-text">
                Dr. Shah is very professional and caring. The root canal treatment was painless and quick.
              </p>
              <!-- <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
        </div>
        <!-- Third Card -->
        <div class="col-md-4">
          <div class="card" data-aos="fade-up" style="width: 22rem; height: auto;">
            <div class="card-body reviews-card-body text-center">
              <!-- Star Image -->
              <img src="icons/stars.svg" alt="Star Rating" class="img-fluid mb-2" style="width: 200px;">
              <!-- Card Title and Text -->
              <h3 class="card-title" style="padding:  20px 0;">Anjali Mehta</h3>
              <p class="card-text">
                Excellent service and friendly staff. My teeth whitening experience was fantastic.
              </p>
              <!-- <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include"components/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="scripts/script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const video = document.getElementById('lazy-video');
      const videoSrc = video.querySelector('source').getAttribute('data-src');

      // Create an IntersectionObserver
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // When the video comes into view, set the video source
            video.querySelector('source').setAttribute('src', videoSrc);
            video.load();  // Load the video
            observer.unobserve(video);  // Stop observing after loading
          }
        });
      });

      observer.observe(video);
    });
  </script>
</body>

</html>