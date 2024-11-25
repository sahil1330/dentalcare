<?php
include 'db/config.php';
include '_phpmailer.php';
$showAlert = false;
$showError = false;
try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        date_default_timezone_set('Asia/Kolkata');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $time = date('Y-m-d H:i:s');
        $sql = "INSERT into contact (name, email, message, time) values (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $message, $time);
        if ($stmt->execute()) {
            $showAlert = "Your record is submitted successfully <br> Thanks for your precious time";
            $emailbody = "Thanks for contacting us <br> We will reach to you soon!";
            $subject = "Reply for the message in contact form";
            send_mail($name, $email, $subject, $emailbody, "info@newagedentalclinic.com");
        } else {
            $showError = "Some Error Occurred. <br> Sorry for the inconvenience.";
        }
        $stmt->close();
        $conn->close();
    }
} catch (\Throwable $th) {
    // php code for logging error into a given file
// error message to be logged
    $error_message = "This is an error message!";
    // path of the log file where errors need to be logged
    $log_file = "./my-errors.log";
    // logging error message to given log file
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - New Age Dental Clinic</title>
    <link rel="icon" type="image/x-icon" href="icons/logo.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/contactus.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/new-nav.css">
    <style>
    .call-button-style a {
        padding: px;
        border-radius: 30px;
        background-color: transparent;
        border: 2px solid rgb(0, 0, 0);
        color: rgb(0, 0, 0);
        cursor: pointer;
        font-family: var(--second-main-font);
        width: 50%;
    }
    </style>
    <link rel="stylesheet" href="styles/footer.css">
</head>

<body>

    <!-- Header Section -->
    <section class="header-section">
        <nav style="z-index: 1002; 
           position: absolute;
            width: 100%;
            top: 0;
            ">
            <?php include 'new-responsive-nav.php'; ?>
        </nav>

        <div class="header-section-container">
            <div class="header-image"></div>
            <div class="header-content">
                <h1>CONTACT US</h1>
                <button onclick="location.href='#contact-form-section'">NOW</button>
                <div class="cta">
                    <a href="#">Click to go to the Contact form</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section" id="contact-form-section">
        <div class="container">
            <h2>CONTACT FORM</h2>
            <?php
            if ($showAlert) {
                echo '
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <strong>WoW! </strong> ' . $showAlert . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            if ($showError) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    ' . $showError . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }
            ?>
            <div class="row">

                <div class="col-md-6">
                    <div class="contact-form">
                        <h3 class="form-header">How can we help you today?</h3>
                        <p class="form-header-base">(Fill the form and we may soon contact you)</p>
                        <form action="" method="post">
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>

                            <input type="email" id="email" name="email" placeholder="Enter your email" required>

                            <textarea id="message" name="message" rows="4" placeholder="Your message here"
                                required></textarea>
                            <button type="submit" name="contact-submit">SUBMIT FORM</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/dr-imgs/dr-cabin.webp" alt="Toothbrush-Image" class="form-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Details Section -->
    <section class="contact-details text-center py-5" style="margin-bottom: 20px;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Contact Info Column -->
                <div class="col-md-6 text-left mb-4 mb-md-0">
                    <div class="contact-info">
                        <!-- Contact Details Heading -->
                        <h2 class="contact-map-head mb-4">OUR CONTACT DETAILS</h2>


                        <!-- Social Icons -->
                        <div class="social-icons mt-4 d-flex justify-content-center" style="gap: 20px;">
                            <!-- Custom Facebook Icon -->
                            <a href="https://www.facebook.com/people/New-AGE-Dental-Clinic/100068596843168/"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;" target="_blank">
                                <img src="icons/facebook-circle-fill-white.svg" alt="Facebook"
                                    style="width: 30px; height: 30px;">
                            </a>
                            <!-- Custom Instagram Icon -->
                            <a href="#"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <img src="icons/instagram-fill-white.svg" alt="Instagram"
                                    style="width: 30px; height: 30px;">
                            </a>
                            <!-- Custom Twitter Icon -->
                            <a href="#"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <img src="icons/twitter-x-fill-white.svg" alt="Twitter"
                                    style="width: 30px; height: 30px;">
                            </a>
                            <!-- Custom WA Icon -->
                            <a href="https://wa.me/+918169258231"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;" target="_blank">
                                <img src="icons/whatsapp-fill-white.svg" alt="Whatsapp"
                                    style="width: 30px; height: 30px;">
                            </a>
                        </div>

                        <!-- Address, Email, and Phone in Grid Layout -->
                        <div class="row mb-4 contact-icon">
                            <div class="col-1">
                                <img src="icons/icon-location-pin.svg" alt="Location Icon" style="margin-top: 10px;">
                            </div>
                            <div class="col-11">
                                <p>A - 302, Munoth Empress, Near Ambedkar Statue, Ambedkar Road, Opp. Panvel Bus Stand,
                                    Old Panvel, Navi Mumbai, Maharashtra 410206</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-1">
                                <img src="icons/icon-mail.svg" alt="Email Icon">
                            </div>
                            <div class="col-5">
                                <p><a href="mailto:anandshah.1309@gmail.com">anandshah.1309@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-1">
                                <img src="icons/icon-mail.svg" alt="Email Icon">
                            </div>
                            <div class="col-5">
                                <p><a
                                        href="mailto:newagedentalclinicpanvel@gmail.com ">newagedentalclinicpanvel@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-1">
                                <img src="icons/icon-call.svg" alt="Phone Icon">
                            </div>
                            <div class="col-11">
                                <div class="d-flex call-button-style">
                                    <a href="tel:+918169258231"
                                        class="btn btn-light mx-2 d-flex justify-content-center align-items-center">8169258231</a>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Google Map Column -->
                <div class="col-md-6">
                    <div class="map-container ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.680929578872!2d73.11261057481761!3d18.989693682197267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e86a4c935a99%3A0x1a9b0d48c18e6e24!2sNew%20Age%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1725643172743!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include "components/footer.php"; ?>



    <!-- Bootstrap JS & FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="scripts/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>