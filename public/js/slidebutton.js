const sliderContainer = document.querySelector('.slider-container');

// Function to handle wheel events (desktop)
function handleWheelEvent(e) {
    e.preventDefault();
    sliderContainer.scrollLeft += e.deltaY;
}

// Function to handle touch events (mobile)
let startX;
let scrollLeft;

function handleTouchStart(e) {
    startX = e.touches[0].pageX - sliderContainer.offsetLeft;
    scrollLeft = sliderContainer.scrollLeft;
}

function handleTouchMove(e) {
    const x = e.touches[0].pageX - sliderContainer.offsetLeft;
    const walk = (x - startX) * 2; // Adjust scroll speed
    sliderContainer.scrollLeft = scrollLeft - walk;
}

// Add event listeners
sliderContainer.addEventListener('wheel', handleWheelEvent);
sliderContainer.addEventListener('touchstart', handleTouchStart);
sliderContainer.addEventListener('touchmove', handleTouchMove); 

