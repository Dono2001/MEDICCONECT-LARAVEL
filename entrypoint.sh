#!/bin/sh

# Ajustar permisos en el directorio storage y bootstrap/cache
echo "Ajustando permisos en el directorio storage y bootstrap/cache..."
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Ejecutar migraciones
echo "Ejecutando migraciones..."
php artisan migrate --force

# Ejecutar seeders
echo "Ejecutando seeders..."
php artisan db:seed --force

# Iniciar el servidor Apache
exec apache2-foreground
