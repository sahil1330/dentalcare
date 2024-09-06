<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/contact.css">
</head>
<body>
        
    <!-- Hero Section -->
     <section style="background-color: #fff;">
        <div class="nav-bar">
           <?php include 'nav-bar.php'; ?>
     </div>
     <div class="hear-section-header">
    <div class="hero-section">
        
        
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>Contact Us</h1>
            <button type="button" class="now-button">NOW</button>
            <p class="mt-3">What's behind your smile?</p>
            <button type="button" class="bottom-button">9821185590</button>
        </div>
    </div>
    </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="contact-form">
                        <h2>How can we help you today?</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <textarea name="message" placeholder="Message" rows="5" required></textarea>
                            <button type="submit">Submit Form</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 mt-4 mt-lg-0">
                    <img src="imgs/br2.jpg" alt="Toothbrush Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Details and Map Section -->
    <section class="contact-details-section">
        <div class="container">
            <h2>Our Contact Details</h2>
            <div class="contact-details">
                <div class="contact-item">
                    <img src="address_icon.png" alt="Address Icon">
                    <p>A-302, Munoth Empress, Near Ambedkar Statue,<br> Opp. Panvel Bus Stand, Old Panvel, Navi Mumbai, Maharashtra 410206</p>
                </div>
                <div class="contact-item">
                    <img src="phone_icon.png" alt="Phone Icon">
                    <a href="tel:+919821185590">+91 9821185590</a>
                </div>
                <div class="contact-item">
                    <img src="email_icon.png" alt="Email Icon">
                    <a href="mailto:drs.email@gmail.in">drs.email@gmail.in</a>
                </div>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?..." allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <?php include 'components/footer/index.php'; ?>
    </footer>

    <!-- Bootstrap JS (Optional, for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
