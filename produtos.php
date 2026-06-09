<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Total Loss</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .products-page {
            margin-top: 7rem;
            background: #111;
        }

        .top-bar {
            background: rgb(238, 87, 51);
            color: #fff;
            text-align: center;
            padding: .8rem;
            font-size: 1.4rem;
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 10001;
            font-weight: 300;
        }

        .header {
            top: 3.5rem;
        }

        #cart-icon {
            top: 12rem;
        }
    </style>
</head>

<body>

    <div class="top-bar">
        Adicione R$ 250,00 ao carrinho para ter <strong>FRETE GRÁTIS</strong> no Rio de Janeiro
    </div>

    <header class="header">
        <a href="/index.php" class="logo"><span>Total</span>Loss</a>

        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="/index.php">Início</a>
            <a href="/index.php#about">Sobre</a>
            <a href="/index.php#features">Serviços</a>
            <a href="/index.php#suppl">Suplementos</a>
            <a href="/index.php#mar">Matérias</a>
            <a href="/index.php#support">Suporte</a>
            <?php if ($usuario_nome): ?>
                <a href="/conta.php" style="color:#fff">
                    <i class="fas fa-user-circle" style="margin-right:.4rem"></i><?= htmlspecialchars($usuario_nome) ?>
                </a>
            <?php else: ?>
                <a href="/Login/login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <div id="cart-icon">
        <i data-lucide="shopping-cart"></i>
        <span id="cart-count">0</span>
    </div>

    <div id="cart-sidebar" class="hidden">
        <div class="cart-header">
            <h2>Meu Carrinho</h2>
        </div>
        <div id="cart-items"></div>
        <div class="cart-total">
            <div class="total-info">
                Total: R$ <span id="total-price">0.00</span>
            </div>
            <button class="checkout-btn">Finalizar Compra</button>
        </div>
    </div>

    <main>
        <section class="products-page suppl">
            <h1 class="heading">
                <span>Catálogo de Produtos</span>
            </h1>
            <div class="products-grid" id="product-list"></div>
        </section>
    </main>

    <!-- ===== MODAL CHECKOUT ===== -->
    <div id="checkout-overlay" class="checkout-overlay hidden">
        <div class="checkout-modal">
            <button class="checkout-close" onclick="fecharCheckout()">✖</button>

            <!-- Stepper -->
            <div class="checkout-stepper">
                <div class="ck-step ck-step-active" id="stepper-1">
                    <div class="ck-step-circle">1</div>
                    <span>Resumo</span>
                </div>
                <div class="ck-step-line"></div>
                <div class="ck-step" id="stepper-2">
                    <div class="ck-step-circle">2</div>
                    <span>Entrega</span>
                </div>
                <div class="ck-step-line"></div>
                <div class="ck-step" id="stepper-3">
                    <div class="ck-step-circle">3</div>
                    <span>Pagamento</span>
                </div>
            </div>

          
            <div id="checkout-step-1" class="checkout-step active">
                <h2 class="checkout-title"><i class="fas fa-shopping-bag"></i> Resumo do Pedido</h2>
                <div id="checkout-items-list" class="checkout-items-list"></div>
                <div class="checkout-subtotal">
                    Total: R$ <span id="checkout-total-display">0.00</span>
                </div>
                <button class="btn checkout-next-btn" onclick="irParaEntrega()">
                    Continuar <i class="fas fa-arrow-right"></i>
                </button>
            </div>

          
            <div id="checkout-step-2" class="checkout-step">
                <button class="checkout-back" onclick="voltarStep(1)">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
                <h2 class="checkout-title"><i class="fas fa-truck"></i> Dados para Entrega</h2>

                <div class="form-row">
                    <div class="form-group form-group--full">
                        <label>Nome Completo</label>
                        <input type="text" id="ent-nome" placeholder="Seu nome completo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>Endereço</label>
                        <input type="text" id="ent-endereco" placeholder="Rua, Avenida...">
                    </div>
                    <div class="form-group form-group--small">
                        <label>Número</label>
                        <input type="text" id="ent-numero" placeholder="Nº">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>Complemento</label>
                        <input type="text" id="ent-complemento" placeholder="Apto, Bloco... (opcional)">
                    </div>
                    <div class="form-group form-group--small">
                        <label>CEP</label>
                        <input type="text" id="ent-cep" maxlength="9" placeholder="00000-000" oninput="formatarCEP(this)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>Bairro</label>
                        <input type="text" id="ent-bairro" placeholder="Seu bairro">
                    </div>
                    <div class="form-group form-group--grow">
                        <label>Cidade</label>
                        <input type="text" id="ent-cidade" placeholder="Sua cidade">
                    </div>
                    <div class="form-group form-group--uf">
                        <label>UF</label>
                        <input type="text" id="ent-uf" maxlength="2" placeholder="RJ">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>E-mail</label>
                        <input type="email" id="ent-email" placeholder="seu@email.com">
                    </div>
                    <div class="form-group form-group--grow">
                        <label>Telefone</label>
                        <input type="tel" id="ent-tel" placeholder="(21) 99999-9999" oninput="formatarTelefone(this)">
                    </div>
                </div>

                <button class="btn checkout-next-btn" onclick="irParaPagamento()">
                    Continuar <i class="fas fa-arrow-right"></i>
                </button>
            </div>

           
            <div id="checkout-step-3" class="checkout-step">
                <button class="checkout-back" onclick="voltarStep(2)">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
                <h2 class="checkout-title"><i class="fas fa-credit-card"></i> Método de Pagamento</h2>

                <div class="pgto-opcoes">
                    <label class="pgto-card" id="pgto-label-cartao">
                        <input type="radio" name="pgto" value="cartao" onchange="mostrarPagamento(this)">
                        <i class="fas fa-credit-card"></i>
                        <span>Cartão de Crédito</span>
                    </label>
                    <label class="pgto-card" id="pgto-label-pix">
                        <input type="radio" name="pgto" value="pix" onchange="mostrarPagamento(this)">
                        <i class="fas fa-qrcode"></i>
                        <span>PIX</span>
                    </label>
                    <label class="pgto-card" id="pgto-label-boleto">
                        <input type="radio" name="pgto" value="boleto" onchange="mostrarPagamento(this)">
                        <i class="fas fa-barcode"></i>
                        <span>Boleto</span>
                    </label>
                </div>

                <div id="pgto-area" class="pgto-area">
                    <p class="pgto-hint"><i class="fas fa-hand-pointer"></i> Selecione um método acima para continuar.</p>
                </div>

                <button class="btn checkout-confirm-btn" id="btn-confirmar" onclick="confirmarPedido()" style="display:none;">
                    <i class="fas fa-check-circle"></i> Finalizar Pedido
                </button>
            </div>

           
            <div id="checkout-step-4" class="checkout-step">
                <div class="checkout-success">
                    <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                    <h2>Pedido Confirmado!</h2>
                    <p>Obrigado pela sua compra. Você receberá um e-mail com os detalhes em breve.</p>
                    <button class="btn" onclick="fecharCheckout(); limparCarrinho()">Continuar Comprando</button>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== POPUP LOGIN NECESSÁRIO ===== -->
    <div id="popup-login-required" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.7); z-index:99999; align-items:center; justify-content:center;">
        <div class="popup-login-card">
            <i class="fas fa-lock popup-lock-icon"></i>
            <h3>Faça login para continuar</h3>
            <p>Você precisa estar logado para finalizar sua compra.</p>
            <div class="popup-login-btns">
                <a href="/Login/login.php" class="btn">Fazer Login</a>
                <button onclick="fecharPopupLogin()" class="btn btn-outline">Cancelar</button>
            </div>
        </div>
    </div>

    <script>
        const USUARIO_LOGADO = <?= $usuario_nome ? 'true' : 'false' ?>;
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="main.js"></script>
    <script>
        lucide.createIcons();
    </script>

</body>
</html>
