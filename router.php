<?php
/**
 * Router for PHP's built-in server: php -S localhost:8080 router.php
 * cPanel Apache uses .htaccess instead.
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = __DIR__ . $uri;

if ($uri !== '/' && file_exists($path) && !is_dir($path)) {
    return false;
}

$map = [
    '/' => 'index.php',
    '/index' => 'index.php',
    '/index.php' => 'index.php',
    '/contact' => 'contact.php',
];

$redirects = [
    '/about' => '/#kuhusu',
    '/huduma' => '/#huduma',
    '/solutions' => '/#solutions',
    '/tariffs' => '/#tariffs',
    '/news' => '/#habari',
];

if (isset($redirects[$uri])) {
    header('Location: ' . $redirects[$uri], true, 301);
    return true;
}

if (isset($map[$uri])) {
    require __DIR__ . '/' . $map[$uri];
    return true;
}

http_response_code(404);
require __DIR__ . '/404.php';
return true;
