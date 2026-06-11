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
    { title: "Kit Whey Gourmet 100g", price: 164.90, oldPrice: 210.88, discount: "-22%", image: "https://www.gsuplementos.com.br/upload/produto/layout/4074/mockup.webp", launch: true, description: "Kit completo com Whey Protein Gourmet de alta qualidade. Fonte premium de proteína com sabor incrível, ideal para ganho de massa muscular e recuperação pós-treino.", weight: "100g", protein: "24g por dose" },
    { title: "Kit Whey Gourmet 400g e Creatina 250g", price: 109.90, oldPrice: 149.77, discount: "-27%", image: "https://product-data.raiadrogasil.io/images/18249088.webp", launch: true, description: "Combo poderoso de Whey Gourmet 400g com Creatina Monohidratada 250g. Maximize seus resultados com proteína de qualidade e o suplemento mais estudado do mundo.", weight: "650g total", protein: "22g por dose" },
    { title: "Barra De Whey Protein Chocolate Qvita 32g", price: 20.90, image: "https://www.qvita.com.br/img/site/1795/b/10646865.jpg", description: "Sachê individual de Whey Gourmet Q-Vita. Prático para carregar na bolsa e consumir em qualquer lugar, sem abrir mão do sabor e da qualidade.", weight: "35g", protein: "20g por sachê" },
    { title: "Kit Daily Whey 800g e Creatina 250g", price: 124.90, oldPrice: 166.44, discount: "-25%", image: "https://m.magazineluiza.com.br/a-static/420x420/kit-2x-whey-protein-waxy-whey-pote-900g-bcaa-100g-power-creatina-100g-waxy-maize-800g-coqueteleira-600-ml-bodybuilders/raia-fit/9426/db09a44a74a2203bb8c8f25c30197a08.jpeg", launch: true, description: "Kit com Daily Whey 800g e Creatina Monohidratada 250g. Combinação ideal para quem busca praticidade e resultado.", weight: "1050g total", protein: "26g por dose" },
    { title: "Bcaa - Leucina - Isoleucina - Valina 60 Cápsulas", price: 99.90, oldPrice: 129.90, discount: "-30%", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDlVGuNCjnbUet4xrrjsOlzihr1XaHxLQG6g&s", description: "BCAA com os 3 aminoácidos essenciais na proporção 2:1:1. Reduz a fadiga muscular, acelera a recuperação e preserva a massa muscular.", weight: "60 cápsulas", protein: "500mg por cápsula" },
    { title: "Barra de Proteína", price: 52.72, oldPrice: 65.90, discount: "-20%", image: "https://www.gsuplementos.com.br/upload/produto/layout/1120/mockup-v3.webp", description: "Barra proteica, perfeita para um lanche saudável e nutritivo. Rico em proteínas e baixo em açúcar. Ideal para consumir entre as refeições ou após o treino.", weight: "60g por barra", protein: "20g por barra" },
    { title: "Creatina Em Pó 100g Creapure", price: 166.44, image: "https://a-static.mlcdn.com.br/280x210/bcaa-120-caps-creatina-250g-creapure-growth-supplements/maxpowersuplementos/8256935310/0c0d603299bb4d3fc72c77ada9632754.jpeg", description: "Creatina Monohidratada Creapure, a mais pura do mercado. Aumenta força, potência e desempenho nos treinos de alta intensidade. Certificação alemã de pureza.", weight: "100g", protein: "—" },
    { title: "Blend Vegan 1kg", price: 166.44, image: "https://www.gsuplementos.com.br/_nuxt/img/saude-alinhada-v2.f6dab4f.png", description: "Proteína 100% vegana com blend de ervilha, arroz e soja. Completo em aminoácidos essenciais, sem lactose e sem glúten. Ideal para veganos e intolerantes.", weight: "1kg", protein: "25g por dose" },
    { title: "Whey Protein Concentrado 1kg", price: 166.44, image: "https://www.gsuplementos.com.br/upload/produto/layout/2/mockup-v2.webp", description: "Whey Protein Concentrado com alta concentração proteica por dose. Absorção rápida, ideal para consumo imediatamente após o treino.", weight: "1kg", protein: "24g por dose" },
    { title: "Hipercalórico 1kg Growth Supplements", price: 166.44, image: "https://www.gsuplementos.com.br/upload/produto/imagem/top-hipercal-rico-sabor-morango-1kg-growth-supplements-1.webp", description: "Hipercalórico com alto valor calórico por dose. Ideal para hardgainers que têm dificuldade em ganhar peso. Rico em carboidratos complexos e proteínas.", weight: "1kg", protein: "20g por dose" },
    { title: "Hipercalórico com Whey Protein 3kg", price: 166.44, image: "https://m.magazineluiza.com.br/a-static/420x420/combo-2x-hipercaloricos-massa-red-brutal-gainers-bolic-3kg-cada-red-series/workshapefitsuplementos/kit-2xbolic-3/864ee46687bd544c0439917bb64d7496.jpeg", description: "Hipercalórico premium com Whey Protein em pote econômico de 3kg. Fórmula balanceada com carboidratos, proteínas e vitaminas para ganho de massa eficiente.", weight: "3kg", protein: "28g por dose" },
    { title: "100% Whey Protein Pure 900g", price: 166.44, image: "https://cdn.awsli.com.br/2500x2500/2516/2516745/produto/382822947/whey-bcaa-monster-mockup-a-87ktdttg30.jpg", description: "Whey Protein 100% puro, sem adição de ingredientes desnecessários. Alta concentração proteica para quem busca resultado real.", weight: "900g", protein: "27g por dose" },
    { title: "100% Whey Protein 1kg", price: 166.44, image: "https://fabricadesuplementos.cdn.magazord.com.br/img/2026/04/produto/1329/chocolate-2.jpg?ims=596x596", description: "Whey Protein 100% de alta qualidade em pote de 1kg. Fórmula completa com aminoácidos essenciais, perfeita para atletas e praticantes de musculação.", weight: "1kg", protein: "26g por dose" }
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
            <div class="tl-card-actions">
                <button class="btn-details" onclick="openProductModal(products.find(x=>x.title==='${p.title.replace(/'/g, "\\'")}'))">Ver Detalhes</button>
                <button class="btn" onclick="addToCart('${p.title}', ${p.price})">COMPRAR</button>
            </div>
        `;
        productList.appendChild(card);
    });
}

// ===== SLIDER =====
new Swiper(".home-slider", {
    loop: true,
    autoplay: { delay: 3000, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination", clickable: true }
});

// ===== POPUP SUPORTE =====
const contatoForm = document.getElementById('contato-form');
if (contatoForm) {
    contatoForm.addEventListener('submit', function(e) {  // <-- parêntese que faltava
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
}


document.querySelector('.checkout-btn').addEventListener('click', () => {
    if (typeof USUARIO_LOGADO !== 'undefined' && !USUARIO_LOGADO) {
        document.getElementById('popup-login-required').style.display = 'flex';
        return;
    }
    abrirCheckout();
});

function abrirCheckout() {
    if (cart.length === 0) return;
    preencherResumo();
    ativarStep(1);
    document.getElementById('checkout-overlay').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function preencherResumo() {
    const list = document.getElementById('checkout-items-list');
    list.innerHTML = '';
    let total = 0;
    cart.forEach(item => {
        total += item.price * item.quantity;
        const div = document.createElement('div');
        div.className = 'checkout-item-row';
        div.innerHTML = `
            <span>${item.name} <small>x${item.quantity}</small></span>
            <span>R$ ${(item.price * item.quantity).toFixed(2)}</span>
        `;
        list.appendChild(div);
    });
    document.getElementById('checkout-total-display').textContent = total.toFixed(2);
}

function ativarStep(n) {
    // Esconde todos os steps do modal
    document.querySelectorAll('.checkout-step').forEach(s => s.classList.remove('active'));
    document.getElementById('checkout-step-' + n).classList.add('active');

    // Atualiza stepper visual (só tem 3 círculos no stepper)
    const stepperMap = { 1: 1, 2: 2, 3: 3, 4: 3 };
    const activeCircle = stepperMap[n];
    document.querySelectorAll('.ck-step').forEach((el, i) => {
        el.classList.remove('ck-step-active', 'ck-step-done');
        const num = i + 1;
        if (num < activeCircle) el.classList.add('ck-step-done');
        else if (num === activeCircle) el.classList.add('ck-step-active');
    });
    document.querySelectorAll('.ck-step-line').forEach((el, i) => {
        el.classList.toggle('ck-step-line-done', i + 1 < activeCircle);
    });
}

function fecharCheckout() {
    document.getElementById('checkout-overlay').classList.add('hidden');
    document.body.style.overflow = '';
}

function irParaEntrega() {
    ativarStep(2);
}

function irParaPagamento() {
    // Reseta área de pagamento
    document.getElementById('pgto-area').innerHTML =
        '<p class="pgto-hint"><i class="fas fa-hand-pointer"></i> Selecione um método acima para continuar.</p>';
    document.getElementById('btn-confirmar').style.display = 'none';
    document.querySelectorAll('input[name="pgto"]').forEach(r => r.checked = false);
    document.querySelectorAll('.pgto-card').forEach(c => c.classList.remove('pgto-card--active'));
    ativarStep(3);
}

function voltarStep(n) {
    ativarStep(n);
}

// Estilo Readit: radio seleciona e mostra área dinâmica
function mostrarPagamento(radio) {
    const opcao = radio.value;
    const area = document.getElementById('pgto-area');

    // Destaca card selecionado
    document.querySelectorAll('.pgto-card').forEach(c => c.classList.remove('pgto-card--active'));
    document.getElementById('pgto-label-' + opcao).classList.add('pgto-card--active');

    if (opcao === 'pix') {
        const urlQR = "https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=00020126580014br.gov.bcb.pix0136contato@totalloss.com";
        area.innerHTML = `
            <div class="pgto-pix">
                <p class="pgto-area-titulo"><i class="fas fa-qrcode"></i> Escaneie o QR Code</p>
                <img src="${urlQR}" alt="QR Code PIX" class="pix-qr-img">
                <p class="pgto-area-chave">Chave PIX: <strong>21979830706</strong></p>
                <p class="pgto-area-info">Após o pagamento, envie o comprovante para nosso suporte.</p>
            </div>
        `;
    } else if (opcao === 'boleto') {
        const n1 = Math.floor(Math.random() * 90000) + 10000;
        const n2 = Math.floor(Math.random() * 90000) + 10000;
        const n3 = Math.floor(Math.random() * 90000) + 10000;
        const n4 = Math.floor(Math.random() * 9000) + 1000;
        const codigo = `34191.${n1} 02345.${n2} 98765.${n3} 1 ${n4}00000000`;
        area.innerHTML = `
            <div class="pgto-boleto">
                <p class="pgto-area-titulo"><i class="fas fa-barcode"></i> Boleto Gerado</p>
                <div class="boleto-codigo-box">
                    <i class="fas fa-barcode boleto-bars"></i>
                    <p class="boleto-codigo">${codigo}</p>
                    <button class="btn boleto-copiar-btn" onclick="copiarBoleto('${codigo}', this)">
                        <i class="fas fa-copy"></i> Copiar código
                    </button>
                </div>
                <p class="pgto-area-info">Vencimento em <strong>3 dias úteis</strong>. Pague em qualquer banco ou lotérica.</p>
            </div>
        `;
    } else if (opcao === 'cartao') {
        area.innerHTML = `
            <div class="pgto-cartao">
                <p class="pgto-area-titulo"><i class="fas fa-credit-card"></i> Dados do Cartão</p>
                <div class="form-group form-group--full">
                    <label>Número do Cartão</label>
                    <input type="text" id="card-number" maxlength="19" placeholder="0000 0000 0000 0000" oninput="formatarCartao(this)">
                </div>
                <div class="form-group form-group--full">
                    <label>Nome no Cartão</label>
                    <input type="text" id="card-name" placeholder="Como está no cartão">
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>Validade</label>
                        <input type="text" id="card-expiry" maxlength="5" placeholder="MM/AA" oninput="formatarValidade(this)">
                    </div>
                    <div class="form-group form-group--small">
                        <label>CVV</label>
                        <input type="text" id="card-cvv" maxlength="3" placeholder="000">
                    </div>
                </div>
                <div class="form-group form-group--full">
                    <label>Parcelas</label>
                    <select id="card-parcelas">
                        <option value="1">1x sem juros</option>
                        <option value="2">2x sem juros</option>
                        <option value="3">3x sem juros</option>
                        <option value="6">6x sem juros</option>
                    </select>
                </div>
            </div>
        `;
    }

    document.getElementById('btn-confirmar').style.display = 'block';
}

function copiarBoleto(codigo, btn) {
    navigator.clipboard.writeText(codigo).then(() => {
        btn.innerHTML = '<i class="fas fa-check"></i> Copiado!';
        setTimeout(() => btn.innerHTML = '<i class="fas fa-copy"></i> Copiar código', 2000);
    });
}

function confirmarPedido() {
    const radioSelecionado = document.querySelector('input[name="pgto"]:checked');
    const forma = radioSelecionado ? radioSelecionado.value : 'desconhecido';
    const total = cart.reduce((soma, item) => soma + item.price * item.quantity, 0);

    fetch('/pedido_action.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ itens: cart, total: total, forma_pagamento: forma })
    })
    .then(r => r.json())
    .then(data => {
        if (data.sucesso) {
            ativarStep(4);
            limparCarrinho();
        } else {
            alert('Erro ao registrar pedido. Tente novamente.');
        }
    })
    .catch(() => {
        alert('Erro de conexão. Verifique sua internet e tente novamente.');
    });
}

function limparCarrinho() {
    cart = [];
    updateCart();
}

function formatarCartao(input) {
    let v = input.value.replace(/\D/g, '').substring(0, 16);
    input.value = v.replace(/(.{4})/g, '$1 ').trim();
}

function formatarValidade(input) {
    let v = input.value.replace(/\D/g, '').substring(0, 4);
    if (v.length >= 2) v = v.substring(0, 2) + '/' + v.substring(2);
    input.value = v;
}

function formatarCEP(input) {
    let v = input.value.replace(/\D/g, '').substring(0, 8);
    if (v.length > 5) v = v.substring(0, 5) + '-' + v.substring(5);
    input.value = v;
}

function formatarTelefone(input) {
    let v = input.value.replace(/\D/g, '').substring(0, 11);
    if (v.length > 6) v = '(' + v.substring(0,2) + ') ' + v.substring(2,7) + '-' + v.substring(7);
    else if (v.length > 2) v = '(' + v.substring(0,2) + ') ' + v.substring(2);
    input.value = v;
}

function fecharPopupLogin() {
    document.getElementById('popup-login-required').style.display = 'none';
}


document.getElementById('checkout-overlay')?.addEventListener('click', (e) => {
    if (e.target.id === 'checkout-overlay') fecharCheckout();
});


function fecharPopupContato() {
    const card = document.querySelector('.popup-contato-card');
    card.classList.add('fechando');
    setTimeout(() => {
        document.getElementById('popup-contato').style.display = 'none';
        card.classList.remove('fechando');
    }, 300);
}

// ---- Detalhamento dos produtos ----
(function() {
    const overlay = document.createElement('div');
    overlay.id = 'product-modal-overlay';
    overlay.innerHTML = `
        <div id="product-modal">
            <button id="modal-close" aria-label="Fechar">&times;</button>
            <div id="modal-body"></div>
        </div>
    `;
    document.body.appendChild(overlay);

    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) closeProductModal();
    });
    document.getElementById('modal-close').addEventListener('click', closeProductModal);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeProductModal();
    });
})();

function openProductModal(product) {
    document.getElementById('modal-body').innerHTML = `
        <div class="modal-img-wrap">
            ${product.discount ? `<div class="tl-badge">${product.discount}</div>` : ''}
            <img src="${product.image}" alt="${product.title}">
        </div>
        <div class="modal-info">
            ${product.launch ? `<div class="tl-tag">LANÇAMENTO</div>` : ''}
            <h2 class="modal-title">${product.title}</h2>
            <p class="modal-desc">${product.description}</p>
            <div class="modal-specs">
                <div class="modal-spec"><span>Peso</span>${product.weight}</div>
                <div class="modal-spec"><span>Proteína</span>${product.protein}</div>
            </div>
            <div class="modal-pricing">
                ${product.oldPrice ? `<div class="tl-old-price">R$ ${product.oldPrice.toFixed(2)}</div>` : ''}
                <div class="modal-price">R$ ${product.price.toFixed(2)}</div>
                <div class="tl-installment">até 6x sem juros</div>
            </div>
            <button class="btn modal-buy-btn" onclick="addToCart('${product.title.replace(/'/g, "\\'")}', ${Number(product.price) || 0}); closeProductModal();">
                🛒 ADICIONAR AO CARRINHO
            </button>
        </div>
    `;
    document.getElementById('product-modal-overlay').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeProductModal() {
    document.getElementById('product-modal-overlay').classList.remove('active');
    document.body.style.overflow = '';
}
