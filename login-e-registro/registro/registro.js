const nome = document.getElementById('nome');
const senha = document.getElementById('senha');
const confirmarSenha = document.getElementById('confirmarSenha');
let tentouEnviar = false;

nome.addEventListener('invalid', function() {
    nome.classList.add('erro');
    if (nome.validity.typeMismatch) {
        nome.setCustomValidity('Digite um nome válido!');
    } else if (nome.validity.valueMissing) {
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

    const nomeValido = nome.reportValidity();
    const senhaValida = senha.reportValidity();
    const confirmarSenhaValida = confirmarSenha.reportValidity();

    if (nomeValido && senhaValida && confirmarSenhaValida) {
        const formData = new FormData(this);
        fetch('registro_action.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(resposta => {
            const popup = document.getElementById('popup');
            const card = document.getElementById('popup-card');
            const mensagem = document.getElementById('popup-mensagem');
            const link = document.getElementById('popup-link');

            if (resposta.includes('sucesso')) {
                mensagem.textContent = 'Registro feito com sucesso!';
                card.classList.remove('popup-erro');
                card.classList.add('popup-sucesso');
                link.style.display = 'block';
            } else {
                mensagem.textContent = 'Erro ao registrar, Tente novamente!';
                card.classList.remove('popup-sucesso');
                card.classList.add('popup-erro');
                link.style.display = 'none';
            }
            card.classList.remove('popup-card-animar');
            card.style.animation = '';
            card.classList.add('popup-card-animar');
            popup.style.display = 'flex';
        });
    }
});

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
    const card = document.getElementById('popup-card');
    card.style.animation = 'fadeOut 0.3s ease';
    setTimeout(() => {
        popup.style.display = 'none';
        card.style.animation = '';
        document.getElementById('popup-link').style.display = 'none';
    }, 300);
}