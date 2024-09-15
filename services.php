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
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="imgs/br2.jpg" class="card-img-top" alt="Service Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Scaling and Polishing</h5>
                            <p class="card-text">Short preview text for the service detail and other info, with 2
                                lines...</p>
                            <a href="#" class="btn btn-info btn-block mb-2">Other Medical Info</a>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-outline-dark">Learn more</a>
                                <a href="#" class="btn btn-outline-dark">Book an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Card -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="imgs/br2.jpg" class="card-img-top" alt="Service Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Teeth Whitening</h5>
                            <p class="card-text">Short preview text for the service detail and other info, with 2
                                lines...</p>
                            <a href="#" class="btn btn-info btn-block mb-2">Other Medical Info</a>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-outline-dark">Learn more</a>
                                <a href="#" class="btn btn-outline-dark">Book an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Card -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="imgs/sample.jpg" class="card-img-top" alt="Service Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Dental Implants</h5>
                            <p class="card-text">Short preview text for the service detail and other info, with 2
                                lines...</p>
                            <a href="#" class="btn btn-info btn-block mb-2">Other Medical Info</a>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-outline-dark">Learn more</a>
                                <a href="#" class="btn btn-outline-dark">Book an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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