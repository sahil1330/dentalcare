<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dental Care</title>
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/new-nav.css">
  <link rel="stylesheet" href="styles/fonts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script> -->
  <style>
    body {
      font-family: var(--main-font);
    }
  </style>
</head>

<body>
  <header>
    <?php include 'new-responsive-nav.php'; ?>
  </header>
  <section class="hero-section">
    <div class="hero-content">
      <div class="hero-left">
        <h1 class="hero-left-row1" data-aos="fade-right">YOUR <b>SMILE IS</b></h1>
        <div class="hero-left-row2" data-aos="fade-right">
          <h1 class="hero-left-row2-text" data-aos="fade-right">YOUR</h1>
          <div class="hero-left-row2-box" data-aos="fade-right">
            <img src="images/tooth-hero.svg" alt="Tooth ad" />
          </div>
        </div>
        <h1 class="" data-aos="fade-right"><b>SUPERPOWER</b></h1>
        <div class="hero-group-image-container" data-aos="fade-right">
          <div class="hero-group-image">
            <img src="images/hero-group.svg" alt="White Teeth" width="100%" height="100%" />
          </div>
          <div class="hero-group-image-content">
            <span>
              <p>What's behind your smile?</p>
            </span>
            <div class="hero-slant-arrow-img">
              <img src="icons/slant-arrow.svg" width="24px" height="24px" alt="Slant Arrow" id="hero-slant-arrow" />
            </div>
          </div>
        </div>
      </div>
      <div class="hero-right">
        <div class="hero-right-row1">
          <button class="btn-contact" data-aos="fade-left">Contact Us</button>
          <button class="btn-phone" data-aos="fade-left">
            <img src="icons/phone.svg" alt="Telephone" />+91 9821185590
          </button>
        </div>
        <div class="hero-right-row2" data-aos="fade-left">
          <p class="">
            Enthusiastic dental professional with a solid grasp of dental care
            processes. Eager to advance my skills and knowledge in global and
            US healthcare while honing critical thinking abilities as a
            dentist
          </p>
        </div>
        <div class="hero-right-row3">
          <button class="btn-know-more" data-aos="fade-left">KNOW NOW!</button>
          <button class="btn-arrow2" data-aos="fade-left" style="background-color: #50aadc; border-color: #50aadc">
            <img src="icons/slant-arrow.svg" width="100%" height="100%" alt="" />
          </button>
          <a href="#" data-aos="fade-left">Learn More</a>
        </div>
        <div class="hero-right-row4">
          <div class="hero-right-row4-box1" data-aos="fade-left">
            <img src="images/toothbrush.jpg" alt="slide1" />
            <div class="hero-right-row4-box1-content">
              <h6>Get a deep clean with 360</h6>
              <a href="services.php">
                <button href="services.php" class="btn-arrow" style="background-color: #000">
                  <img src="icons/slant-arrow.svg" width="24px" height="24px" alt="" />
                </button>
              </a>
            </div>
          </div>
          <div class="hero-right-row4-box2" data-aos="fade-left">
            <div class="hero-right-row4-box2-row1">
              <h6>How can we help you today?</h6>
            </div>
            <div class="hero-right-row4-box2-row2">
              <p>What are your needs?</p>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle box-2-dropdown" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Choose one
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">Action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Another action</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </li>
                </ul>
              </div>
              <p>What are your goals?</p>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle box-2-dropdown" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Choose one
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">Action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Another action</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </li>
                </ul>
              </div>
              <div class="hero-right-row4-box2-row3">
                <button type="button" class="btn-getstarted">
                  GET STARTED
                </button>
              </div>
            </div>
            <div class="hero-right-row4-box2-row3"></div>
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
          <button class="btn-service-section-arrow" onclick="window.location.href='services.php'" data-aos="fade-right">
            <img src="icons/black-slant-arrow.svg" width="32px" height="32px" alt="Arrow Right">
          </button>
        </div>
        <div class="box service-box2">
          <div class="service" data-aos="fade-up">
            <img src="icons/cavity.png" alt="">
            <h3>Cavity Prevention</h3>
          </div>
          <div class="service" data-aos="fade-up">
            <img src="icons/root-canal.png" alt="">
            <h3>Root Canal Treatment</h3>
          </div>
        </div>
        <div class="box service-box3">
          <div class="service" data-aos="fade-left">
            <img src="icons/dental-implant.png" alt="">
            <h3>Dental Implants</h3>
          </div>
          <div class="service" data-aos="fade-left">
            <img src="icons/toothpaste.png" alt="">
            <h3>Dental Products</h3>
          </div>
        </div>
        <div class="box service-box4">
          <div class="service" data-aos="fade-up">
            <img src="icons/tooth-extraction.png" alt="">
            <h3>Tooth Extraction</h3>
          </div>
          <div class="service" data-aos="fade-up">
            <img src="icons/tooth-whitening.png" alt="">
            <h3>Teeth Whitening</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="slider-section">
    <div class="slider-wrapper">
      <div class="slider">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slide.svg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="images/slide.svg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="images/slide.svg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="images/slide.svg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="images/slide.svg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div class="navigators">
      <div class="navigator active" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0"
        aria-current="true" aria-label="Slide 1"></div>
      <div class="navigator" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2">
      </div>
      <div class="navigator" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3">
      </div>
      <div class="navigator" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4">
      </div>
      <div class="navigator" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4" aria-label="Slide 5">
      </div>
    </div>
  </section>
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
                <button class="btn-contact">Contact Us</button>
              </div>
              <div class="col-md-6">
                <button class="btn-phone">
                  <img src="icons/phone.svg" alt="Telephone" />+91 9821185590
                </button>
              </div>
            </div>
            <div class="short-about-left-footer">
              <h6>Go to our About page</h6>
              <button onclick="window.location.href='about.php'" style="background-color: #000; border-color: #000">
                <img src="icons/slant-arrow.svg" width="24px" height="24px" alt="" />
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="short-about-right">
            <div class="boxes">
              <div class="img-box">
                <img src="images/short-about-image.jpg" width="80%" height="80%" alt="Short About" />
              </div>
              <div class="box box1 d-flex justify-content-center align-items-center">
                <h2 class="text-center d-flex align-items-center">Best Service</h2>
              </div>
              <div class="box box2 d-flex justify-content-center align-items-center">
                <h2 class="text-center d-flex align-items-center">Best In India</h2>
              </div>
              <div class="box box3 d-flex justify-content-center align-items-center">
                <h2 class="text-center d-flex align-items-center">Over 100+ patients</h2>
              </div>
                <div class="box box4 d-flex justify-content-center align-items-center">
                <h2 class="text-center d-flex align-items-center">Dental Care</h2>
                  </div>
               
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="exclusive-updates">
    <div class="container my-4">
      <h1 align="center"><b>About our Doctors</b></h1>
      <div class="card-wrapper d-flex justify-content-center align-items-center">
        <div class="row row-gap-3">
          <div class="col-md-4">

            <div class="card" data-aos="fade-up" style="width: 22rem">
              <div class="card-body p-0 card-dr-1">
                <div class="card-content">
                  <h5 class="card-title">Dental Implants</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">

            <div class="card" data-aos="fade-up" style="width: 22rem">
              <div class="card-body p-0 card-dr-2">
                <div class="card-content">
                  <h5 class="card-title">Dental Implants</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" data-aos="fade-up" style="width: 22rem">
              <div class="card-body p-0 card-dr-3">
                <div class="card-content">
                  <h5 class="card-title">Dental Implants</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="exclusive-updates-part2">
    <div class="container">
      <h1>Subscribe for exclusive updates!</h1>
      <div class="form-wrapper">
        <form action="" class="form-exclusive">
          <div class="inputs">
            <div class="" data-aos="fade-up">
              <input type="email" name="email" id="emailInput" placeholder="Enter your Email id">
            </div>
            <div class="check-input" data-aos="fade-up">
              <input type="checkbox" name="agree" id="agree" class="tick-circle">
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
      <p>Enthusiastic dental professional with a solid grasp of dental care processes. Eager to advance my skills and
        knowledge in global and US healthcare while honing critical thinking abilities as a dentist</p>
      <div class="cards row row-gap-3">
        <div class="col-md-4">
          <div class="card" data-aos="fade-up" style="width: 22rem">
            <div class="card-body">
              <h5 class="card-title">Dental Implants</h5 <p class="card-text">
              Love Dr Parks and
              his
              wonderful
              staff! They always
              go above and
              beyond to be sure
              you are taken care
              </p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" data-aos="fade-up" style="width: 22rem">
            <div class="card-body">
              <h5 class="card-title">Dental Implants</h5 <p class="card-text">
              Love Dr Parks and
              his
              wonderful
              staff! They always
              go above and
              beyond to be sure
              you are taken care
              </p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" data-aos="fade-up" style="width: 22rem">
            <div class="card-body">
              <h5 class="card-title">Dental Implants</h5 <p class="card-text">
              Love Dr Parks and
              his
              wonderful
              staff! They always
              go above and
              beyond to be sure
              you are taken care
              </p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include"components/footer/index2.html"; ?>
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
</body>

</html>