<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS (required for toggling) -->

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        /* Custom styling */
        body {
            margin: 0;
            padding: 0;
            background-color: #666666;
            overflow-x: hidden; /* Prevent horizontal scrolling */

        }

        .navbar-custom {
            background-color: #f3f3f3;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1000;
            width: 95%;
            height: 60px;
            border-radius: 20px;
        }

        .nav-bar-box {
            width: 100%;
            position: relative;
            margin: 30px;
            margin-left: 50px;
        }

        .logo-container {
            height: 130px;
            width: 100px;
            background-color: white;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            margin-left: 50px;
            margin-top: -30px;
            z-index: 10;
        }

        .logo-container img {
            height: 60px;
            width: auto;
            margin-top: 25px;
        }

        .nav-item {
            margin-left: 25px;
        }

        .nav-item a {
            font-weight: bold;
            color: #333;
            margin: 0 15px;
            text-decoration: none;
        }

        .nav-item a:hover {
            color: #000;
        }

        .search-box {
            display: none;
            position: relative;
            padding: 10px;
        }

        .search-box input {
            width: 100%;
            border: 1px solid #333;
            padding: 10px;
            border-radius: 25px;
        }

        .user-profile {
            display: none; /* Initially hidden */
            align-items: center;
            gap: 10px;
            border: 1px solid #333;
            padding: 5px 15px;
            border-radius: 25px;
        }

        .user-profile img {
            border-radius: 50%;
            height: 30px;
            width: 30px;
            object-fit: cover;
        }

        .overlay-search {
            display: none;
            position: fixed;
            top: 70px;
            left: 0;
            width: 100%;
            height: 100px;
            background-color: rgba(0, 0, 0, 0.1);
            z-index: 9;
            padding: 20px;
        }

        /* Adjustments for PC view */
        @media (min-width: 992px) {
            .logo-container {
                left: 0; /* Align to the left */
                transform: none; /* Remove centering for PC */
            }

            /* Ensure the search icon is visible on PC */
            .search-box {
                
                display: none;
            }
        }

        /* Adjustments for mobile/tablet views */
        @media (max-width: 991.98px) {
            .nav-bar-box {
                margin: 20px 10px;
                margin-left: none;
                
                
            }
            .logo-container {
                left: 50%;
                transform: translateX(-50%);
                margin: 0 auto;
            }

            .navbar-toggler {
                order: 2;
                position: fixed;
                right: 35px;
                z-index: 1001;
                border: none; /* Remove border around menu button */
            }

            .collapse {
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: #f3f3f3;
                z-index: 9;
                padding: 15px;
                margin-top: 20px;
                border-radius: 10px;
            }

            .user-profile {
                display: flex; /* Shown in menu */
                justify-content: center;
                margin-bottom: 15px;
            }

            .search-box {
                display: block;
                margin-bottom: 15px;
            }
        }

        @media (max-width: 768px) {
            .navbar-brand {
                margin-right: auto;
            }

            .nav-item {
                margin: 0;
            }
        }
    </style>
</head>
<body>

<!-- Navbar Box -->
<div class="nav-bar-box">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <div class="logo-container">
                <img src="icons/logo.svg" alt="Logo">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- User profile on top of the menu in mobile view -->
                <div class="user-profile">
                    <img src="https://via.placeholder.com/30" alt="User">
                    <span>izoog</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="search-box" id="mobileSearch">
                        <input type="text" placeholder="Search">
                    </div>
                    <i class="bi bi-search ms-3" style="cursor: pointer;" id="searchIcon"></i>
                </div>
            </div>
        </div>
    </nav>
</div>

<!-- Search Box Overlay (PC) -->
<div class="overlay-search" id="searchOverlay">
    <input type="text" placeholder="Search">
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
<script>
    // Toggle search box on PC when search icon is clicked
    const searchIcon = document.getElementById('searchIcon');
    const searchOverlay = document.getElementById('searchOverlay');
    
    searchIcon.addEventListener('click', () => {
        if (searchOverlay.style.display === 'block') {
            searchOverlay.style.display = 'none';
        } else {
            searchOverlay.style.display = 'block';
        }
    });
</script>
</body>
</html>
