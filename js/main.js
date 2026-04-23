let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
let cart = [];
let total = 0;
 
// Abrir/fechar carrinho
function toggleCart() {
    document.getElementById("cart-sidebar").classList.toggle("active");
}
 
// Adicionar item ao carrinho
function addToCart(name, price) {
    cart.push({ name, price });
    total += price;
 
    updateCart();
}
 
// Atualizar carrinho na tela
function updateCart() {
    const cartItems = document.getElementById("cart-items");
    const cartCount = document.getElementById("cart-count");
    const totalPrice = document.getElementById("total-price");
 
    cartItems.innerHTML = "";
 
    cart.forEach(item => {
        let div = document.createElement("div");
        div.classList.add("cart-item");
 
        div.innerHTML = `
            <p>${item.name}</p>
            <p>R$ ${item.price.toFixed(2)}</p>
        `;
 
        cartItems.appendChild(div);
    });
 
    cartCount.innerText = cart.length;
    totalPrice.innerText = total.toFixed(2);
}