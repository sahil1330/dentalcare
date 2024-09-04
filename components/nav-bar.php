<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
    display: flex;
    justify-content: space-between;
    padding: 12px 20px;
    margin-left: 2%;
    margin-right: 2%;
    align-items: center;
    min-height: 8vh;
    border: 1px solid #f5f5f5;
    border-radius: 20px;
    background-color: #f5f5f5;
    font-family: 'Poppins', sans-serif;
    position: relative;
}
nav ul{
    display: flex;
    justify-content: center;
    list-style: none;
    margin-left: 510px;
    gap: 40px;
}
nav ul a{
    text-decoration: none;
    color: #7b7b7b;
    font-size: 16px;
    font-weight: 500;
}
#active{
    color: #000;
}
.search-and-profile{
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
.profile p{
    font-size: 16px;
    font-weight: 500;
}
.remaining-nav{
    display: flex;
    gap: 32px;
    align-items: center;    
}
.logo{
    width: 80px;
    height: 90px;
    overflow: visible;
    border-radius: 0 0 16px 16px;
    box-shadow: 5px 5px 5px 5px;
    position: absolute;
    z-index: 1;
}
    </style>
</head>
<body>
<nav>
        <div class="logo">
          <img src="icons/logo.svg" alt="Dental Care" />
        </div>
        <ul>
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
              <img
                src="icons/Izoog_skin_pfp 1.png"
                alt="Profile"
                width="30px"
              />
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