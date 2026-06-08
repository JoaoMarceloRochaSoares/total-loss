// ---- Menu mobile ----
const menuBtn = document.querySelector('#menu-btn');
const navbar  = document.querySelector('.navbar');
if (menuBtn) {
    menuBtn.onclick = () => {
        menuBtn.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    };
}

// ---- Sessão: salva o nome que vem na URL (?usuario=João) ----
(function() {
    const params  = new URLSearchParams(window.location.search);
    const usuario = params.get('usuario');
    if (usuario) {
        localStorage.setItem('tl_usuario', usuario);
        // Remove o parâmetro da URL sem recarregar
        const url = new URL(window.location.href);
        url.searchParams.delete('usuario');
        window.history.replaceState({}, '', url.toString());
    }
})();

// ---- Navbar dinâmica: Login ou Nome do usuário ----
(function() {
    const usuario = localStorage.getItem('tl_usuario');
    if (!navbar) return;

    // Remove link de Login antigo
    navbar.querySelectorAll('a').forEach(a => {
        if (a.textContent.trim() === 'Login') a.remove();
    });

    if (usuario) {
        const link = document.createElement('a');
        link.href = 'conta.html';
        link.innerHTML = `<i class="fas fa-user-circle" style="margin-right:.4rem"></i>${usuario.split(' ')[0]}`;
        navbar.appendChild(link);
    } else {
        const link = document.createElement('a');
        link.href = 'https://perdatotal.up.railway.app/Login/login.php';
        link.textContent = 'Login';
        navbar.appendChild(link);
    }
})();

// ---- Carrinho — persiste no localStorage ----
let cart = [];
try { cart = JSON.parse(localStorage.getItem('tl_cart')) || []; } catch {}

const cartIcon    = document.getElementById("cart-icon");
const cartSidebar = document.getElementById("cart-sidebar");

if (cartIcon)    cartIcon.addEventListener("mouseenter", () => cartSidebar.classList.add("active"));
if (cartSidebar) cartSidebar.addEventListener("mouseleave", () => cartSidebar.classList.remove("active"));

function saveCart() {
    localStorage.setItem('tl_cart', JSON.stringify(cart));
}

function addToCart(name, price) {
    const existing = cart.find(item => item.name === name);
    if (existing) {
        existing.quantity += 1;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
    saveCart();
    updateCart();
}

function removeFromCart(name) {
    cart = cart.filter(item => item.name !== name);
    saveCart();
    updateCart();
}

function changeQuantity(name, change) {
    const product = cart.find(item => item.name === name);
    if (!product) return;
    product.quantity += change;
    if (product.quantity <= 0) { removeFromCart(name); return; }
    saveCart();
    updateCart();
}

function updateCart() {
    const cartItems  = document.getElementById("cart-items");
    const cartCount  = document.getElementById("cart-count");
    const totalPrice = document.getElementById("total-price");
    if (!cartItems) return;

    cartItems.innerHTML = "";
    let total = 0, totalItems = 0;

    cart.forEach(item => {
        total += item.price * item.quantity;
        totalItems += item.quantity;
        const div = document.createElement("div");
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

    if (cartCount)  cartCount.innerText  = totalItems;
    if (totalPrice) totalPrice.innerText = total.toFixed(2);
}

// Botão finalizar — só funciona se logado
const checkoutBtn = document.querySelector(".checkout-btn");
if (checkoutBtn) {
    checkoutBtn.addEventListener("click", () => {
        const usuario = localStorage.getItem('tl_usuario');
        if (!usuario) {
            window.location.href = 'https://perdatotal.up.railway.app/Login/login.php';
        } else {
            window.location.href = 'checkout.html';
        }
    });
}

// ---- Produtos ----
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
    const isHomePage = window.location.pathname === '/' || window.location.pathname.includes('index');
    const visibleProducts = isHomePage ? products.slice(0, 3) : products;

    visibleProducts.forEach(p => {
        const card = document.createElement("div");
        card.className = "tl-card";
        card.innerHTML = `
            ${p.discount ? `<div class="tl-badge">${p.discount}</div>` : ""}
            <div class="tl-product-img"><img src="${p.image}" alt="${p.title}"></div>
            ${p.launch ? `<div class="tl-tag">LANÇAMENTO</div>` : ""}
            <div class="tl-title">${p.title}</div>
            ${p.oldPrice ? `<div class="tl-old-price">R$ ${p.oldPrice}</div>` : ""}
            <div class="tl-price">R$ ${p.price}</div>
            <div class="tl-installment">até 6x sem juros</div>
            <button class="btn" onclick="addToCart('${p.title}', ${Number(p.price) || 0})">COMPRAR</button>
        `;
        productList.appendChild(card);
    });
}

updateCart();

// ---- Slider ----
const homeSlider = document.querySelector(".home-slider");
if (homeSlider) {
    new Swiper(".home-slider", {
        loop: true,
        autoplay: { delay: 3000, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true }
    });
}
