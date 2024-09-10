// Initialize the Before/After Slider
document.addEventListener('DOMContentLoaded', function() {
    // Example of basic slider functionality
    // You'll need to add more functionality for a complete slider experience
    var beforeAfterSlider = document.querySelector('.before-after-slider');
    
    beforeAfterSlider.addEventListener('mousemove', function(event) {
        var rect = beforeAfterSlider.getBoundingClientRect();
        var x = event.clientX - rect.left;
        var percentage = (x / beforeAfterSlider.offsetWidth) * 100;
        beforeAfterSlider.querySelector('img:nth-child(2)').style.clip = `rect(0, ${percentage}%, 100%, 0)`;
    });
    
    // Initialize number animation
    let numberElement = document.querySelector('.stats-box .number');
    let count = 0;
    const target = 100; // Replace with your target number
    
    function updateNumber() {
        if (count < target) {
            count++;
            numberElement.textContent = count;
            setTimeout(updateNumber, 50); // Adjust speed as needed
        }
    }
    
    updateNumber();
});
