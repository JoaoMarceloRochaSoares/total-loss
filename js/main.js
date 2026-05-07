let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

// CARRINHO
let cart = [];
let total = 0;

function toggleCart(){
    document.getElementById("cart-sidebar").classList.toggle("active");
}

function addToCart(name,price){
    cart.push({name,price});
    total += price;
    updateCart();
}

function updateCart(){
    document.getElementById("cart-items").innerHTML =
        cart.map(item=>`
            <div class="cart-item">
                <p>${item.name}</p>
                <p>R$ ${item.price.toFixed(2)}</p>
            </div>
        `).join("");

    document.getElementById("cart-count").innerText = cart.length;
    document.getElementById("total-price").innerText = total.toFixed(2);
}

// SLIDER (AGORA FUNCIONA 100%)
new Swiper(".home-slider",{
    loop:true,
    autoplay:{
        delay:3000,
        disableOnInteraction:false
    },
    pagination:{
        el:".swiper-pagination",
        clickable:true
    }
});