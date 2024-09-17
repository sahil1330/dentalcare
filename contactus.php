<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/contactus.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/new-nav.css">
</head>

<body>
    <nav style="z-index: 1002; 
            position:fixed;
            width: 100%;
            top: 0;
            ">
        <?php include 'new-responsive-nav.php'; ?>
    </nav>

    <!-- Header Section -->
    <section class="header-section">

        <div>
            <h1>CONTACT US</h1>
            <button>NOW</button>
            <div class="cta">
                <a href="#">What's behind your smile?</a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <h2>CONTACT FORM</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <h3 class="form-header">How can we help you today?</h3>
                        <p class="form-header-base">(Fill the form and we may soon contact you)</p>
                        <form>

                            <input type="text" id="name" name="name" placeholder="Enter your name" required>

                            <input type="email" id="email" name="email" placeholder="Enter your email" required>

                            <textarea id="message" name="message" rows="4" placeholder="Your message here"
                                required></textarea>
                            <button type="submit">SUBMIT FORM</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="imgs/br2.jpg" alt="Toothbrush Image" class="form-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Details Section -->
    <section class="contact-details text-center py-5">
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
                            <a href="#"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <img src="icons/icon-location-pin.svg" alt="Facebook"
                                    style="width: 30px; height: 30px;">
                            </a>
                            <!-- Custom Instagram Icon -->
                            <a href="#"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <img src="icons/icon-location-pin.svg" alt="Instagram"
                                    style="width: 30px; height: 30px;">
                            </a>
                            <!-- Custom Twitter Icon -->
                            <a href="#"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <img src="icons/icon-location-pin.svg" alt="Twitter" style="width: 30px; height: 30px;">
                            </a>
                            <!-- Custom YouTube Icon -->
                            <a href="#"
                                class="btn btn-outline-dark rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <img src="icons/icon-location-pin.svg" alt="YouTube" style="width: 30px; height: 30px;">
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
                            <div class="col-11">
                                <p><a href="mailto:drs.email@gmail.in">drs.email@gmail.in</a></p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-1">
                                <img src="icons/icon-call.svg" alt="Phone Icon">
                            </div>
                            <div class="col-11">
                                <div class="d-flex">
                                    <a href="tel:08169523831" class="btn btn-dark mx-2">08169523831</a>
                                    <a href="tel:+919821185590" class="btn btn-dark mx-2">+91 9821185590</a>
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


    <?php include "components/footer/index2.html"; ?>



    <!-- Bootstrap JS & FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>