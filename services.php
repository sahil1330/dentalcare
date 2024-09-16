<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/services.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/new-nav.css">
    <link rel="stylesheet" href="styles/footer.css">
    <style>
        .nav-bar-box {
            position: absolute;
        }
    </style>
</head>

<body>
    <!-- Hero Section (Same as Contact Page) -->
    <section class="header-section">
        <header>
            <?php include 'new-responsive-nav.php'; ?>
        </header>
        <div class="header-section-container">
            <div class="header-image"></div>
            <div class="header-content">
                <h1>EXPLORE OUR SERVICES</h1>
                <button>HERE</button>
                <div class="cta">
                    <a href="#">What’s behind your smile?</a>
                </div>
            </div>
        </div>
    </section>



    <!-- Services Section -->
    <section class="services-section text-center py-5">
        <div class="container">
            <h2 class="mb-5">SERVICES WE PROVIDE</h2>
            <div class="row">
                <!-- First Card -->
                <?php
                include 'db/config.php';
                $sql = "SELECT * FROM services";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['service_title'];
                    $desc = $row['service_desc'];
                    $thumbnail = $row['service_thumbnail'];
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="<?php echo $thumbnail; ?>" class="card-img-top" alt="<?php echo $title; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="card-text"><?php echo $desc; ?>...</p>
                                <a href="#" class="btn btn-info btn-block mb-2">Other Medical Info</a>
                                <div class="d-flex justify-content-between">
                                    <a href="service-page.php?service=<?php echo $title; ?>"
                                        class="btn btn-outline-dark">Learn more</a>
                                    <a href="service-page.php?service=<?php echo $title; ?>"
                                        class="btn btn-outline-dark">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <div class="row">
                    <!-- Repeat for 3 more rows -->
                    <!-- Add more cards similarly as above -->
                </div>

                <div class="row">
                    <!-- Repeat for 3 more rows -->
                    <!-- Add more cards similarly as above -->
                </div>
            </div>
    </section>
    <footer>
        <div class="container2">
            <div class="form-container">
                <form action="" method="post" class="form-wrapper2 row">
                    <div class="footer-form-heading col-md-4 my-3">
                        <h1><b>Sign Up to our newsletter</b></h1>
                    </div>
                    <div class="form-floating mb-3 col-md-4 email-form">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address:</label>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="row main-row">
                <div class="main-info col-md-5">
                    <div class="row row1 mb-0">
                        <div class="image col-4">
                            <img src="icons/logo.svg" alt="logo">
                        </div>
                        <div class="heading-content col-md-8">
                            <h2>DR. ANAND SHAH'S</h2>
                            <h1>NEW AGE</h>
                                <h2><b>DENTAL CLINIC</b>
                            </h1>
                            <p>IMPLANT, AESTHETICS, LASER</p>
                        </div>
                    </div>
                    <div class="row row2">
                        <div class="col-2">
                            <div class="icon">
                                <img src="icons/computer-line.svg" alt="phone">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="icon">
                                <img src="icons/instagram-fill.svg" alt="phone">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="icon">
                                <img src="icons/facebook-circle-fill.svg" alt="phone">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="icon">
                                <img src="icons/twitter-x-fill.svg" alt="phone">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="icon">
                                <img src="icons/youtube-fill.svg" alt="phone">
                            </div>
                        </div>
                    </div>
                    <div class="row row3">
                        <div class="col-5">
                            <button class="btn-about">About Us</button>
                        </div>
                        <div class="col-7">
                            <button class="btn-contact">
                                <img src="icons/phoneblack.svg" alt="">
                                <p style="margin: 0;">+91 9821185590</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="line-column"
                    style="width: 1px; height: 100%; background-color: white; margin: 70px 0 0 0; padding: 0 0 0 0;">

                </div>
                <div class="col-md-3 my-auto lorem-content">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer.
                    </p>
                </div>
                <div class="line-column"
                    style="width: 1px; height: 100%; background-color: white; margin: 70px 0 0 0; padding: 0 0 0 0;">

                </div>
                <div class="col-md-3 quick-links my-auto">
                    <h3 class="text-center text-light">Quick Links</h3>
                    <div class="quick-link-wrapper">
                        <div class="row quick-link-row" style="flex-wrap: nowrap;">
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='index.php'">
                                    Home
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='faq.php'">
                                    FAQ
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="row quick-link-row" style="flex-wrap: nowrap;">
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='about.php'">
                                    About
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='services.php'">
                                    Services
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="row quick-link-row" style="flex-wrap: nowrap;">
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='contactus.php'">
                                    Contact
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='index.php'">
                                    Terms
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="row quick-link-row" style="flex-wrap: nowrap;">
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='blog.php'">
                                    Blogs
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="quick-link-btn" onclick="window.location.href='index.php'">
                                    Policy
                                    <div class="btn-arrow">
                                        <img src="icons/slant-arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="big-line-row" style="margin: 0;">
                <div class="big-line"></div>
            </div>
            <div class="row">
                <h6 class="text-center text-light">@COPYRIGHT 2024 | All right are reserved to www.drannanandshaha.com
                </h6>
            </div>
    </footer>


    <!-- Bootstrap JS & FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>