<?php

$file = __DIR__ . '/script.js';

if (!is_file($file)) {
    http_response_code(404);
    exit;
}

header('Content-Type: application/javascript; charset=UTF-8');

readfile($file);