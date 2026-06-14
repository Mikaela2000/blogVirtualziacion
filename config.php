<?php
/**
 * Config global para compatibilidad con NAP y subpaths
 */

// Detectar base path (ruta bajo la que corre la app)
if (!defined('APP_BASE_PATH')) {
    $basePath = dirname($_SERVER['SCRIPT_NAME']);
    $basePath = $basePath === '/' ? '' : rtrim($basePath, '/');
    
    // Limpiar prefijo NAP si existe
    if (strpos($basePath, '/42501611') === 0) {
        $basePath = substr($basePath, strlen('/42501611'));
    }
    
    define('APP_BASE_PATH', $basePath);
}

/**
 * Generar URL completa desde ruta relativa
 * Uso: app_url('/actualizar.php') → /42501611/actualizar.php o /actualizar.php
 */
function app_url($path) {
    $path = '/' . ltrim($path, '/');
    return APP_BASE_PATH . $path;
}

/**
 * Redirigir manteniendo base path
 * Uso: app_redirect('/index.php')
 */
function app_redirect($path) {
    header('Location: ' . app_url($path));
    exit;
}

/**
 * Obtener ruta física de un archivo
 * Uso: asset_path('/estilo.css') → /var/www/html/estilo.css
 */
function asset_path($path) {
    return __DIR__ . '/' . ltrim($path, '/');
}
?>
