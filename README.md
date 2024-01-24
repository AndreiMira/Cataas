# Proyecto Cute Cats

Este proyecto utiliza Laravel para mostrar imágenes adorables de gatos. Cada imagen está acompañada de etiquetas (tags) que describen el contenido de la imagen.

## Funcionalidades

-   **Filtrado por Tag:** Puedes filtrar las imágenes por etiquetas específicas para encontrar fácilmente lo que estás buscando.
-   **Paginación:** La lista de imágenes se muestra de 30 en 30, con opciones de paginación para explorar más imágenes.
-   **Vista Bonita:** Las imágenes se presentan en un diseño de tarjeta limpio y estéticamente agradable.

## Configuración

```bash
# Instalación de Dependencias
composer install

# Configuración de la Base de Datos
# 1. Copia el archivo .env.example y renómbralo a .env.
# 2. Configura la conexión a tu base de datos en el archivo .env.

# Migraciones y Semillas
php artisan migrate --seed

# Iniciar el Servidor
php artisan serve
Abre tu navegador y visita http://127.0.0.1:8000.
```
