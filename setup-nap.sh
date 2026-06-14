#!/bin/bash
# ===== SETUP SCRIPT PARA COMPATIBILIDAD CON NAP =====
# Ejecutar en el LXC: sudo bash setup-nap.sh

# 1. Instalar php-mbstring (puede faltar si PHP fue instalado sin todas las extensiones)
echo "Instalando php-mbstring..."
apt-get update
apt-get install -y php-mbstring

# 2. Crear archivo de configuración de entorno para Apache
echo "Configurando Apache con SetEnv..."
cat > /etc/apache2/conf-available/blog-env.conf << 'EOF'
# Variables de entorno para el blog (compatible con NAP)
SetEnv APP_BASE_PATH "/42501611"
EOF

a2enconf blog-env

# 3. Asegurar que .htaccess se lee
echo "Verificando AllowOverride en Apache..."
if ! grep -q "AllowOverride All" /etc/apache2/sites-available/000-default.conf; then
    echo "Actualizando 000-default.conf con AllowOverride All..."
    cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf.bak
    sed -i '/<VirtualHost/,/<\/VirtualHost>/s/<Directory \/var\/www\/html>/&\n    AllowOverride All/' /etc/apache2/sites-available/000-default.conf
fi

# 4. Habilitar mod_rewrite
echo "Habilitando mod_rewrite..."
a2enmod rewrite

# 5. Permisos de archivos
echo "Ajustando permisos..."
chown -R www-data:www-data /var/www/html
find /var/www/html -type d -exec chmod 755 {} \;
find /var/www/html -type f -exec chmod 644 {} \;

# 6. Reiniciar Apache
echo "Reiniciando Apache..."
systemctl restart apache2

# 7. Verificación
echo ""
echo "===== VERIFICACIÓN ====="
echo "Módulos cargados:"
apache2ctl -M | grep -E "rewrite|php"
echo ""
echo "Extensiones PHP:"
php -m | grep -i mbstring
echo ""
echo "Testing interno:"
curl -I http://127.0.0.1/42501611/
curl -I http://127.0.0.1/42501611/estilo.css
echo ""
echo "===== SETUP COMPLETADO ====="
