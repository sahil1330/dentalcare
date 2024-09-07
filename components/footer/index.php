<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .main-container {
      width: 100% height: 691px;
      position: relative;
    }

    .background-gradient {
      width: 100%;
      height: 80vh;
      position: absolute;
      top: 85px;
      background: linear-gradient(291deg, rgba(97, 171, 215, 0.70) 13%, rgba(86.47, 129.54, 191.31, 0.70) 39%, rgba(86.93, 131.33, 192.33, 0.70) 58%, rgba(81, 108, 179, 0.70) 78%);
      border-radius: 40px;
    }

    .newsletter-container {
      width: 1184px;
      height: 160px;
      position: absolute;
      top: 6px;
      left: 108px;
      background: #E0E0E0;
      border-radius: 32px;
    }

    .divider-horizontal {
      width: 1400px;
      position: absolute;
      top: 547px;
      border: 1px white solid;
    }

    .divider-vertical.left {
      width: 300px;
      position: absolute;
      top: 247px;
      left: 600px;
      transform: rotate(90deg);
      border: 1px white solid;
    }

    .divider-vertical.right {
      width: 296px;
      position: absolute;
      top: 251px;
      left: 962px;
      transform: rotate(90deg);
      border: 1px white solid;
    }

    .clinic-name {
      position: absolute;
      top: 257px;
      left: 180px;
      font-family: Montserrat;
      color: white;
      font-size: 32px;
      line-height: 30px;
      letter-spacing: 1.92px;
    }

    .clinic-title {
      font-weight: 400;
    }

    .clinic-subtitle {
      font-weight: 600;
    }

    .clinic-logo {
      width: 108px;
      height: 107px;
      position: absolute;
      top: 232px;
      left: 52px;
      background: #D5F2FF;
      border-radius: 26px 26px 2px 2px;
    }

    .doctor-name {
      position: absolute;
      top: 225px;
      left: 180px;
      font-family: Montserrat;
      font-size: 20px;
      font-weight: 300;
      color: white;
      letter-spacing: 1.20px;
    }

    .services {
      width: 381px;
      height: 29px;
      position: absolute;
      top: 318px;
      left: 112px;
      text-align: center;
      font-family: Montserrat;
      font-size: 14px;
      font-weight: 300;
      color: white;
      letter-spacing: 0.84px;
    }

    .dot {
      width: 50px;
      height: 50px;
      position: absolute;
      background: white;
      border-radius: 9999px;
    }

    .dot1 {
      left: 77px;
      top: 382px;
    }

    .dot2 {
      left: 156px;
      top: 382px;
    }

    .dot3 {
      left: 235px;
      top: 382px;
    }

    .dot4 {
      left: 314px;
      top: 382px;
    }

    .dot5 {
      left: 393px;
      top: 382px;
    }

    .input-container {
      width: 472px;
      height: 72px;
      position: absolute;
      top: 49px;
      left: 492px;
      background: white;
      border-radius: 15px;
    }

    .submit-container {
      width: 210px;
      height: 72px;
      position: absolute;
      top: 49px;
      left: 1026px;
      background: #50AADC;
      border-radius: 15px;
    }

    .newsletter-text {
      position: absolute;
      top: 38px;
      left: 169px;
      font-family: League Spartan;
      font-size: 40px;
      font-weight: 600;
      color: black;
      letter-spacing: 2.40px;
    }

    .sign-up-title {
      line-height: 47px;
    }

    .email-placeholder {
      position: absolute;
      top: 82px;
      left: 509px;
      font-family: JejuGothic;
      font-size: 20px;
      color: #969696;
      letter-spacing: 1.20px;
    }

    .email-label {
      position: absolute;
      top: 55px;
      left: 506px;
      font-family: JejuGothic;
      font-size: 16px;
      color: black;
      letter-spacing: 0.96px;
    }

    .contact-btn-container {
      position: absolute;
      top: 471px;
      left: 95px;
    }

    .contact-btn {
      height: 37px;
      background: white;
      border-radius: 45px;
      display: inline-block;
      padding: 0 15px;
      font-family: JejuGothic;
      font-size: 13px;
      line-height: 30px;
      letter-spacing: 0.78px;
      margin-right: 10px;
    }

    .about-us {
      color: white;
      background: transparent;
      border: 1px white solid;
    }

    .phone {
      color: black;
    }

    .quick-links-container {
      position: absolute;
      top: 313px;
      left: 998px;
    }

    .quick-link {
      height: 37px;
      background: white;
      border-radius: 45px;
      margin-bottom: 15px;
      font-family: JejuGothic;
      font-size: 13px;
      line-height: 30px;
      letter-spacing: 0.78px;
      padding: 0 20px;
      color: black;
    }

    .quick-link .text {
      color: black;
    }

    .quick-link .dot {
      background: black;
      border-radius: 9999px;
      margin-left: 10px;
    }

    .home,
    .faq,
    .terms,
    .privacy {
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <div class="main-container">
    <div class="background-gradient"></div>
    <div class="newsletter-container">
      <form action="subscribe.php" method="post">
        <div class="newsletter-text">
          <span class="sign-up-title">Sign up to <br />our Newsletter</span>
        </div>
        <div class="input-container">
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="submit-container">
          <button type="submit">Subscribe</button>
        </div>
      </form>
    </div>


    <div class="clinic-name">
      <span class="clinic-title">NEW AGE</span>
      <span class="clinic-subtitle">DENTAL CLINIC</span>
    </div>

    <div class="clinic-logo"></div>
    <div class="doctor-name">DR. ANAND SHAHS</div>
    <div class="services">IMPLANT . AESTHETICS . LASER</div>

    <div class="dot dot1"></div>
    <div class="dot dot2"></div>
    <div class="dot dot3"></div>
    <div class="dot dot4"></div>
    <div class="dot dot5"></div>
  </div>
</body>

</html>