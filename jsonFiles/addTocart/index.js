document.getElementById("addToCartBtn").addEventListener("click", function () {
    // Here you can put the logic for adding the item to the cart,
    // such as storing it in local storage or sending a request to a server.

    // For demonstration purposes, let's pretend we're adding the item to the cart
    // by storing it in local storage.

    const itemToAdd = {
        "id": 1,
        "title": "Lycra Shirt",
        "category": "mens category",
        "description": "Dennis Lingo Men's Solid",
        "img": "https://m.media-amazon.com/images/I/71QrkXBPABL._AC_UL480_FMwebp_QL65_.jpg",
        "price": "₹500",
        "rate": "4"
    };

    // Retrieve existing cart items from local storage
    let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

    // Add the new item to the cart
    cartItems.push(itemToAdd);

    // Store the updated cart items in local storage
    localStorage.setItem("cartItems", JSON.stringify(cartItems));

    // Optionally, you can provide feedback to the user that the item has been added to the cart

    // Redirect to the cart page
    window.location.href = "cart.html";
});
