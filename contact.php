<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS (required for toggling) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/fonts.css">
</head>

<body>
    <!-- Hero Section -->
    <div class="navbar">
           <?php include 'new-responsive-nav.php'; ?>
    </div>
    <section class="hero-section">
       
        
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




 
    
</body>

</html>