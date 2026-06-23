<?php

$file = __DIR__ . '/img/InformeTPF_Virtualización_MonroyMikaela.pdf';

if (!is_file($file)) {
    http_response_code(404);
    exit;
}

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="InformeTPF_Virtualización_MonroyMikaela.pdf"');

readfile($file);