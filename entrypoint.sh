#!/bin/sh

# Ejecutar migraciones
php artisan migrate --force

# Ejecutar seeders
php artisan db:seed --force

# Iniciar el servidor Apache
exec apache2-foreground