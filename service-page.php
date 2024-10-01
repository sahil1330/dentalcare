<?php
include 'db/config.php';
$title = $_GET['service'];
$sql = "SELECT * FROM services WHERE service_title = '$title'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$title = $row['service_title'];
$desc = $row['service_desc'];
$thumbnail = $row['service_thumbnail'];
$service_before = $row['service_before_image'];
$service_after = $row['service_after_image'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - New Age Dental Care</title>
    <link rel="icon" type="image/x-icon" href="icons/logo.svg">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/service-content.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/new-nav.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <style>
        /* Add custom styles here */
    </style>
</head>

<body>
    <?php include 'new-responsive-nav.php'; ?>

    <!-- Section 1: Service Details -->
    <section class="service-details py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="<?php echo $thumbnail ?>" class="img-fluid rounded" alt="Service Image">
                </div>
                <div class="col-md-6">
                    <h2><?php echo $title; ?></h2>
                    <p><?php
                    $desc = str_replace("\n", "</p><p>", $desc);
                    $desc = str_replace("", "", $desc); // Remove empty lines
                    echo $desc;
                    ?></p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                    <a href="#" class="btn btn-secondary">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Before and After Slider -->
    <section class="before-after py-5 text-center">
        <div class="container">
            <h2 class="text-light mb-4">Before and After</h2>
            <div id="before-after-slider">
                <div id="before-image">
                    <img src="<?php echo $service_before; ?>" alt="before" />
                </div>

                <div id="after-image">
                    <img src="<?php echo $service_after; ?>" alt="After" />
                </div>

                <div id="resizer"></div>
                <script src="scripts/slider.js"></script>
            </div>
        </div>
    </section>

    <!-- Section 3: FAQ and Stats -->
    <!-- <section class="faq-stats py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Frequently Asked Questions</h2>
                    <details>
                        <summary><span class="icon"></span> Question 1</summary>
                        <p>Answer to question 1.</p>
                    </details>
                    <details>
                        <summary><span class="icon"></span> Question 2</summary>
                        <p>Answer to question 2.</p>
                    </details>
                   Add more questions as needed -->
                <!-- </div>
                <div class="col-md-6 position-relative">
                    <img src="imgs/sample.jpg" class="img-fluid rounded" alt="Stats Image">
                    <div class="stats-box">
                        <p class="number">0</p>
                        <p class="text">Some statistic description</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --> -->
    <footer>
        <?php include "components/footer.php"; ?>
    </footer>
    <!-- Bootstrap JS & Custom JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="scripts/service.js"></script>
</body>

</html>