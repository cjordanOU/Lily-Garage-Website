
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

    // Calculates the final price
    var totalPrice = 0;
    totalPrice = itemPrice + totalPrice;
    var totalLocation = document.getElementById("orderTotalPrice");
    totalLocation.innerHTML = "$" + totalPrice;
}

