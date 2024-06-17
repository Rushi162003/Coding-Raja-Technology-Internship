
let currentScrollPosition = 0;
let scrollAmount = 800;

const sCount = document.querySelector('.story-container');
const hScroll = document.querySelector('.horizontal-scroll');
const btnScrollLeft = document.querySelector('#btn-scroll-left');
const btnScrollRight = document.querySelector('#btn-scroll-right');


// btnScrollLeft.style.opacity = '0';

let maxScroll = -sCount.offsetWidth + hScroll.offsetWidth;

function scrollHorizontaly(val) {
    currentScrollPosition += (val * scrollAmount);


    if (currentScrollPosition > 0) {
        currentScrollPosition = 0;
        // btnScrollLeft.style.opacity = '0';
    }

    if (currentScrollPosition < maxScroll) {
        currentScrollPosition = maxScroll;
        // btnScrollRight.style.opacity = '0';
    } 

    sCount.style.left = currentScrollPosition + "px";
}