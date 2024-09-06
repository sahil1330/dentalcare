<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Hero Section Styling */
        .hero-section {
            background: url('imgs/sample.png') no-repeat center center;
            background-size: cover;
            position: relative;
            height: 100svh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-content button {
            margin-top: 20px;
            padding: 10px 30px;
            font-size: 1.2rem;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero-content button:hover {
            background-color: #555;
        }

        /* Contact Form Section */
        .contact-form-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .contact-form {
            background-color: #5ec4f1;
            padding: 30px;
            border-radius: 10px;
            color: white;
        }

        .contact-form h2 {
            margin-bottom: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #555;
        }

        /* Contact Details Section */
        .contact-details-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .contact-details-section h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-details {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            max-width: 400px;
            width: 100%;
        }

        .contact-item img {
            width: 30px;
            height: 30px;
        }

        /* Map Section */
        .map-container iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
        }

        /* Footer */
        

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content button {
                font-size: 1rem;
                padding: 8px 20px;
            }
        }

        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .contact-details {
                flex-direction: column;
                align-items: center;
            }

            .contact-item {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
        
    <!-- Hero Section -->
     <section style="background-color: #fff;">
     <?php include 'components/nav/index.php'; ?>
    <div class="hero-section" style="border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
        
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>Contact Us</h1>
            <button type="button">Get in Touch</button>
            <p class="mt-3">What's behind your smile?</p>
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
