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
        cart.push({
            name,
            price,
            quantity: 1
        });
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
                    <button onclick="changeQuantity('${item.name}', -1)">
                        -
                    </button>

                    <span>${item.quantity}</span>

                    <button onclick="changeQuantity('${item.name}', 1)">
                        +
                    </button>
                </div>
            </div>

            <div class="cart-right">
                <p>
                    R$ ${(item.price * item.quantity).toFixed(2)}
                </p>

                <button class="remove-btn"
                    onclick="removeFromCart('${item.name}')">
                    ✖
                </button>
            </div>
        `;

        cartItems.appendChild(div);
    });

    cartCount.innerText = totalItems;
    totalPrice.innerText = total.toFixed(2);
}

const products = [
    {
    title: "Kit Whey Gourmet 100g",
    price: 164.90,
    oldPrice: 210.88,
    discount: "-13%",
    image: "https://www.gsuplementos.com.br/upload/produto/layout/4074/mockup.webp",
    launch: true
  },
  {
    title: "Kit Whey Gourmet 400g e Creatina 250g",
    price: 109.90,
    oldPrice: 149.77,
    discount: "-18%",
    image:  "https://product-data.raiadrogasil.io/images/18249088.webp",
    launch: true
  },
  {
    title: "Q-Vita Whey Gourmet",
    price: 20.90,
    oldPrice: null,
    discount: null,
    image: "https://www.qvita.com.br/img/site/1795/b/10646865.jpg",
    rating: 4
  },
  {
    title: "Kit Daily Whey 800g e Creatina 250g",
    price: 124.90,
    oldPrice: 166.44,
    discount: "-17%",
    image: "https://m.magazineluiza.com.br/a-static/420x420/kit-2x-whey-protein-waxy-whey-pote-900g-bcaa-100g-power-creatina-100g-waxy-maize-800g-coqueteleira-600-ml-bodybuilders/raia-fit/9426/db09a44a74a2203bb8c8f25c30197a08.jpeg",
    launch: true
  },
  {
   title: "Bcaa - Leucina - Isoleucina - Valina 60 Cápsulas",
   price: 99.90,
   oldPrice: 129.90,
   discount: "-15%",
   image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDlVGuNCjnbUet4xrrjsOlzihr1XaHxLQG6g&s",
   rating: 5

  },
  {
  title:"Barra de Proteína - Sabor limão",
  price: 52.72,
  oldPrice: 65.90,
  discount: "-20%",
  image: "https://www.gsuplementos.com.br/upload/produto/layout/1120/mockup-v3.webp",
  rating: 5
  },
  {
    title: "Creatina Em Pó 100g Creapure",
    price: "166.44",
    oldPrice: "...",
    discount: "...",
    image: "https://a-static.mlcdn.com.br/280x210/bcaa-120-caps-creatina-250g-creapure-growth-supplements/maxpowersuplementos/8256935310/0c0d603299bb4d3fc72c77ada9632754.jpeg",
    rating: 4.5
    },
    {
    title: "Blend Vegan 1kg",
    price: "166.44",
    oldPrice: "...",
    discount: "...",
    image: "https://www.gsuplementos.com.br/_nuxt/img/saude-alinhada-v2.f6dab4f.png",
    rating: 5
    },
    {
    title: "Whey Protein Concentrado 1kg",
    price: "166.44",
    oldPrice: "...",
    discount: "...",
    image: "https://www.gsuplementos.com.br/upload/produto/layout/2/mockup-v2.webp",
    rating: 5
     },
    {
    title: "Chocolate Snickers 45g Caixa Com 20 Unidades",
    price: "166.44",
    oldPrice: "...",
    discount: "...",
    image: "https://t4.ftcdn.net/jpg/04/49/89/43/360_F_449894345_VKGjTTEQAoHcQsR82ro5gZxfeuOjQvko.jpg",
    rating: 4
     },
    {
    title: "Suplemento em Pó NewNutrition Whey Protein Concentrado",
    price: "166.44",
    oldPrice: "...",
    discount: "...",
    image: "data:image/jpeg;base64,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",
    rating: 4
     },
    {
    title: "Hipercalórico 1kg Growth Supplements",
    price: "166.44",
    oldPrice: "...",
    discount: "...",
    image: "https://www.gsuplementos.com.br/upload/produto/imagem/top-hipercal-rico-sabor-morango-1kg-growth-supplements-1.webp",
    rating: 4
     },
    {
    title: "Hipercalórico com Whey Protain 3kg",
    price: "166.44",
    oldPrice: "...",
    discount: "...",
    image: "https://m.magazineluiza.com.br/a-static/420x420/combo-2x-hipercaloricos-massa-red-brutal-gainers-bolic-3kg-cada-red-series/workshapefitsuplementos/kit-2xbolic-3/864ee46687bd544c0439917bb64d7496.jpeg",
    rating: 4
     },
    {
    title: "100% Whey Protein Pure 900g",
    price: "166.44",
    oldPrice: "...",
    image: "https://cdn.awsli.com.br/2500x2500/2516/2516745/produto/382822947/whey-bcaa-monster-mockup-a-87ktdttg30.jpg",
    rating: 4
     },
    {
    title: "100% Whey Protein 1kg",
    price: "166.44",
    oldPrice: "...",
    image: "https://fabricadesuplementos.cdn.magazord.com.br/img/2026/04/produto/1329/chocolate-2.jpg?ims=596x596",
    rating: 4
    },

]

const productList = document.getElementById("product-list");
 
if(productList){
 
    function renderStars(qtd) {
 
        let stars = "";
 
        for (let i = 0; i < 5; i++) {
            stars += i < qtd ? "★" : "☆";
        }
 
        return `<div class="tl-stars">${stars}</div>`;
    }
 
    const isHomePage =
    window.location.pathname.includes("index");
 
const visibleProducts = isHomePage
    ? products.slice(0, 3)
    : products;
 
visibleProducts.forEach(p => {
 
        const card = document.createElement("div");
 
        card.className = "tl-card";
 
        card.innerHTML = `
 
            ${p.discount ? `
                <div class="tl-badge">
                    ${p.discount}
                </div>
            ` : ""}
 
            <div class="tl-product-img">
                <img src="${p.image}" alt="${p.title}">
            </div>
 
            ${p.launch ? `
                <div class="tl-tag">
                    LANÇAMENTO
                </div>
            ` : ""}
 
            <div class="tl-title">
                ${p.title}
            </div>
 
            ${p.rating ? renderStars(p.rating) : ""}
 
            ${p.oldPrice ? `
                <div class="tl-old-price">
                    R$ ${p.oldPrice}
                </div>
            ` : ""}
 
            <div class="tl-price">
                R$ ${p.price}
            </div>
 
            <div class="tl-installment">
                até 6x sem juros
            </div>
 
            <button class="btn"
                onclick="addToCart('${p.title}', ${Number(p.price) || 0})">
 
                COMPRAR
 
            </button>
        `;
 
        productList.appendChild(card);
    });
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
