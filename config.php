<?php
/**
 * Config global para compatibilidad con NAP y despliegues en subpaths
 * Lee APP_BASE_PATH de Apache SetEnv o calcula automáticamente
 */

if (!defined('APP_BASE_PATH')) {
    // Prioridad 1: Variable de entorno de Apache (SetEnv APP_BASE_PATH "/42501611")
    if (!empty($_SERVER['APP_BASE_PATH'])) {
        $basePath = $_SERVER['APP_BASE_PATH'];
    } else {
        // Prioridad 2: Calcular desde SCRIPT_NAME
        $scriptName = $_SERVER['SCRIPT_NAME'];
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
