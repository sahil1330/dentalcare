<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dental Care</title>
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/new-nav.css">
  <link rel="stylesheet" href="styles/fonts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script> -->
</head>

<body>
  <header>
    <?php include 'new-responsive-nav.php'; ?>
  </header>
  <section class="hero-section">
    <div class="hero-content">
      <div class="hero-left">
        <h1 class="hero-left-row1">YOUR <b>SMILE IS</b></h1>
        <div class="hero-left-row2">
          <h1 class="hero-left-row2-text">YOUR</h1>
          <div class="hero-left-row2-box">
            <img src="images/tooth-hero.svg" alt="Tooth ad" />
          </div>
        </div>
        <h1><b>SUPERPOWER</b></h1>
        <div class="hero-group-image-container">
          <div class="hero-group-image">
            <img src="images/hero-group.svg" alt="White Teeth" width="100%" height="100%" />
          </div>
          <div class="hero-group-image-content">
            <div>
              <p>What's behind your smile?</p>
            </div>
            <div class="hero-slant-arrow-img">
              <img src="icons/slant-arrow.svg" width="24px" height="24px" alt="Slant Arrow" id="hero-slant-arrow" />
            </div>
          </div>
        </div>
      </div>
      <div class="hero-right">
        <div class="hero-right-row1">
          <button class="btn-contact">Contact Us</button>
          <button class="btn-phone">
            <img src="icons/phone.svg" alt="Telephone" />+91 9821185590
          </button>
        </div>
        <div class="hero-right-row2">
          <p>
            Enthusiastic dental professional with a solid grasp of dental care
            processes. Eager to advance my skills and knowledge in global and
            US healthcare while honing critical thinking abilities as a
            dentist
          </p>
        </div>
        <div class="hero-right-row3">
          <button class="btn-know-more">KNOW NOW!</button>
          <button class="btn-arrow2" style="background-color: #50aadc; border-color: #50aadc">
            <img src="icons/slant-arrow.svg" width="100%" height="100%" alt="" />
          </button>
          <a href="#">Learn More</a>
        </div>
        <div class="hero-right-row4">
          <div class="hero-right-row4-box1">
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
          <div class="hero-right-row4-box2">
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
          <h2>All Types of Dental Services</h2>
          <button class="btn-service-section-arrow">
            <img src="icons/black-slant-arrow.svg" width="32px" height="32px" alt="Arrow Right">
          </button>
        </div>
        <div class="box service-box2">
          <div class="service">
            <img src="icons/teeth.svg" alt="">
            <h3>Cavity Prevention</h3>
          </div>
          <div class="service">
            <img src="icons/teeth.svg" alt="">
            <h3>Root Canal Treatment</h3>
          </div>
        </div>
        <div class="box service-box3">
          <div class="service">
            <img src="icons/teeth.svg" alt="">
            <h3>Dental Implants</h3>
          </div>
          <div class="service">
            <img src="icons/teeth.svg" alt="">
            <h3>Dental Products</h3>
          </div>
        </div>
        <div class="box service-box4">
          <div class="service">
            <img src="icons/teeth.svg" alt="">
            <h3>Tooth Extraction</h3>
          </div>
          <div class="service">
            <img src="icons/teeth.svg" alt="">
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
          <div class="left">
            <div class="short-about-left-heading">
              <h1>SHORT ABOUT PART</h1>
            </div>
            <div class="short-about-left-description">
              <p>
                Colgate Total fights root causes of many oral care problems,
                helping stop gingivitis, plaque, tartar,
              </p>
              <p>
                Colgate Total fights root causes of many oral care problems,
                helping stop gingivitis, plaque, tartar,
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
              <button style="background-color: #000; border-color: #000">
                <img src="icons/slant-arrow.svg" width="24px" height="24px" alt="" />
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right">
            <div class="boxes">
              <div class="img-box">
                <img src="images/short-about-image.jpg" width="80%" height="80%" alt="Short About" />
              </div>
              <div class="box box1">
                <h2 class="text-center d-flex align-items-center">Dental Care Dummy1</h2>
              </div>
              <div class="box box2">
                <h2 class="text-center d-flex align-items-center">Dental Care Dummy2</h2>
              </div>
              <div class="box box3">
                <h2 class="text-center d-flex align-items-center">Dental Care Dummy3</h2>
              </div>
              <div class="box box4">
                <h2 class="text-center d-flex align-items-center">Dental Care Dummy4</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="exclusive-updates">
    <div class="container">
      <h1 align="center"><b>Subscribe for exclusive updates</b></h1>
      <div class="card-wrapper d-flex justify-content-center align-items-center">
        <div class="row row-gap-3">
          <div class="col-md-4">
            <div class="card" style="width: 22rem">
              <div class="card-body ">
                <h5 class="card-title">Dental Implants</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 22rem">
              <div class="card-body">
                <h5 class="card-title">Dental Implants</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 22rem">
              <div class="card-body">
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
  </section>
  <section class="exclusive-updates-part2">
    <div class="container">
      <h1>Subscribe for exclusive updates!</h1>
      <div class="form-wrapper">
        <form action="" class="form-exclusive">
          <div class="inputs">
            <div>
              <input type="email" name="email" id="emailInput" placeholder="Enter your Email id">
            </div>
            <div class="check-input">
              <input type="checkbox" name="agree" id="agree"> <label for="agree">I agree to PRIVACY POLICY</label>
            </div>
          </div>
          <div>
            <button type="submit">Subscribe!</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="review">
    <div class="container">
      <h1>PATIENT REVIEWS</h1>
      <p>Enthusiastic dental professional with a solid grasp of dental care processes. Eager to advance my skills and
        knowledge in global and US healthcare while honing critical thinking abilities as a dentist</p>
      <div class="cards row row-gap-3">
        <div class="col-md-4">
          <div class="card" style="width: 22rem">
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
          <div class="card" style="width: 22rem">
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
          <div class="card" style="width: 22rem">
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
  <?php include "components/footer/index2.html"; ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="scripts/script.js"></script>
</body>

</html>