


document.addEventListener("DOMContentLoaded", function() {
    // Retrieve the item from local storage
    const cartItem = JSON.parse(localStorage.getItem("cartItem"));
  
    // Display the item in the cart
    const cartItemsDiv = document.getElementById("cartItems");
    if (cartItem) {
      cartItemsDiv.innerHTML = `<p>${cartItem.title} - $${cartItem.price}</p>
      <p>${cartItem.id}<p>
      <img src="${cartItem.image}" style="height: 100px; width: 100px;" alt="">`;
    } else {
      cartItemsDiv.innerHTML = "<p>Your cart is empty.</p>";
    }
  });
  