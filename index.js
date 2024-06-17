// alert("1")
let currentScrollPosition = 0;
let scrollAmount = 320;

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


fetch("mens.json").then((data) => {
    return data.json();
}).then((objectData) => {
    console.log(objectData[0].title);
    let tableData = "";
    objectData.map((values) => {
        // if(values.category === "men's clothing"){ 
        tableData += ` <div class="card text-center" style="width:17.5rem;">
            <img src="${values.image}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">${values.title}</h4>
                <b>${values.description}</b>
                <h6 class="card-text">MRP: ₹${values.price}</h6>
                <p class="card-text">Ratting: ${values.rate} <br>Qty: 100</p>
            </div>
        </div>`
        // }
    });
    document.getElementById('table-body').innerHTML = tableData;
}).catch((error) => {
    console.log(error);
})