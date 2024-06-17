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
// console.log("Succwss");
fetch("./jsonFiles/mens.json").then((data) => {
    return data.json();
}).then((objectData) => {
    // console.log(objectData[0].title);
    let tableData = "";
    objectData.map((values) => {
        // if(values.category === "men's clothing"){ 
        tableData += ` <div onlick="go()" class="card text-center" style="width:17.5rem;">
            <img src="${values.image}" style="margin-top:10px; height:12rem; width:10rem; margin-left:3rem" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">${values.title}</h4>
                <b class="desc">${values.description}</b><br>
                <span class="offer">Limited time deal</span>
                <p class="card-text">Ratting: ${values.rate} <br>Qty: 100</p>
                <div class="card-text" id="mrp"><span class="off">-60% </span><sup>₹</sup>${values.price}</div>
                <div class="card-text">Free Delivery by Amazon</div>
            </div>
        </div>`
        // }
        // document.getElementById(btnId).addEventListener("click", () => addToCart(values.image, values.title, values.description, values.rate, values.price));

    });
    document.getElementById('maindiv').innerHTML = tableData;
}).catch((error) => {
    console.log(error);
})
function go(){
    window.location.href = "details.php";
}
function addToCart(img, title, desc, rate, price) {
    console.log("img :", img)
    console.log("title :", title)
    console.log("discription :", desc)
    console.log("rate :", rate)
    console.log("price :", price)
}
function details() {
    fetch("./jsonFiles/mens.json")
        .then((data) => {
            return data.json();
        })
        .then((objectData) => {
            let tableData = "";
            objectData.forEach((values, index) => {
                let btnId = `btn-${index}`; // Generate unique ID for each button
                tableData += ` <div class="card text-center" style="width:17.5rem;">
                    <img src="${values.image}" style="margin-top:10px; height:12rem; width:10rem; margin-left:3rem" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">${values.title}</h4>
                        <b class="desc">${values.description}</b><br>
                        <span class="offer">Limited time deal</span>
                        <p class="card-text">Ratting: ${values.rate} <br>Qty: 100</p>
                        <div class="card-text" id="mrp"><span class="off">-60% </span><sup>₹</sup>${values.price}</div>
                        <div class="card-text">Free Delivery by Amazon</div>
                        <button id="${btnId}" type="submit" cla ss="cart">Add to cart</button>
                    </div>
                </div>`;

            });
            document.getElementById('maindiv').innerHTML = tableData;
        })
        .catch((error) => {
            console.log(error);
        });
}