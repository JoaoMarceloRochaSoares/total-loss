<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Se acessar a raiz, serve o index.php
if ($uri === '/') {
    require __DIR__ . '/index.php';
    exit;
}

$file = __DIR__ . $uri;

// Arquivos estáticos (imagens, css, js) — serve diretamente
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$static = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'webp', 'ico', 'svg', 'woff', 'woff2', 'ttf'];

if (in_array($ext, $static) && file_exists($file)) {
    return false; // servidor built-in serve o arquivo estático
}

// Arquivo PHP existe diretamente
if (file_exists($file) && !is_dir($file) && $ext === 'php') {
    require $file;
    exit;
}

// Fallback: tenta com .php
if (file_exists($file . '.php')) {
    require $file . '.php';
    exit;
}

// 404
http_response_code(404);
echo "Página não encontrada.";
