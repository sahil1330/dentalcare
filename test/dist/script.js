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