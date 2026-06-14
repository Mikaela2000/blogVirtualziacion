<?php
/**
 * Config global para compatibilidad con NAP y subpaths
 */

// Detectar base path (ruta bajo la que corre la app)
if (!defined('APP_BASE_PATH')) {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    
    // Si el proyecto está en /var/www/html/42501611/, entonces:
    // SCRIPT_NAME será /42501611/index.php
    // Extraemos solo /42501611
    if (preg_match('#^(/42501611)#', $scriptName, $matches)) {
        $basePath = $matches[1];
    } else {
        // Fallback: usar dirname de SCRIPT_NAME
        $basePath = dirname($scriptName);
        $basePath = $basePath === '/' ? '' : rtrim($basePath, '/');
    }
    
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
