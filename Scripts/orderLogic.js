// Global Variables
var totalPrice = 0.0;

// Add to Cart function used on 'orderOnline.php'
function addToCart(itemName, itemPrice) {
    // Create the element
    var orderItem = document.createElement("p");
    orderItem.innerHTML = itemName;
    var orderPrice = document.createElement("p");
    orderPrice.innerHTML = "$" + itemPrice;
    orderPrice.setAttribute("class", "priceOfItem");

    // Append element to order cart section
    var cartLocation = document.getElementsByClassName("orderCart")[0];
    cartLocation.appendChild(orderItem);
    cartLocation.appendChild(orderPrice);

    // Update the total price
    updateTotalPrice(itemPrice);

    // Enable checkout button
    document.getElementById("orderCheckoutButton").disabled = false;
}

// Updates the total price of the ordered food
function updateTotalPrice(value) {
    var singlePrice = value;
    singlePrice = parseFloat(singlePrice);
    totalPrice = totalPrice + singlePrice;

    // Fixes rounding errors from the float
    // Changes output to string, dont use totalPricePoint in math
    totalPricePrint = totalPrice.toFixed(2);

    // Changes the total price on the page
    var totalLocation = document.getElementById("orderTotalPrice");
    totalLocation.innerHTML = "Total Price:  $" + totalPricePrint;
}
