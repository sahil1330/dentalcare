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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/service-content.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/new-nav.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/fonts.css">

    <style>
        @font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/roboto/v32/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
}
.beer-slider {
  display: inline-block;
  font-family: 'Roboto', sans-serif;
  letter-spacing: 1px;
  overflow: hidden;
  position: relative;
  text-transform: uppercase;
}
.beer-slider img {
  vertical-align: bottom;
}
.beer-slider > img {
  height: auto;
  max-width: 100%;
}
.beer-reveal {
  bottom: 0;
  left: 0;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  right: 50%;
  top: 0;
  transition: opacity 0.35s;
  z-index: 1;
}
.beer-reveal > :first-child {
  max-width: none;
  width: 200%;
}
.beer-reveal img:first-child {
  height: auto;
}
.beer-range {
  -webkit-appearance: slider-horizontal !important;
  -moz-appearance: none;
  bottom: 0;
  cursor: pointer;
  height: 100%;
  left: -1px;
  margin: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  -ms-touch-action: auto;
  touch-action: auto;
  width: calc(100% + 2px);
  z-index: 2;
}
.beer-range:focus ~ .beer-handle {
  background: rgba(255, 255, 255, 0.85);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);
}
.beer-range::-webkit-slider-thumb {
  height: 300vh;
  -webkit-appearance: none;
}
.beer-range::-moz-range-thumb {
  height: 300vh;
  -webkit-appearance: none;
}
.beer-range::-ms-tooltip {
  display: none;
}
.beer-handle {
  background: rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0);
  color: #000;
  height: 48px;
  left: 50%;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 50%;
  transform: translate3d(-50%, -50%, 0);
  transition: background 0.3s, box-shadow 0.3s, opacity 0.5s 0.25s;
  width: 48px;
  z-index: 2;
}
.beer-handle:before,
.beer-handle:after {
  border-left: solid 2px;
  border-top: solid 2px;
  content: '';
  height: 10px;
  position: absolute;
  top: 50%;
  transform-origin: 0 0;
  width: 10px;
}
.beer-handle:before {
  left: 10px;
  transform: rotate(-45deg);
}
.beer-handle:after {
  right: 0;
  transform: rotate(135deg);
}
.beer-slider[data-beer-label]:after,
.beer-reveal[data-beer-label]:after {
  background: rgba(255, 255, 255, 0.75);
  border-radius: 4px;
  content: attr(data-beer-label);
  font-size: 12px;
  line-height: 1;
  padding: 6px;
  position: absolute;
  top: 10px;
}
.beer-slider[data-beer-label]:after {
  right: 10px;
}
.beer-reveal[data-beer-label]:after {
  left: 10px;
}
.beer-slider[data-beer-label=""]:after,
.beer-reveal[data-beer-label=""]:after {
  content: none;
}
.beer-ready .beer-reveal,
.beer-ready .beer-handle {
  opacity: 1;
}
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
                    <a href="about" class="btn btn-primary">Learn More</a>
                    <a href="contactus" class="btn btn-secondary">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Before and After Slider -->
    <section class="before-after py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="beer-slider beer-slider-wlabels" data-beer-label="before" id="slider1">
            <img src="<?php echo $service_before; ?>" alt="before" />
                <div class="beer-reveal" data-beer-label="after">
                <img src="<?php echo $service_after; ?>" alt="After" />
                </div>
            </div>
            </div>
            </div>
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
    </section> -->

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
    <script>
        var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}var BeerSlider = function () {

function BeerSlider(element) {var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},_ref$start = _ref.start,start = _ref$start === undefined ? '50' : _ref$start,_ref$prefix = _ref.prefix,prefix = _ref$prefix === undefined ? 'beer' : _ref$prefix;_classCallCheck(this, BeerSlider);
    this.start = parseInt(start) ? Math.min(100, Math.max(0, parseInt(start))) : 50;
    this.prefix = prefix;
    if (!element || element.children.length !== 2) {
        return;
    }
    this.element = element;
    this.revealContainer = this.element.children[1];
    if (this.revealContainer.children.length < 1) {
        return;
    }
    this.revealElement = this.revealContainer.children[0];
    this.range = this.addElement('input', {
        type: 'range',
        class: this.prefix + '-range',
        'aria-label': 'Percent of revealed content',
        'aria-valuemin': '0',
        'aria-valuemax': '100',
        'aria-valuenow': this.start,
        value: this.start,
        min: '0',
        max: '100' });

    this.handle = this.addElement('span', {
        class: this.prefix + '-handle' });

    this.onImagesLoad();
}_createClass(BeerSlider, [{ key: 'init', value: function init()
    {
        this.element.classList.add(this.prefix + '-ready');
        this.setImgWidth();
        this.move();
        this.addListeners();
    } }, { key: 'loadingImg', value: function loadingImg(
    src) {
        return new Promise(function (resolve, reject) {
            if (!src) {
                resolve();
            }
            var img = new Image();
            img.onload = function () {return resolve();};
            img.onerror = function () {return reject();};
            img.src = src;
        });
    } }, { key: 'loadedBoth', value: function loadedBoth()
    {
        var mainImageSrc = this.element.children[0].src || this.element.children[0].getAttribute('data-' + this.prefix + '-src');
        var revealImageSrc = this.revealElement.src || this.revealElement.getAttribute('data-' + this.prefix + '-src');
        return Promise.all([this.loadingImg(mainImageSrc), this.loadingImg(revealImageSrc)]);
    } }, { key: 'onImagesLoad', value: function onImagesLoad()
    {var _this = this;
        if (!this.revealElement) {
            return;
        }
        this.loadedBoth().then(
        function () {
            _this.init();
        },
        function () {
            console.error('Some errors occurred and images are not loaded.');
        });

    } }, { key: 'addElement', value: function addElement(
    tag, attributes) {
        var el = document.createElement(tag);
        Object.keys(attributes).forEach(function (key) {
            el.setAttribute(key, attributes[key]);
        });
        this.element.appendChild(el);
        return el;
    } }, { key: 'setImgWidth', value: function setImgWidth()
    {
        this.revealElement.style.width = getComputedStyle(this.element)['width'];
    } }, { key: 'addListeners', value: function addListeners()
    {var _this2 = this;
        var eventTypes = ['input', 'change'];
        eventTypes.forEach(function (i) {
            _this2.range.addEventListener(i, function () {_this2.move();});
        });
        window.addEventListener('resize', function () {_this2.setImgWidth();});
    } }, { key: 'move', value: function move()
    {
        this.revealContainer.style.width = this.range.value + '%';
        this.handle.style.left = this.range.value + '%';
        this.range.setAttribute('aria-valuenow', this.range.value);
    } }]);return BeerSlider;}();


new BeerSlider(document.getElementById('slider1'));
    </script>
</body>

</html>