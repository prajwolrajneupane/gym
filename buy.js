let cart = [];
const cartCount = document.getElementById('cart-count');
const cartOverlay = document.getElementById('cart-overlay');
const cartItems = document.getElementById('cart-items');
const totalSumElement = document.getElementById('cart-total');

function addToCart(productName, productPrice) {
    let numericPrice = parseFloat(productPrice.replace('Rs.', '').replace(',', ''));
    cart.push({ product: productName, price: numericPrice });
    updateCart(); 
}

function updateCart() {
    let cartContent = '';
    let itemCount = cart.length;
    let totalSum = 0;

    cart.forEach(item => {
        cartContent += `<div>${item.product} - Rs. ${item.price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</div>`;
        totalSum += item.price;
    });

    cartItems.innerHTML = cartContent;
    cartCount.textContent = itemCount; 
    totalSumElement.textContent = `Total: Rs. ${totalSum.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`; 
}

function buyNow(productName, productPrice) {
    alert(`You are buying ${productName} for ${productPrice}.`);
}

function toggleCart() {
    cartOverlay.style.display = (cartOverlay.style.display === 'none' || cartOverlay.style.display === '') ? 'block' : 'none';
}
function clearCart() {
    cart = [];
    updateCart(); 
    toggleCart();
}
cartOverlay.style.display = 'none';
