let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

// CARRINHO
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
}[
    {
        "id": 1,
        "nome": "Whey Protein Isolate",
        "preco": 189.90,
        "categoria": "Proteínas",
        "imagem": "https://images.unsplash.com/photo-1593095191071-837a598c8802?q=80&w=400&auto=format&fit=crop"
    },
    {
        "id": 2,
        "nome": "Creatina Monohidratada",
        "preco": 95.00,
        "categoria": "Performance",
        "imagem": "https://images.unsplash.com/photo-1550345332-09e3ac987658?q=80&w=400&auto=format&fit=crop"
    },
    {
        "id": 3,
        "nome": "BCAA 2:1:1",
        "preco": 79.90,
        "categoria": "Recuperação",
        "imagem": "https://images.unsplash.com/photo-1579722820308-d74e571900a9?q=80&w=400&auto=format&fit=crop"
    }
]

// SLIDER 
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