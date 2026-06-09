const nome  = document.getElementById('nome');
const senha = document.getElementById('senha');
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

document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    tentouEnviar = true;

    const nomeValido  = nome.reportValidity();
    const senhaValida = senha.reportValidity();

    if (!nomeValido || !senhaValida) return;

    const btn = this.querySelector('button[type="submit"]');
    if (btn) btn.disabled = true;

    const formData = new FormData(this);
    fetch('login_action.php', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        if (!res.ok) throw new Error('Resposta HTTP ' + res.status);
        return res.json();
    })
    .then(resposta => {
        if (resposta.sucesso) {
            window.location.href = URL_SITE;
        } else {
            mostrarErro(resposta.mensagem || 'Nome ou senha incorretos!');
            if (btn) btn.disabled = false;
        }
    })
    .catch(err => {
        console.error('Erro no login:', err);
        mostrarErro('Erro de conexão. Tente novamente.');
        if (btn) btn.disabled = false;
    });
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
    void card.offsetWidth; // força reflow para reiniciar animação
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
    if (tentouEnviar) senha.reportValidity();
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
