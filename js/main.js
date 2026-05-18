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

[
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
