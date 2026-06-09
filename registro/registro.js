const nome           = document.getElementById('nome');
const senha          = document.getElementById('senha');
const confirmarSenha = document.getElementById('confirmarSenha');
let tentouEnviar = false;

const URL_SITE = 'https://totalloss.up.railway.app';

nome.addEventListener('invalid', function() {
    nome.classList.add('erro');
    if (nome.validity.valueMissing) {
        nome.setCustomValidity('Por favor, coloque seu nome!');
    }
});

senha.addEventListener('invalid', function() {
    senha.classList.add('erro');
    senha.setCustomValidity('Coloque uma senha válida!');
});

confirmarSenha.addEventListener('invalid', function() {
    confirmarSenha.classList.add('erro');
    if (confirmarSenha.validity.valueMissing) {
        confirmarSenha.setCustomValidity('Confirme sua senha!');
    } else {
        confirmarSenha.setCustomValidity('As senhas não coincidem!');
    }
});

document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    tentouEnviar = true;

    if (senha.value !== confirmarSenha.value) {
        confirmarSenha.setCustomValidity('As senhas não coincidem!');
        confirmarSenha.classList.add('erro');
    } else {
        confirmarSenha.setCustomValidity('');
    }

    const nomeValido           = nome.reportValidity();
    const senhaValida          = senha.reportValidity();
    const confirmarSenhaValida = confirmarSenha.reportValidity();

    if (nomeValido && senhaValida && confirmarSenhaValida) {
        const btn = this.querySelector('button[type="submit"], input[type="submit"]');
        if (btn) btn.disabled = true;

        const formData = new FormData(this);
        fetch('registro_action.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(resposta => {
            if (resposta.sucesso) {
                window.location.href = URL_SITE;
            } else {
                mostrarErro(resposta.mensagem || 'Erro ao registrar, tente novamente!');
                if (btn) btn.disabled = false;
            }
        })
        .catch(() => {
            mostrarErro('Erro de conexão. Tente novamente.');
            if (btn) btn.disabled = false;
        });
    }
});

function mostrarErro(msg) {
    const popup    = document.getElementById('popup');
    const card     = document.getElementById('popup-card');
    const mensagem = document.getElementById('popup-mensagem');

    mensagem.textContent = msg;
    card.classList.remove('popup-sucesso');
    card.classList.add('popup-erro');
    card.classList.remove('popup-card-animar');
    card.style.animation = '';
    card.classList.add('popup-card-animar');
    popup.style.display = 'flex';
}

nome.addEventListener('input', function() {
    nome.setCustomValidity('');
    nome.classList.remove('erro');
    if (tentouEnviar) nome.reportValidity();
});

senha.addEventListener('input', function() {
    senha.setCustomValidity('');
    senha.classList.remove('erro');
    if (tentouEnviar && confirmarSenha.value) {
        if (senha.value !== confirmarSenha.value) {
            confirmarSenha.setCustomValidity('As senhas não coincidem!');
            confirmarSenha.classList.add('erro');
        } else {
            confirmarSenha.setCustomValidity('');
            confirmarSenha.classList.remove('erro');
        }
    }
    if (tentouEnviar) senha.reportValidity();
});

confirmarSenha.addEventListener('input', function() {
    confirmarSenha.setCustomValidity('');
    confirmarSenha.classList.remove('erro');
    if (tentouEnviar) confirmarSenha.reportValidity();
});

function fecharPopup() {
    const popup = document.getElementById('popup');
    const card  = document.getElementById('popup-card');
    card.style.animation = 'fadeOut 0.3s ease';
    setTimeout(() => {
        popup.style.display = 'none';
        card.style.animation = '';
    }, 300);
}
