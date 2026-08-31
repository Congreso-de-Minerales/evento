#!/bin/bash
# Script automático para desplegar en GitHub Pages (gh-pages)
# Resuelve el problema de las subcarpetas al usar spatie/laravel-export

echo "1. Limpiando cachés..."
php artisan route:clear
php artisan config:clear

echo "2. Compilando assets..."
npm run build

echo "3. Exportando sitio estático..."
php artisan export

echo "4. Ajustando estructura de carpetas para GitHub Pages..."
# Movemos los archivos generados dentro de dist/evento a la raíz de dist/ 
# para evitar que queden en /evento/evento/ al publicarse en GitHub Pages
if [ -d "dist/evento" ]; then
    mv dist/evento/* dist/
    rm -rf dist/evento
fi

echo "5. Registrando cambios en Git..."
git add -A
git commit -m "Automated deployment to GitHub Pages"

echo "6. Sincronizando rama main..."
git push origin main

echo "7. Desplegando dist/ en gh-pages..."
git subtree push --prefix dist origin gh-pages

echo "¡Despliegue completado! El sitio estará disponible en breve."
