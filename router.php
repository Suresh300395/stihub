<?php
// router.php for PHP built-in web server
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Normalize path by removing leading/trailing slashes
$path = trim($uri, '/');

// If empty path, serve index.php
if ($path === '') {
    include __DIR__ . '/index.php';
    exit;
}

// If it's a file that exists directly, return false to let the built-in server serve it (e.g., css/style.css)
if (file_exists(__DIR__ . '/' . $path) && !is_dir(__DIR__ . '/' . $path)) {
    return false;
}

// Check if adding .php matches a file
if (file_exists(__DIR__ . '/' . $path . '.php')) {
    $_SERVER['SCRIPT_NAME'] = '/' . $path . '.php';
    include __DIR__ . '/' . $path . '.php';
    exit;
}

// If it's a directory, return false to let server serve index file inside it if any
if (file_exists(__DIR__ . '/' . $path) && is_dir(__DIR__ . '/' . $path)) {
    return false;
}

// 404 handler
http_response_code(404);
echo "404 Not Found";
exit;
