<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/fonts.css">
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="nav-bar">
           <?php include 'nav-bar.php'; ?>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-image"></div>
        <div class="container hero-content">
            <h1>Contact Us</h1>
            <button type="button" class="now-button">NOW</button>
            <p class="mt-3">What's behind your smile?</p>
            <div class="button-container">
                <button class="bottom-button">Button 1</button>
                <button class="bottom-button-2">Button 2</button>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section py-5">
        <div class="container">

            <h2 class="text-center mb-5 contact-head-text">Our Contact Details</h2>
            <div class="row justify-content-center">
                <!-- Contact Form -->
                <div class="col-lg-6 col-md-8 mb-4 mb-lg-0">
                    <div class="contact-form p-4 border rounded">
                        <h2 class="mb-4">How can we help you today?</h2>

                        <form action="#" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="message" placeholder="Message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit Form</button>
                        </form>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6 col-md-8">
                    <img src="imgs/br2.jpg" alt="Toothbrush Image" class="img-fluid rounded contact-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Details and Map Section -->
    <section class="contact-details-section py-5">
        <div class="container">
            <h2 class="text-center mb-5 map-head-text">Our Contact Details</h2>
            <div class="row">
                <!-- Contact Details -->

                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="contact-item d-flex align-items-start mb-3">
                        <img src="icons/icon-location-pin.svg" alt="Address Icon" class="me-3 mt-1">
                        <p class="mb-0">A-302, Munoth Empress, Near Ambedkar Statue, <br>Opp. Panvel Bus Stand, Old Panvel, Navi Mumbai, Maharashtra 410206</p>
                    </div>
                    <div class="contact-item d-flex align-items-center mb-3">
                        <img src="icons/icon-call.svg" alt="Phone Icon" class="me-3">
                        <a href="tel:+919821185590" class="text-decoration-none">+91 9821185590</a>
                    </div>
                    <div class="contact-item d-flex align-items-center">
                        <img src="icons/icon-mail.svg" alt="Email Icon" class="me-3">
                        <a href="mailto:drs.email@gmail.in" class="text-decoration-none">drs.email@gmail.in</a>

                    </div>
                </div>

                <!-- Map -->
                <div class="col-lg-6 col-md-12">

                    <div class="map-container ratio ratio-16x9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.680929578872!2d73.11261057481761!3d18.989693682197267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e86a4c935a99%3A0x1a9b0d48c18e6e24!2sNew%20Age%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1725643172743!5m2!1sen!2sin" 
                            style="border:0;" 
                            allowfullscreen=""
                            loading="lazy">

                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <?php include 'components/footer/index.php'; ?>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>