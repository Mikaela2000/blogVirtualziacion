<?php
/**
 * Config global para compatibilidad con rutas dinámicas
 */

// Detectar base path (ruta bajo la que corre la app)
if (!defined('APP_BASE_PATH')) {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    
    // Extraer directorio base automáticamente
    $basePath = dirname($scriptName);
    $basePath = $basePath === '/' ? '' : rtrim($basePath, '/');
    
    define('APP_BASE_PATH', $basePath);
}

/**
 * Generar URL completa desde ruta relativa
 * Uso: app_url('/actualizar.php') → /42501611/actualizar.php
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
 * Uso: asset_path('/estilo.css') → /var/www/html/42501611/estilo.css
 */
function asset_path($path) {
    return __DIR__ . '/' . ltrim($path, '/');
}
?>
