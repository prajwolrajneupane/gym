function addToCart(product, price) {
    console.log(`Adding ${product} to cart at ${price}`);
    let numericPrice = parseFloat(price.replace('$', ''));
    cart.push({ product, price: numericPrice });
    updateCart();
}

function updateCart() {
    console.log('Updating cart');
    let cartContent = '';
    let itemCount = cart.length;
    let totalSum = 0;

    cart.forEach(item => {
        cartContent += `<div>${item.product} - $${item.price.toFixed(2)}</div>`;
        totalSum += item.price;
    });

    console.log(`Cart items: ${cartContent}`);
    console.log(`Total sum: ${totalSum.toFixed(2)}`);

    cartItems.innerHTML = cartContent;
    cartCount.textContent = itemCount;
    totalSumElement.textContent = totalSum.toFixed(2);
}
