<?php

$baseDir = __DIR__ . '/img/';

// recibir nombre del archivo
$file = isset($_GET['file']) ? basename($_GET['file']) : null;

if (!$file) {
    http_response_code(400);
    exit('Missing file');
}

$path = $baseDir . $file;

// seguridad: evitar path traversal
if (!is_file($path)) {
    http_response_code(404);
    exit('Not found');
}

$mimeTypes = [
    'png'  => 'image/png',
    'jpg'  => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'gif'  => 'image/gif',
    'svg'  => 'image/svg+xml',
    'webp' => 'image/webp'
];

$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
$mime = $mimeTypes[$ext] ?? 'application/octet-stream';

// cache (IMPORTANTE)
header("Content-Type: $mime");
header("Cache-Control: public, max-age=86400");
header("Content-Length: " . filesize($path));

// output
readfile($path);
exit;