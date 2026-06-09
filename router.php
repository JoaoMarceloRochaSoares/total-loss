<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Se acessar a raiz, serve o index.php
if ($uri === '/') {
    require __DIR__ . '/index.php';
    exit;
}

$file = __DIR__ . $uri;

// Se o arquivo existe, deixa o PHP servir normalmente
if (file_exists($file) && !is_dir($file)) {
    return false;
}

// Fallback: tenta com .php
if (file_exists($file . '.php')) {
    require $file . '.php';
    exit;
}

// 404
http_response_code(404);
echo "Página não encontrada.";
