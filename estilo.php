<?php

$file = __DIR__ . '/estilo.css';

if (!is_file($file)) {
    http_response_code(404);
    exit;
}

header('Content-Type: text/css; charset=UTF-8');

readfile($file);