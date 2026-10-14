#!/usr/bin/env bash
# exit on error
set -o errexit

composer install --no-dev --optimize-autoloader

# Bersihkan dan buat cache konfigurasi
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Jika menggunakan SQLite, pastikan filenya ada
touch database/database.sqlite
php artisan migrate --force