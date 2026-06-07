let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

//CARRINHO
let cart = [];
let total = 0;
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

// PRODUTOS DO BANCO
const productList = document.getElementById("product-list");

if (productList) {
    function renderStars(qtd) {
        let stars = "";
        for (let i = 0; i < 5; i++) {
            stars += i < qtd ? "★" : "☆";
        }
        return `<div class="tl-stars">${stars}</div>`;
    }

    fetch('/api/produtos.php')
        .then(res => res.json())
        .then(products => {
            const isHomePage = window.location.pathname === '/' || window.location.pathname.includes('index');
            const visibleProducts = isHomePage ? products.slice(0, 3) : products;

            visibleProducts.forEach(p => {
                const card = document.createElement("div");
                card.className = "tl-card";
                card.innerHTML = `
                    <div class="tl-product-img">
                        <img src="${p.imagem}" alt="${p.nome}">
                    </div>
                    <div class="tl-tag">${p.categoria}</div>
                    <div class="tl-title">${p.nome}</div>
                    ${renderStars(4)}
                    <div class="tl-price">R$ ${parseFloat(p.preco).toFixed(2)}</div>
                    <div class="tl-installment">até 6x sem juros</div>
                    <button class="btn" onclick="addToCart('${p.nome}', ${p.preco})">COMPRAR</button>
                `;
                productList.appendChild(card);
            });
        })
        .catch(err => console.error('Erro ao buscar produtos:', err));
}

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
});

function fecharPopupContato() {
    const card = document.querySelector('.popup-contato-card');
    card.classList.add('fechando');
    setTimeout(() => {
        document.getElementById('popup-contato').style.display = 'none';
        card.classList.remove('fechando');
    }, 300);
}
