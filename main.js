let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

// ===== CARRINHO =====
let cart = [];

const cartIcon = document.getElementById("cart-icon");
const cartSidebar = document.getElementById("cart-sidebar");

cartIcon.addEventListener("mouseenter", () => {
    cartSidebar.classList.add("active");
});

cartSidebar.addEventListener("mouseleave", () => {
    cartSidebar.classList.remove("active");
});

function addToCart(name, price) {
    const existingProduct = cart.find(item => item.name === name);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
    updateCart();
}

function removeFromCart(name) {
    cart = cart.filter(item => item.name !== name);
    updateCart();
}

function changeQuantity(name, change) {
    const product = cart.find(item => item.name === name);
    if (!product) return;
    product.quantity += change;
    if (product.quantity <= 0) {
        removeFromCart(name);
        return;
    }
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById("cart-items");
    const cartCount = document.getElementById("cart-count");
    const totalPrice = document.getElementById("total-price");
    cartItems.innerHTML = "";
    let total = 0;
    let totalItems = 0;

    cart.forEach(item => {
        total += item.price * item.quantity;
        totalItems += item.quantity;
        let div = document.createElement("div");
        div.classList.add("cart-item");
        div.innerHTML = `
            <div class="cart-product-info">
                <p class="cart-product-name">${item.name}</p>
                <div class="cart-quantity">
                    <button onclick="changeQuantity('${item.name}', -1)">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="changeQuantity('${item.name}', 1)">+</button>
                </div>
            </div>
            <div class="cart-right">
                <p>R$ ${(item.price * item.quantity).toFixed(2)}</p>
                <button class="remove-btn" onclick="removeFromCart('${item.name}')">✖</button>
            </div>
        `;
        cartItems.appendChild(div);
    });

    cartCount.innerText = totalItems;
    totalPrice.innerText = total.toFixed(2);
}

// ===== PRODUTOS =====
const products = [
    { title: "Kit Whey Gourmet 100g", price: 164.90, oldPrice: 210.88, discount: "-13%", image: "https://www.gsuplementos.com.br/upload/produto/layout/4074/mockup.webp", launch: true },
    { title: "Kit Whey Gourmet 400g e Creatina 250g", price: 109.90, oldPrice: 149.77, discount: "-18%", image: "https://product-data.raiadrogasil.io/images/18249088.webp", launch: true },
    { title: "Q-Vita Whey Gourmet", price: 20.90, image: "https://www.qvita.com.br/img/site/1795/b/10646865.jpg" },
    { title: "Kit Daily Whey 800g e Creatina 250g", price: 124.90, oldPrice: 166.44, discount: "-17%", image: "https://m.magazineluiza.com.br/a-static/420x420/kit-2x-whey-protein-waxy-whey-pote-900g-bcaa-100g-power-creatina-100g-waxy-maize-800g-coqueteleira-600-ml-bodybuilders/raia-fit/9426/db09a44a74a2203bb8c8f25c30197a08.jpeg", launch: true },
    { title: "Bcaa - Leucina - Isoleucina - Valina 60 Cápsulas", price: 99.90, oldPrice: 129.90, discount: "-15%", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDlVGuNCjnbUet4xrrjsOlzihr1XaHxLQG6g&s" },
    { title: "Barra de Proteína - Sabor limão", price: 52.72, oldPrice: 65.90, discount: "-20%", image: "https://www.gsuplementos.com.br/upload/produto/layout/1120/mockup-v3.webp" },
    { title: "Creatina Em Pó 100g Creapure", price: 166.44, image: "https://a-static.mlcdn.com.br/280x210/bcaa-120-caps-creatina-250g-creapure-growth-supplements/maxpowersuplementos/8256935310/0c0d603299bb4d3fc72c77ada9632754.jpeg" },
    { title: "Blend Vegan 1kg", price: 166.44, image: "https://www.gsuplementos.com.br/_nuxt/img/saude-alinhada-v2.f6dab4f.png" },
    { title: "Whey Protein Concentrado 1kg", price: 166.44, image: "https://www.gsuplementos.com.br/upload/produto/layout/2/mockup-v2.webp" },
    { title: "Hipercalórico 1kg Growth Supplements", price: 166.44, image: "https://www.gsuplementos.com.br/upload/produto/imagem/top-hipercal-rico-sabor-morango-1kg-growth-supplements-1.webp" },
    { title: "Hipercalórico com Whey Protein 3kg", price: 166.44, image: "https://m.magazineluiza.com.br/a-static/420x420/combo-2x-hipercaloricos-massa-red-brutal-gainers-bolic-3kg-cada-red-series/workshapefitsuplementos/kit-2xbolic-3/864ee46687bd544c0439917bb64d7496.jpeg" },
    { title: "100% Whey Protein Pure 900g", price: 166.44, image: "https://cdn.awsli.com.br/2500x2500/2516/2516745/produto/382822947/whey-bcaa-monster-mockup-a-87ktdttg30.jpg" },
    { title: "100% Whey Protein 1kg", price: 166.44, image: "https://fabricadesuplementos.cdn.magazord.com.br/img/2026/04/produto/1329/chocolate-2.jpg?ims=596x596" }
];

const productList = document.getElementById("product-list");

if (productList) {
    const path = window.location.pathname;
    const isHomePage = path === '/' || path.endsWith('index.html') || path.endsWith('index.php');
    const visibleProducts = isHomePage ? products.slice(0, 3) : products;

    visibleProducts.forEach(p => {
        const card = document.createElement("div");
        card.className = "tl-card";
        card.innerHTML = `
            ${p.discount ? `<div class="tl-badge">${p.discount}</div>` : ""}
            <div class="tl-product-img">
                <img src="${p.image}" alt="${p.title}" loading="lazy">
            </div>
            ${p.launch ? `<div class="tl-tag">LANÇAMENTO</div>` : ""}
            <div class="tl-title">${p.title}</div>
            ${p.oldPrice ? `<div class="tl-old-price">R$ ${p.oldPrice.toFixed(2)}</div>` : ""}
            <div class="tl-price">R$ ${p.price.toFixed(2)}</div>
            <div class="tl-installment">até 6x sem juros</div>
            <button class="btn" onclick="addToCart('${p.title}', ${p.price})">COMPRAR</button>
        `;
        productList.appendChild(card);
    });
}

// SLIDER 
<<<<<<< HEAD
new Swiper(".home-slider", {
    loop: true,
    autoplay: { delay: 3000, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination", clickable: true }
});
=======
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

/// Parte do popup do suporte

document.getElementById('contato-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch('Suporte_action.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(resposta => {
        const popup = document.getElementById('popup-contato');
        const msg = document.getElementById('popup-msg');
        if (resposta.includes('sucesso')) {
            msg.textContent = 'Mensagem enviada com sucesso!';
        } else {
            msg.textContent = 'Erro ao enviar mensagem. Tente novamente!';
        }
        popup.style.display = 'flex';
    });
}

function fecharPopupContato() {
    const card = document.querySelector('.popup-contato-card');
    card.classList.add('fechando');
    setTimeout(() => {
        document.getElementById('popup-contato').style.display = 'none';
        card.classList.remove('fechando');
    }, 300);
}