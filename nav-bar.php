<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

@font-face {
    font-family: 'JejuGothic';
    src: url('../fonts/JejuGothic-Regular.ttf') format('truetype'); /* Ensure the file extension is correct */
    font-weight: normal;
    font-style: normal;
}

:root {
    --main-font: 'JejuGothic', sans-serif; /* Updated to match the font you imported */
}

/* Basic styles for the navbar */
nav {
    display: flex;
    justify-content: space-between;
    padding: 12px 20px;
    margin: 0 2%;
    align-items: center;
    min-height: 8vh;
    border: 1px solid #f5f5f5;
    border-radius: 25px;
    background-color: #f5f5f5;
    font-family: var(--main-font);
    position: relative;
}

nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
    gap: 40px;
    margin-left: 470px;
    font-family: var(--main-font);
    text-transform: uppercase;
}

nav ul a {
    text-decoration: none;
    color: #7b7b7b;
    font-size: 16px;
    font-weight: 500;
}

#active {
    color: #000;
}

.search-and-profile {
    display: flex;
    gap: 20px;
    align-items: center;
}

.profile {
    display: flex;
    gap: 12px;
    align-items: center;
    border: 2px solid black;
    border-radius: 20px;
    padding: 4px;
}

.profile p {
    font-size: 16px;
    font-weight: 500;
}

.remaining-nav {
    display: flex;
    gap: 32px;
    align-items: center;    
}

.logo {
    margin-left: 10px;
    width: 100px;
    height: 130px;
    border-radius: 0 0 16px 16px;
    box-shadow: 4px 4px 7px 2px rgba(0, 0, 0, 0.3);
    position: absolute;
    z-index: 1;
    background-color: #fff;
}

.logo > img {
    margin: auto;
    padding: 8px;
    padding-top: 15px;
    width: 90%;
    height: 90%;
    justify-content: center;
    display: flex;
    border-radius: 0 0 16px 16px;
}

/* Media Queries for Tablet and Mobile Devices */
@media screen and (max-width: 1024px) {
    nav {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
    }

    nav ul {
        justify-content: flex-start;
        gap: 20px;
        margin-left: 0;
    }

    .logo {
        position: relative;
        margin: 0;
    }

    .remaining-nav {
        width: 100%;
        justify-content: space-between;
    }
}

@media screen and (max-width: 768px) {
    nav ul {
        display: none;
    }

    .menu {
        display: block;
    }

    .logo {
        position: relative;
        margin: 0;
        width: 80px;
        height: 100px;
    }

    .search-and-profile {
        width: 100%;
        justify-content: flex-end;
    }
}

/* Mobile Screen */
@media screen and (max-width: 480px) {
    .profile p {
        display: none;
    }

    .profile img[alt="arrow-down"] {
        display: none;
    }

    .logo {
        width: 60px;
        height: 80px;
    }

    .remaining-nav {
        justify-content: flex-end;
        gap: 10px;
    }

    .search-and-profile {
        gap: 10px;
    }
}


    </style>
</head>
<body>
<nav>
        <div class="logo">
            <img src="..//icons/logo.svg" alt="Dental Care" />
        </div>
        <ul class="hyper-link">
            <li><a href="/" id="active">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="remaining-nav">
            <div class="search-and-profile">
                <div class="search">
                    <img src="icons/search.svg" alt="Search" />
                </div>
                <div class="profile">
                    <img src="icons/Izoog_skin_pfp 1.png" alt="Profile" width="30px" />
                    <p>izoog</p>
                    <img src="icons/arrow-down.svg" alt="arrow-down" />
                </div>
            </div>
            <div class="menu">
                <img src="icons/menu.svg" alt="Menu" />
            </div>
        </div>
    </nav>
</body>
</html>