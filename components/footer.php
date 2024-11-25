<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subscribe'])) {
    require dirname(__DIR__) . '/db/config.php';
    $current_page = $_POST['current_page'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $selectQuery = "SELECT * FROM newsletter_subscription WHERE email = '$email'";
    $selectResult = mysqli_query($conn, $selectQuery);
    $count = mysqli_num_rows($selectResult);
    if ($count > 0) {
        ?>
<script>
alert("Email already Subscribed!");
window.location.href = '<?php echo $current_page; ?>';
</script>
<?php

    } else {
        date_default_timezone_set('Asia/Kolkata');
        $time = date('Y-m-d H:i:s');
        $sql = "INSERT INTO newsletter_subscription (email, time) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $email, $time);


        if (mysqli_stmt_execute($stmt)) {
            ?>
<script>
alert("Subscribed Successfully!");
window.location.href = '<?php echo $current_page; ?>';
</script>
<?php
        } else {
            ?>
<script>
alert("Failed to subscribe!");
window.location.href = '<?php echo $current_page; ?>';
</script>
<?php
        }
    }
}

?>
<footer>
    <div class="container2">
        <div class="form-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-wrapper2 row">
                <input type="hidden" name="current_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="footer-form-heading col-md-4 my-3">
                    <h1><b>Sign Up to our newsletter</b></h1>
                </div>
                <div class="form-floating col-md-4 email-form">
                    <input type="email" class="form-control" name="email" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput" style="left: 10px;">Email address:</label>
                </div>
                <div class="col-md-3 footer-submit-button">
                    <button type="submit" name="subscribe" class="btn-submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="row main-row">
            <div class="main-info col-md-5">
                <div class="row row1 mb-0">
                    <div class="col-4 image">
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
                        <a href="https://www.newagedentalclinic.com/" target="_blank">
                            <div class="icon">
                                <img src="icons/computer-line.svg" alt="phone">
                            </div>
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="icon">
                            <img src="icons/instagram-fill.svg" alt="phone">
                        </div>
                    </div>
                    <div class="col-2">
                        <a href="https://www.facebook.com/people/New-AGE-Dental-Clinic/100068596843168/"
                            target="_blank">
                            <div class="icon">
                                <img src="icons/facebook-circle-fill.svg" alt="phone">
                            </div>
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="icon">
                            <img src="icons/twitter-x-fill.svg" alt="phone">
                        </div>
                    </div>
                    <div class="col-2">
                        <a href="https://wa.me/+918169258231" target="_blank">
                            <div class="icon">
                                <img src="icons/whatsapp-fill-black.svg" alt="phone" style="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row row3">
                    <div class="col-5">
                        <button class="btn-about">About Us</button>
                    </div>
                    <div class="col-7">
                        <button class="btn-contact-footer">
                            <img src="icons/phoneblack.svg" alt="">
                            <a href="tel:+918169258231" style="text-decoration: none;">
                                <p style="margin: 0; color: black;">8169258231</p>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="line-column"
                style="width: 1px; height: 100%; background-color: white; margin: 70px 0 0 0; padding: 0 0 0 0;">

            </div>
            <div class="lorem-content col-md-3 my-auto">
                <div style="padding: 0 20px;">
                    <h2 class="text-light text-center">Open Hours</h2>
                    <p class="text-light">
                        We are open every day to serve you better. Feel free to visit us during our working hours.
                    </p>
                    <div class="row">
                        <div class="col-6 ">
                            <h6 class="text-light days">Monday - Friday</h6>
                        </div>
                        <div class="col-6 time-col">
                            <h6 class="text-light time
                        ">9:00 AM - 8:30 PM</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-light">Saturday</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="text-light">9:00 AM - 8:30 PM</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-light">Sunday</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="text-light
                        ">10:00 AM - 1:00 PM</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-column"
                style="width: 1px; height: 100%; background-color: white; margin: 70px 0 0 0; padding: 0 0 0 0;">

            </div>
            <div class="col-md-3 quick-links my-auto">
                <h3 class="text-center text-light">Quick Links</h3>
                <div class="quick-link-wrapper">
                    <div class="row quick-link-row" style="flex-wrap: nowrap;">
                        <div class="col-6">
                            <button class="quick-link-btn" onclick="window.location.href='index'">
                                <div class="href-link">
                                    Home
                                </div>
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="quick-link-btn" onclick="window.location.href='faq'">
                                FAQ
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="row quick-link-row" style="flex-wrap: nowrap;">
                        <div class="col-6">
                            <button class="quick-link-btn" onclick="window.location.href='about'">
                                About
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="quick-link-btn" onclick="window.location.href='services'">
                                Services
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="row quick-link-row" style="flex-wrap: nowrap;">
                        <div class="col-6">
                            <button class="quick-link-btn" onclick="window.location.href='contactus'">
                                Contact
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="quick-link-btn" onclick="window.location.href='blog'">
                                Blogs
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="row quick-link-row" style="flex-wrap: nowrap;">
                        <div class="col-6">
                           
                            <button class="quick-link-btn" onclick="window.location.href='index'">
                                Terms
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="quick-link-btn" onclick="window.location.href='index'">
                                Policy
                                <div class="btn-arrow">
                                    <img src="icons/slant-arrow.svg" alt="">
                                </div>
                            </button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="big-line-row" style="margin-top: 20px;">
            <div class="big-line"></div>
        </div>
        <div class="row" style="padding: 16px;">
            <h6 class="text-center text-light">@COPYRIGHT 2024 | All right are reserved to <a
                    href="https://www.newagedentalclinic.com/" class="text-light">New Age Dental Clinic</a>
                <!-- <a href="https://sahilmane.me" class="text-light">Sahil Mane</a> and <a href="https://harshugupta.me" class="text-light">Harsh Gupta</a> -->
            </h6>
        </div>
</footer>