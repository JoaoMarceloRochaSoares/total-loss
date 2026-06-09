<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri === '/') {
    require __DIR__ . '/index.php';
    exit;
}

$file = __DIR__ . $uri;

$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$static = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'webp', 'ico', 'svg', 'woff', 'woff2', 'ttf'];

if (in_array($ext, $static) && file_exists($file)) {
    return false;
}

if (file_exists($file) && !is_dir($file) && $ext === 'php') {
    require $file;
    exit;
}

if (file_exists($file . '.php')) {
    require $file . '.php';
    exit;
}

http_response_code(404);
echo "Página não encontrada.";
